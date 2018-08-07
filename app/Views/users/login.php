<?php if($errors): ?>
    <div class="alert alert-danger">
        Identifiant incorrects
    </div>
<?php endif; ?>

<form action="" method="post">
    <?= $form->input('username', 'Pseudo'); ?>
    <?= $form->input('password', 'Mot de passe', ['type' => 'password']); ?>
    <button class="btn btn-primary">Envoyer</button>
</form>
