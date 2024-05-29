<?php $title = "Accueil" ?>

<?php ob_start(); ?>

<h1>Bienvenue sur Pict</h1>

<div id='flex-pict'>
    <?php foreach ($result as $row) {
        $src = "./public/". $row['path']; ?>
        <img src='<?= $src ?>' alt=''>
    <?php }; ?>
</div>

<?php $content = ob_get_clean();
require_once('./view/template.php') ?>