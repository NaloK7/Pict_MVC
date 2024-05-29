<?php
session_start();
require_once('./model/UserModel.php');
require_once('./model/ImageModel.php');
require_once('./controller/Controller.php');

class UserController extends Controller {

    // require connection page
    function queryConnectionPage() {
        require_once('./view/connectionView.php');
    }

    // check connection 
    function queryCheckConnection() {
        if (!empty($_POST['email'])) {
            $email = $this->sanitize($_POST['email']);
        } else {
            $msg = 'error';
            // add 'champ requis' in input 
        }
        if (!empty($_POST['password'])) {
            $password = $this->sanitize($_POST['password']);
        } else {
            $msg = 'error';
            // add 'champ requis' in input 
        }
        // check connection
        $query = new UserModel();
        $result = $query->checkConnection();
        require_once('./index.php');
    }
}