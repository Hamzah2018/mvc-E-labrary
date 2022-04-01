<?php
namespace eliber\app\controllers;

// use eliber\app\models\User;
// Router::get('/new_payment',[::class,'newPayment']);
class paymentController extends Controller{

    function  payment(){
        $this->view('order');
    }
    function newPayment(){
        $this->view('new_payment');
    }
        public function show(){
    }
    // public function register(){
    //     $this->view("category");
    // }
}
?>