<?php

include_once("models/user_model.php");

function Login($UserID, $Password)
{
    $userModel = new userModel;
    $res = $userModel->loginAuthenticate($UserID, $Password);

    if ($res == 2)
    {
        $_SESSION['userSession'] = $userModel->getUserInfoByID($UserID);
        // die("Login Successfully!");
    }
    return $res;
}

function Logout()
{
    $_SESSION = array();
    session_destroy();
}

?>