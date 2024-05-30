<?php
session_start();
require_once('./model/UserModel.php');
require_once('./model/ImageModel.php');
require_once('./controller/Controller.php');

class UserController extends Controller
{

    // require connection page
    function queryConnectionPage()
    {
        require_once('./view/connectionView.php');
    }

    /**
     * checks for errors in email and password inputs, sanitizes
     * the inputs, and then checks the connection using a UserModel before loading the connection view.
     */
    function queryCheckConnection($email, $password)
    {
        $emailError =  false;
        $passwordError = false;
       
        $requiredField = '*champ requis';

        if (!empty($_POST['email'])) {
            $email = $this->sanitize($email);
        } else {
            $emailError = true;
        }
        if (!empty($_POST['password'])) {
            $password = $this->sanitize($password);
        } else {
            $passwordError = true;
        }

        
        if (!$emailError & !$passwordError) {
            $query = new UserModel();
            $result = $query->checkConnection($email, $password);
        }
       
        require_once('./view/connectionView.php');
    }
}
