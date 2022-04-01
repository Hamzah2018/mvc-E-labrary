<?php
namespace eliber\app\controllers;

// use eliber\app\models\AUthor;

// Router::get('/t',[a::class,' ']);
class addressesController extends Controller{
    // function  authors(){
    //     $this->view('auther');
    // }
    function newAddresses(){
        $this->view('new_addresses');
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