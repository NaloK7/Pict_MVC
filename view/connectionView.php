<?php $title = "Connexion" ?>

<?php ob_start(); ?>

<h1>Connexion</h1>
<?php
// query connection made
if (isset($result)) {
    // result of query
    if ($result) {
?>
        <p>Connexion reussi</p>
<?php } else { ?>
        <p>Problème d'identification</p>
        <a href="./index.php?action=connection">retour</a>
<?php };

} else {
    ?>
    <form action="./index.php?action=checkConnection" method="post">
        <label for="email">Email:</label>

        <?php if (isset($emailError)) {
            if ($emailError) { ?>
                <span class="error"><?= $requiredField ?></span>
        <?php }
        }; ?>

        <input type="text" name="email" placeholder=<?php if (isset($emailError) & isset($passwordError) & isset($result)) { if (!$emailError & !$passwordError & !$result) {
            echo $email;
        }} else {
            echo "email" ;
        }?>>


        <label for="password">Mot de passe:</label>

        <?php if (isset($passwordError)) {
            if ($passwordError) { ?>
                <span class="error"><?= $requiredField ?></span>
        <?php }
        }; ?>

        <input type="text" name="password" placeholder="mot de passe">

        <input type="submit" value="connexion">
    </form>
<?php }
$content = ob_get_clean();
require_once('./view/template.php');
?>