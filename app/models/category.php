<?php 
namespace eliber\app\models;
class Category extends Model{
    function __construct()
    {
        parent::$tblName = "categories";
    }
}
?>