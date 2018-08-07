<?php

namespace App\Controller;

use Core\Controller\Controller;

class PostsController extends AppController {

    public function __construct() {
        parent::__construct();
        $this->loadModel('Post');
        $this->loadModel('Category');
    }

    public function index(){
        $posts = $this->Post->last();
        $categories = $this->Category->all();

//        la fonction compact de PHP permet de créer un tableau à partir de variables
//        compact ('posts', 'categories');
//        cette fonction renvoie :
//        ['posts' => $posts, 'categories' => $categories];
        $this->render('posts.index', compact ('posts', 'categories'));
        //var_dump($posts, $categories);
    }

    public function  category(){
        $categorie = $this->Category->find($_GET['id']);

        if($categorie === false){
            $this->notFound();
        }
        $articles = $this->Post->lastByCategory($_GET['id']);
        $categories = $this->Category->all();
        $this->render('posts.category', compact ('articles', 'categories', 'categorie'));
    }

    public function show(){
        $article = $this->Post->findWithCategory($_GET['id']);
        $this->render('posts.show', compact ('article'));
    }

}