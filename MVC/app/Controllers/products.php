<?php

class Products extends Controller{
    public function index(){
        echo "This is Product Controller";
        $this->view('products');
    }
}

