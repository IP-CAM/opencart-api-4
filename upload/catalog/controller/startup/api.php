<?php

require_once DIR_SYSTEM.'helper/api.php';

class ControllerStartupApi extends Controller
{
    public function index()
    {

        if (isset($this->request->get['_route_']) && isApiRoute($this->request->get['_route_']) && !preg_match("/api\/session/i", $this->request->get['_route_'])) {

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
                    return_response("403","Invalid token");
                }
            } else {
                return_response("403","Missing token");
            }
        }
    }
}