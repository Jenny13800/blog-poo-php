<?php
define('ROOT', dirname(__DIR__));
//require dirname(__DIR__) . 'app/App.php';
require ROOT . '/app/App.php';

App::load();

if(isset($_GET['p'])){
    $page = $_GET['p'];
} else {
    $page = 'posts.index';
}

$page = explode('.', $page);
if($page[0] == 'admin'){
    $controller = '\App\Controller\Admin\\' . ucfirst($page[1]) . 'Controller';
    $action = $page[2];
} else {
    $controller = '\App\Controller\\' . ucfirst($page[0]) . 'Controller';
    $action = $page[1];
}

$controller = new $controller();
$controller->$action();



//ob_start();
/*if($page === 'home'){
    $controller = new \App\Controller\PostsController();
    $controller->index();
} elseif ($page === 'posts.category') {
    $controller = new \App\Controller\PostsController();
    $controller->category();
} elseif ($page === 'posts.show') {
    $controller = new \App\Controller\PostsController();
    $controller->show();
} elseif ($page === 'login') {
    $controller = new \App\Controller\UsersController();
    $controller->login();
} elseif ($page === 'admin.posts.index') {
    $controller = new \App\Controller\Admin\PostsController();
    $controller->index();
}*/

/*$content = ob_get_clean();
require ROOT . '/pages/templates/default.php';*/
/*require '../app/Autoloader.php';
App\Autoloader::register();*/

/*$app = App::getInstance();
$posts = $app->getTable('Posts');
var_dump($posts->all());*/

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