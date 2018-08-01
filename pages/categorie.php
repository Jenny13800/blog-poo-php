<?php

use App\App;
use App\Table\Article;
use App\Table\Categorie;

$categorie = Categorie::find($_GET['id']);
if($categorie === false){
    App::notFound();
}
$articles = Article::lastByCategory($_GET['id']);
$categories = Categorie::all();

?>

<h1><?= $categorie->titre ?></h1>

<div class="row">
    <div class="col-sm-8">
        <?php foreach($articles as $post): ?>

            <?php //var_dump($post); ?>

            <h2><a href="<?= $post->url; ?>"><?= $post->titre; ?></a></h2>

            <p><em><?= $post->categorie; ?></em></p>

            <p><?= $post->extrait; ?></p>

        <?php endforeach; ?>
    </div>
    <div class="col-sm-4">
        <ul>
        <?php foreach(\App\Table\Categorie::all() as $categorie): ?>
            <li><a href="<?= $categorie->url ?>"><?= $categorie->titre; ?></a></li>
        <?php endforeach; ?>
        </ul>
    </div>
</div>



<?php
//$db = new \App\Database('blog');

// $datas = $db->query('SELECT * FROM articles');

// var_dump($datas);

//var_dump($datas[0]->titre);

//$count = $pdo->exec('INSERT INTO articles SET titre="Mon titre", date="' . date('Y-m-d H:i:s') . '", contenu="lorem ipsum"');

//var_dump($count);

?>