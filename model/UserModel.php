<?php

require_once('./model/DB.php');

class UserModel extends DB {

    function getConnectionPage() {
        require_once('./view/connectionView.php');
    }
    
    
    /**
     * verifies the user's email and password against the database and sets
     * session variables if the credentials are correct.
     */
    function checkConnection($email, $password) {
        $status = false;
        $con = $this->connectTo();

        $state = $con->prepare("SELECT id, password FROM user WHERE email = :email");
        $state->bindParam(':email', $email);
        $state->execute();
        $count = $state->rowCount();
        if ($count > 0) {
            $result = $state->fetch(PDO::FETCH_ASSOC);
            if (password_verify($password, $result['password'])) {
                $_SESSION['name'] = "user";
                $_SESSION['idUser'] = $result['id'];
                $status = true;          
            }
        }
        $con = null;

        return $status;
    }
}



