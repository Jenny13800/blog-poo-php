<?php

use Core\Database\MysqlDatabase;
use Core\Config;

class App {

    //private static $database;
    private static $_instance;
    private $db_instance;
    public $title = "Mon super site!";

    public static function getInstance(){
        if(is_null(self::$_instance)){
            self::$_instance = new App();
        }
        return self::$_instance;
    }

    public static function load(){
        session_start();
        require ROOT . '/app/Autoloader.php';
        App\Autoloader::register();
        require ROOT . '/core/Autoloader.php';
        Core\Autoloader::register();
    }

    public function getTable($name){
        $class_name = '\\App\\Table\\' . ucfirst($name) . 'Table';
        return new $class_name($this->getDb());
    }

    public function getDb(){
        $config = Config::getInstance(ROOT . '/config/config.php');
        if(is_null($this->db_instance)){
            $this->db_instance = new MysqlDatabase($config->get('db_name'), $config->get('db_user'), $config->get('db_pass'), $config->get('db_host'));
        }
        return $this->db_instance;
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