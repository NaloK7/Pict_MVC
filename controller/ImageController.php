<?php

require_once('./model/UserModel.php');
require_once('./model/ImageModel.php');

class ImageController
{

    function queryLastX()
    {
        $img = new ImageModel();
        // var_dump($img);
        $result = $img->getLastX();
        // var_dump($result);
        require_once('./view/homeView.php');
    }
}
