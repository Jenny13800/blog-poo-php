<?php

namespace App;

class App {

    //private static $database;
    private static $_instance;

    public $title = "Mon super site!";

    public static function getInstance(){
        if(is_null(self::$_instance)){
            self::$_instance = new App();
        }
        return self::$_instance;
    }

    /*private static $title = 'Mon super site!';

    public static function getDb(){

        if(self::$database === null) {
            self::$database = new Database(self::DB_NAME, self::DB_USER, self::DB_PASS,self::DB_HOST);
        }

        return self::$database;
    }

    public static function notFound() {
        header("HTTP/1.0 404 Not Found");
        header('Location:index.php?p=404');
    }

    public static function getTitle(){
        return self::$title;
    }

    public static function setTitle($title){
        /* titre de base + titre de la page */
        /*self::$title = $title*/ /*. ' | ' . self::$title;*/
    //}

}