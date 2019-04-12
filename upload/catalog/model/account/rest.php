<?php
class ModelAccountRest extends Model {

	public function getApiInfoByUsername($username)
    {
        $query = $this->db->query("SELECT * FROM `" . DB_PREFIX . "api` WHERE `username` = '" . $this->db->escape($username) . "' AND `status` = '1'");

        return $query->row;
    }
}
