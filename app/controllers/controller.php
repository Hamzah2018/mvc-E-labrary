<?php
namespace eliber\app\controllers;

use eliber\app\system\AppSystem;
use eliber\app\system\Request;
use eliber\app\system\Router;

class Controller{

   function view($viewName,$params=[]){
       AppSystem::$appSystem->router->view($viewName,$params);
   }

}
?>