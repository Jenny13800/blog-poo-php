<?php

/**
 * Class Autoloader
 */

namespace Core;

class Autoloader {

    static function register(){
        // récupère nom du fichier et appelle fonction autoload
        spl_autoload_register(array(__CLASS__, 'autoload'));
    }

    /**
     * @param $class string
     */
    static function autoload($class){
        if (strpos($class, __NAMESPACE__ . '\\') === 0) {
            $class = str_replace(__NAMESPACE__ . '\\', '', $class);
            //$class = str_replace('\\', '/', $class);
            require __DIR__ . '/' . $class . '.php';
        }
    }
}