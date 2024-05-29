<?php $title = "Connexion" ?>

<?php ob_start(); ?>

<h1>Connexion</h1>
<form action="./index.php?action=checkConnection" method="post">
    <label for="email">Email:</label>
    <input type="text" name="email" placeholder="email">

    <label for="password">Mot de passe:</label>
    <input type="text" name="password" placeholder="mot de passe">

    <input type="submit" value="connexion">
</form>
<?php $content = ob_get_clean();
require_once('./view/template.php');
?>