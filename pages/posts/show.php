<?php

$app = App::getInstance();
$post = $app->getTable('Post')->find($_GET['id']);

//$post = Article::find($_GET['id']);
if($post === false){
    $app->notFound();
}

$app->title = $post->titre;
//$categorie = Categorie::find($post->category_id);

?>

<h1><?= $post->titre; ?></h1>

<p><em><?= $post->categorie; ?></em></p>

<p><?= $post->contenu; ?></p>