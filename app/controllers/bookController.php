<?php
namespace eliber\app\controllers;

// use eliber\app\models\User;

class bookController extends Controller{

    function  book(){
        $this->view('book');
    }
    function newBook(){
        $this->view('new_book');
    }
        public function show(){
    }
    // public function register(){
    //     $this->view("category");
    // }
}
?>