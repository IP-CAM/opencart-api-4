<?php
class ControllerRestCategory extends Controller {

	public function index() {

        $this->load->model('api/category');

        $json['categories'] = $this->model_api_category->getCategories();

		$this->response->addHeader('Content-Type: application/json');
		$this->response->setOutput(json_encode($json));

	}
}
