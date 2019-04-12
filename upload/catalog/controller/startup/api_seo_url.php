<?php

require_once DIR_SYSTEM.'helper/api.php';

class ControllerStartupApiSeoUrl extends Controller
{
    public function index()
    {
        // Decode URL
        if (isset($this->request->get['_route_']) && isApiRoute($this->request->get['_route_'])) {

            $path = $this->request->get['_route_'];

            $query = $this->db->query("SELECT * FROM " . DB_PREFIX . "api_seo_url WHERE keyword = '" . $this->db->escape($path) . "'");

            if ($query->num_rows) {
                $this->request->get['route'] = $query->row['query'];
            } else {
                header("HTTP/1.1 404");
                exit;
            }
        }
    }
}
