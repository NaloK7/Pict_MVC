<?php
if (!isset($_COOKIE["theme"])) {
    // echo "set cookie";
    setcookie("theme", "default", time() + 3600 * 30 * 12);
};

?>
<header>
    <div id='nav1'><a href='./index.php'>index</a>
        <?php if (empty($_SESSION['name'])) { ?>
            <a href='./inscriptionView.php'>inscription</a> <!-- todo: change href -->
            <a href='./index.php?action=connection'>connection</a>
    </div>
<?php } else { ?>
    <a href='./addPicture.php'>ajouter une photo</a> <!-- todo: change href -->
    <a href='./deconnectionPopUp.php' id='deconnect'>deconnection</a> <!-- todo: change href -->
    <a href='./profil.php' id='profil'>profil</a></div> <!-- todo: change href -->

<?php }; ?>
<div id='nav3'>
    <a href='./switchTheme.php'>theme</a> <!-- todo: change href -->
</div>
</header>