<?php


class Home extends Controller{
    public function index($a='' ,$b='' , $c='' ){
        echo "This is Home Controller ";
        $this->view('home');
    }
}

