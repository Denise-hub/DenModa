<?php

class Pages extends Controller {
    public function __construct() {
        $this->productModel = $this->model('Product');
    }
    public function index() {
        $products = $this->productModel->getProduct();
        $data = [
            'title' => 'Home page',
            'products' => $products
        ];
        
        $this->view('pages/index', $data);
    }
    public function product() {
        // echo "Our product";
        $this->view('pages/product');
    }
}
?>