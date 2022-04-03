<?php
namespace eliber\app\controllers;

use eliber\app\models\Category;

// use eliber\app\models\User;

class categoryController extends Controller{

    function  category(){

        $this->view('category');
    }
        public function listAll(){
            // $parameters['status'];
            $categories = new Category();
            $allCategories =  $categories->getAll();
//          print_r($allCategories);
            $this->view('list_categories',$allCategories);
            // $quey  = "select * from ".self::$tblName."";
        }
    function createCat(){
        $this->view('add_category');
    }
    function store(){
        print_r($_FILES);
        print_r($_POST);
        // Why print_r($_FILES);
        // Why $cat = new Cat();
        $category=new Category();
        // $cat->name = $_POST['cat_name'];
        $category->name=$_POST['category_name'];
        // imgname-> 
        $imageName=$this->uploadFile($_FILES['image']);
        //
        $category->image=$imageName!=null?$imageName:"default.png";
        $category->created_by=1;
        $category->is_active=$_POST['is_active'];
        $category->save();
        
        // $_FILES
    }
    function edit(){

    }
    function update(){

    }
    function remove(){
    }
    // public function register(){
    //     $this->view("category");
    // }
    public static function uploadFile(array $imageFile): string
    {
        // check images direction
        if (!is_dir(__DIR__ . '/../../public/images')) {
            mkdir(__DIR__ . '/../../public/images');
        }
        if ($imageFile && $imageFile['tmp_name']) {
            $image = explode('.', $imageFile['name']);
            $imageExtension = end($image);
            $imageName = uniqid(). "." . $imageExtension;
            $imagePath =  __DIR__ . '/../../public/images/' . $imageName;
            move_uploaded_file($imageFile['tmp_name'], $imagePath);
            return $imageName;
        }
        return null;
    }
}
?>