<?php

require_once DIR_SYSTEM.'helper/api.php';

class apiController extends Controller {

    protected $statusCode = 200;
    private $httpVersion = "HTTP/1.1";
    protected $allowedHeaders = array("GET", "POST", "PUT", "DELETE");

    public function checkToken()
    {
        $bearer_token = get_bearer_token();

        if ($bearer_token) {

            $this->db->query("DELETE FROM `" . DB_PREFIX . "api_session` WHERE TIMESTAMPADD(HOUR, 1, date_modified) < NOW()");

            $api_query = $this->db->query("SELECT DISTINCT * FROM `" . DB_PREFIX . "api` `a` 
                    LEFT JOIN `" . DB_PREFIX . "api_session` `as` ON (a.api_id = as.api_id) 
                    WHERE a.status = '1' AND `as`.`session_id` = '" . $this->db->escape($bearer_token) . "'");

            if ($api_query->num_rows) {
                $this->session->start($bearer_token);
                // keep the session alive
                $this->db->query("UPDATE `" . DB_PREFIX . "api_session` SET `date_modified` = NOW() WHERE `api_session_id` = '" . (int)$api_query->row['api_session_id'] . "'");
            } else {
                $json["error"][] = 'Invalid token!';
                $this->statusCode = 403;
            }
        } else {
            $json["error"][] = 'Missing token!';
            $this->statusCode = 403;
        }
        if ($this->statusCode != 200) {
            $this->sendResponse($json);
        }
    }
    public function sendResponse($data)
    {
        if ($this->statusCode == 405) {
            $this->response->addHeader('Allow: ' . implode(",", $this->allowedHeaders));
        }

        $statusMessage = $this->getHttpStatusMessage($this->statusCode);
        $this->response->addHeader($this->httpVersion . " ".$this->statusCode." " . $statusMessage);
        $this->response->addHeader('Content-Type: application/json');
        $this->response->addHeader('Access-Control-Allow-Origin: *');
        $this->response->setOutput(json_encode($data));
        $this->response->output();
        die();
    }
    public function getHttpStatusMessage($statusCode)
    {

        $httpStatus = array(
            200 => 'OK',
            400 => 'Bad Request',
            401 => 'Unauthorized',
            403 => 'Forbidden',
            404 => 'Not Found',
            405 => 'Method Not Allowed'
        );

        return $httpStatus[$statusCode];
    }
}