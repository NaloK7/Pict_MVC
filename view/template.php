<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./public/css/style.css">
    <title><?= $title ?></title>
</head>
<!-- .dark .balise {} in css  -->
<body <?= $_COOKIE['theme'] == "dark" ? "class='dark'" : null ?>>
    <?php require_once('./view/header.php') ?>

    <main>
        <?= $content ?>
    </main>
</body>
</html>