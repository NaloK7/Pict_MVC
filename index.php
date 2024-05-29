<?php

require_once('./controller/ImageController.php');
require_once('./controller/UserController.php');

try {
    if (isset($_GET['action'])) {
        if ($_GET['action'] == 'connection') {
            $action = new UserController();
            $action->queryConnectionPage();
        }
        elseif ($_GET['action'] == 'checkConnection') {
            $action = new UserController();
            $action->queryCheckConnection();
        }
    } else {
        $control = new ImageController();

        $control->queryLastX();
    }
} catch (Exception $e) {
    $errorMsg = $e->getMessage();
    // require_once('errorView.php')
}
