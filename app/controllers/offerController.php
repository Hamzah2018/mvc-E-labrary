<?php
namespace eliber\app\controllers;

// use eliber\app\models\User;

class offerController extends Controller{

    function  offers(){
        $this->view('offers');
    }
    function newOffer(){
        $this->view('new_offer');
    }
        public function show(){
    }
    // public function register(){
    //     $this->view("category");
    // }
}
?>