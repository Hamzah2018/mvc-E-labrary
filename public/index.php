<?php
require_once __DIR__ . '/../vendor/autoload.php';

use eliber\app\controllers\AuthorsController;
use eliber\app\controllers\PublishersController;
use eliber\app\system\AppSystem;
use eliber\app\system\Router;
use eliber\app\controllers\UsersController;
// <<<<<<< HEAD
use eliber\app\controllers\homeController;
use eliber\app\controllers\bookController;
use eliber\app\controllers\publisherController;
use eliber\app\controllers\cityController;
use eliber\app\controllers\offerController;
use eliber\app\controllers\orderController;
use eliber\app\controllers\paymentController;
use eliber\app\controllers\addressesController;
use eliber\app\controllers\categoryController;
use Dotenv\Dotenv;
// >>>>>>> category


$dotenv = Dotenv::createImmutable(dirname(__DIR__));//createImmutable(__DIR__);
$dotenv->load();

$config = array(
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

//AT3211
//2688

Router::get('/books',function(){
  echo "books route path";
});


Router::get('/new_user',[UsersController::class,'register']);
Router::get('/home',[homeController::class,'home']);

Router::get('/book',[bookController::class,'book']);
Router::get('/new_book',[bookController::class,'newBook']);
// Router::get('/add_category',[categoryController::class,'createCat']);
// Router::post('/save_category',[categoryController::class,'store']);
// Router::get('/edit_category/{id}',[categoryController::class,'edit']);
// Router::get('/remove_category',[categoryController::class,'remove']);
// Router::get('/update_category',[categoryController::class,'update']);
// bookControllerlist_book
Router::get('/list_book',[bookController::class,'listAllb']);
//              new_authorauthorsController
Router::get('/new_author',[authorsController::class,'newAuther']);
Router::get('/new_publisher',[publisherController::class,'newPublisher']);
Router::get('/new_city',[cityController::class,'newCity']);
Router::get('/new_offer',[offerController::class,'newOffer']);
Router::get('/new_order',[orderController::class,'newOrder']);
Router::get('/new_payment',[paymentController::class,'newPayment']);
Router::get('/new_addresses',[addressesController::class,'newAddresses']);
                              //                         newPublisher
// Router::get('/new_book',[bookController::class,'newBook']);
// Router::post('/save_book',[UsersController::class,'createBook']);

Router::get('/remove_user',[UsersController::class,'delete']);

Router::post('/users',[UsersController::class,'show']);
Router::get('/new_user',[UsersController::class,'newUser']);
Router::get('/category',[categoryController::class,'category']);
            //list_categories
Router::get('/list_categories',[categoryController::class,'listAll']);
Router::get('/add_category',[categoryController::class,'createCat']);
Router::post('/save_category',[categoryController::class,'store']);
Router::get('/edit_category/{id}',[categoryController::class,'edit']);
Router::get('/remove_category',[categoryController::class,'remove']);
Router::get('/update_category',[categoryController::class,'update']);

Router::post('/save_user',[UsersController::class,'saveUser']);
Router::get('/save_author',[AuthorsController::class,'createAuthor']);
$system->start();

