<?php
if (!isset($_COOKIE["theme"])) {
    // echo "set cookie";
    setcookie("theme", "default", time() + 3600 * 30 * 12);
};

?>
<header>
    <div id='nav1'><a href='./index.php'>index</a>
        <?php if (empty($_SESSION['name'])) { ?>
            <a href='#'>inscription</a> <!-- todo: change href -->
            <a href='./index.php?action=connection'>connexion</a>
    </div>
    <?php } else { ?>
        <a href='#'>ajouter une photo</a> <!-- todo: change href -->
        <a href='./index.php?action=deconnection' id='deconnect'>deconnexion</a> <!-- todo: change href -->
        <a href='#' id='profil'>profil</a></div> <!-- todo: change href -->

    <?php }; ?>
    <div id='nav3'>
        <a href='#'>theme</a> <!-- todo: change href -->
    </div>
</header>