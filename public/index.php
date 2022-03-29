<?php
require_once __DIR__ . '/../vendor/autoload.php';

use eliber\app\controllers\AuthorsController;
use eliber\app\controllers\PublishersController;
use eliber\app\system\AppSystem;
use eliber\app\system\Router;
use eliber\app\controllers\UsersController;
use eliber\app\controllers\categoryController;
use Dotenv\Dotenv;

$dotenv = Dotenv::createImmutable(dirname(__DIR__));//createImmutable(__DIR__);
$dotenv->load();

$config=array(
  'servername'=>$_ENV['DB_SERVER_NAME'],
  'dbname'=>$_ENV['DB_NAME'],
  'dbpass'=>$_ENV['DB_PASSWORD'],
  'username'=>$_ENV['DB_USERNAME']

);
$system=new AppSystem($config);


Router::get('/users',[UsersController::class,'show']);

Router:: get ('/', function () {
  return 'Welcome to index';
});



Router::get('/books',function(){
  echo "books route path";
});

Router::get('/new_user',[UsersController::class,'register']);

Router::get('/remove_user',[UsersController::class,'delete']);

Router::post('/users',[UsersController::class,'show']);
Router::get('/new_user',[UsersController::class,'newUser']);
Router::get('/category',[categoryController::class,'category']);

Router::post('/save_user',[UsersController::class,'saveUser']);
Router::get('/save_author',[AuthorsController::class,'createAuthor']);
$system->start();

