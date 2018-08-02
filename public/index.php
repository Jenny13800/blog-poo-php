<?php

require '../app/Autoloader.php';

App\Autoloader::register();

$app = \App\App::getInstance();

$posts = $app->getTable('Posts');
var_dump($posts->all());

//var_dump(\App\App::getTable('Posts'));
//var_dump(\App\App::getTable('Users'));
//var_dump(\App\App::getTable('Categories'));

/*$app = \App\App::getInstance();
$app->title = "Titre de test";

$app2 = \App\App::getInstance();
echo $app2->title; */

//var_dump($config = \App\Config::getInstance()->get('db_user'));

/*if (isset($_GET['p'])) {
    $p = $_GET['p'];
} else {
    $p = 'home';
}

ob_start();

if($p === 'home') {
    require '../pages/home.php';
} elseif($p === 'article') {
    require '../pages/single.php';
} elseif($p === 'categorie') {
    require '../pages/categorie.php';
}

$content = ob_get_clean();
require '../pages/templates/default.php';*/