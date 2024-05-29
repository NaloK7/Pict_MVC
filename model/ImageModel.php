<?php

require_once('./model/DB.php');
class ImageModel extends DB
{

    function getLastX()
    {
        $con = $this->connectTo();
        $state = $con->prepare('SELECT * FROM picture ORDER BY date DESC LIMIT 8');
        $state->execute();
        $result = $state->fetchAll(PDO::FETCH_ASSOC);
        $con = null;
        return $result;
    }
}