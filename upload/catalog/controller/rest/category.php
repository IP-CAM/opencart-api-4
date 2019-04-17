<?php

require_once(DIR_SYSTEM . 'engine/apiController.php');

class ControllerRestCategory extends apiController
{

    public function index()
    {
        $json = [];

        $this->checkToken();

        if ($this->request->server['REQUEST_METHOD'] == 'GET') {
            if (isset($this->request->get['parent'])) {
                $parent_id = $this->request->get['parent'];
            }
            $this->load->model('api/category');

            $json['categories'] = $this->model_api_category->getCategories($parent_id);

        } else {
            $this->statusCode = 405;
            $this->allowedHeaders = ['GET'];
        }

        $this->sendResponse($json);

    }
}
