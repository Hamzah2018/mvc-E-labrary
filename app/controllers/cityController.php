<?php
namespace eliber\app\controllers;

// use eliber\app\models\User;

class cityController extends Controller{

    function  city(){
        $this->view('city');
    }
    function newCity(){
        $this->view('new_city');
    }
        public function show(){
    }
    // public function register(){
    //     $this->view("category");
    // }
}
?>