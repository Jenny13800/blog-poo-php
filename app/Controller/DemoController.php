<?php

namespace App\Controller;

use Core\Database\QueryBuilder;

class DemoController extends AppController {

   public function index(){
        $query = new QueryBuilder();
        //echo $query->select('id', 'titre', 'contenu')->from('articles', 'Post')->where('id = 1')->getQuery();
       // article avec une categorie particulière && tous les articles daté du futur
       echo $query
           ->select('id', 'titre', 'contenu')
           ->from('articles', 'Post')
           ->where('Post.category_id = 1')
           ->where('Post.date > NOW()');
   }

}