<?php
$table = App::getInstance()->getTable('Category');
if(!empty($_POST)){
    $result = $table->create([
        'titre' => $_POST['titre']
    ]);
    //var_dump($result);
    if($result){
        header('Location: admin.php?p=categories.index');
    }
}
//$categories = App::getInstance()->getTable('Category')->extract('id','titre');
$form = new \Core\HTML\BootstrapForm($_POST);

?>

<form action="" method="post">
    <?= $form->input('titre', 'Titre de l\'article'); ?>
    <button class="btn btn-primary">Sauvegarder</button>
</form>
