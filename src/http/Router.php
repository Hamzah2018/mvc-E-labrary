<?php
namespace  SecTheater\Http;
class Route{
   public static $routes = [];
   public static function get($route,callable|array|string $action){
       self::$routes['get'][$route] =$action;

   }

   public static function post($route,$action){
    self::$routes['post '][$route] =$action;

}
//    Route::get($route,$action)
}

?>