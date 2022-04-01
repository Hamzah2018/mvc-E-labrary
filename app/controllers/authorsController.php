<?php
namespace eliber\app\controllers;

// use eliber\app\models\AUthor;

class authorsController extends Controller{

    // function  authors(){
    //     $this->view('auther');
    // }
    function newAuther(){
        $this->view('new_author');
    }
        public function show(){
    }
    // public function createAuthor(){
    //     $author=new AUthor();
    //     $author->name="hamzah";
    //     $author->phone="77878788";
    //     $author->bio="fafdasdfasdfas";
    //     $author->email="auth@gmail.com";
    //     $author->created_by=1;
    //     $author->is_active=1;
    //     $author->save();
    // }

}
?>