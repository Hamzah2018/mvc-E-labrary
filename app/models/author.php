<?php

namespace eliber\app\models;

class Author extends Model{
    function __construct()
    {
        parent::$tblName="authors";
    }
}
?>