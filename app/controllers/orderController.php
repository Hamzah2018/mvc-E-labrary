<?php
namespace eliber\app\controllers;

// use eliber\app\models\User;

class orderController extends Controller{

    function  order(){
        $this->view('order');
    }
    function newOrder(){
        $this->view('new_order');
    }
        public function show(){
    }
    // public function register(){
    //     $this->view("category");
    // }
}
?>