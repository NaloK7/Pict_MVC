<?php

require_once('./model/DB.php');

class UserModel extends DB {

    function getConnectionPage() {
        require_once('./view/connectionView.php');
    }

    function checkConnection() {
        
    }
}



