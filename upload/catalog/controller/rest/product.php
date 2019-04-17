<?php

require_once(DIR_SYSTEM . 'engine/apiController.php');

class ControllerRestProduct extends apiController
{

    public function index()
    {
        $json = [];

        $this->checkToken();

        if ($this->request->server['REQUEST_METHOD'] == 'GET') {
            $this->load->model('api/product');
            $this->load->model('catalog/product');
            if (isset($this->request->get['product_id'])) {
                $json['product'] = $this->getProduct($this->request->get['product_id']);
            } else {
                if (isset($this->request->get['sort'])) {
                    $sort = $this->request->get['sort'];
                } else {
                    $sort = 'p.sort_order';
                }

                if (isset($this->request->get['order'])) {
                    $order = $this->request->get['order'];
                } else {
                    $order = 'asc';
                }
                if (isset($this->request->get['category_id'])) {
                    $category_id = $this->request->get['category_id'];
                } else {
                    $category_id = 0;
                }

                $data = [
                    'filter_category_id' => $category_id,
                    'sort' => $sort,
                    'order' => strtolower($order)
                ];
                $json['products'] = $this->model_api_product->getProducts($data);
            }

        } else {
            $this->statusCode = 405;
            $this->allowedHeaders = ['GET'];
        }

        $this->sendResponse($json);

    }

    private function getProduct($product_id)
    {
        $data = $product_info = $this->model_api_product->getProduct($product_id);

        $data['additional_images'] = array();

        $results = $this->model_catalog_product->getProductImages($product_id);
        $this->load->model('tool/image');
        foreach ($results as $result) {
            $data['additional_images'][] = $result['image'];
        }

        $discounts = $this->model_catalog_product->getProductDiscounts($product_id);

        $data['discounts'] = array();

        foreach ($discounts as $discount) {
            $data['discounts'][] = array(
                'quantity' => $discount['quantity'],
                'price' => $this->currency->format($this->tax->calculate($discount['price'], $product_info['tax_class_id'], $this->config->get('config_tax')), $this->session->data['currency'])
            );
        }
        $data['options'] = array();
        $prod_options = $this->model_catalog_product->getProductOptions($product_id);
        foreach ($prod_options as $option) {
            $product_option_value_data = array();

            foreach ($option['product_option_value'] as $option_value) {
                if (!$option_value['subtract'] || ($option_value['quantity'] > 0)) {
                    if ((($this->config->get('config_customer_price') && $this->customer->isLogged()) || !$this->config->get('config_customer_price')) && (float)$option_value['price']) {
                        $price = $this->currency->format($this->tax->calculate($option_value['price'], $product_info['tax_class_id'], $this->config->get('config_tax') ? 'P' : false), $this->session->data['currency']);
                    } else {
                        $price = false;
                    }

                    $product_option_value_data[] = array(
                        'product_option_value_id' => $option_value['product_option_value_id'],
                        'option_value_id' => $option_value['option_value_id'],
                        'name' => $option_value['name'],
                        'image' => $this->model_tool_image->resize($option_value['image'], 50, 50),
                        'price' => $price,
                        'price_prefix' => $option_value['price_prefix']
                    );
                }
            }

            $data['options'][] = array(
                'product_option_id' => $option['product_option_id'],
                'product_option_value' => $product_option_value_data,
                'option_id' => $option['option_id'],
                'name' => $option['name'],
                'type' => $option['type'],
                'value' => $option['value'],
                'required' => $option['required']
            );
        }

        $this->load->model('setting/extension');
        $payments_results = $this->model_setting_extension->getExtensions('payment');
        foreach ($payments_results as $payment) {
            if ($this->config->get('payment_' . $payment['code'] . '_status')) {
                $this->load->language('extension/payment/' . $payment['code']);
                $title = $this->language->get('text_title');
                $data['payment_methods'][] = $title;
            }
        }

        $shipping_results = $this->model_setting_extension->getExtensions('shipping');
        foreach ($shipping_results as $shipping) {
            if ($this->config->get('shipping_' . $shipping['code'] . '_status')) {
                $this->load->language('extension/shipping/' . $shipping['code']);
                $title = $this->language->get('text_title');
                $data['shipping_methods'][] = $title;
            }
        }

        return $data;
    }
}
