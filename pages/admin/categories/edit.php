<?php
$table = App::getInstance()->getTable('Category');
if(!empty($_POST)){
    $result = $table->update($_GET['id'], [
        'titre' => $_POST['titre']
    ]);
    //var_dump($result);
    if($result){
        ?>
        <div class="alert alert-success">La catégorie a bien été modifiée</div>
        <?php
    }
}
$categorie = $table->find($_GET['id']);
//$categories = App::getInstance()->getTable('Category')->extract('id','titre');
$form = new \Core\HTML\BootstrapForm($categorie);

?>

<form action="" method="post">
    <?= $form->input('titre', 'Titre de la catégorie'); ?>
    <button class="btn btn-primary">Sauvegarder</button>
</form>
