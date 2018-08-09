<?php

namespace Core\Auth;

use Core\Database\Database;

/**
 * Class DBAuth
 * @package Core\Auth
 */

class DBAuth {

    private $db;

    public function __construct(Database $db) {
        $this->db = $db;
    }

    public function getUserId(){
        if($this->logged()){
            return $_SESSION['auth'];
        }
        return false;
    }

    /**
     * @param $username
     * @param $password
     * @return boolean
     */
    public function login($username, $password){
        $user = $this->db->prepare('SELECT * FROM users WHERE username = ?', [$username], null, true);
        if($user){
            // sha1 à remplacer
            // utiliser password_hash pour hacher le mdp
            // password_verify() => verifie le hash
            if($user->password === sha1($password)){
                $_SESSION['auth'] = $user->id;
                return true;
            }
        }
        return false;
        /*var_dump(sha1('demo'));
        var_dump($user);*/
    }

    // vérifie dans la session si l'utilisateur est connecté
    public function logged(){
        return isset($_SESSION['auth']);
    }

}