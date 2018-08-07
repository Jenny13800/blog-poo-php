<div class="row">
    <div class="col-sm-8">
        <?php foreach($posts as $post): ?>

            <?php //var_dump($post); ?>

            <h2><a href="<?= $post->url; ?>"><?= $post->titre; ?></a></h2>

            <p><em><?= $post->categorie; ?></em></p>

            <p><?= $post->extrait; ?></p>

        <?php endforeach; ?>
    </div>
    <div class="col-sm-4">
        <ul>
        <?php foreach($categories as $categorie): ?>
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