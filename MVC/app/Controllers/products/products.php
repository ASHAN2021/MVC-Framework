<?php


class Products extends Controller{
    public function index(){
        echo "This is Producr controller";
        $this->view('products/products');
    }
}