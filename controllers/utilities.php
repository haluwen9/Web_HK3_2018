<?php

include_once("models/user_model.php");

function Login($UserID, $Password)
{
    $userModel = new userModel;
    if ($userModel->loginAuthenticate($UserID, $Password))
    {
        $_SESSION['userSession'] = $userModel->getUserInfoByID($UserID);
        die("Login Successfully!");
        return TRUE;
    }
    return FALSE;
}

function Logout()
{
    unset($_SESSION['userSession']);
    session_destroy();
}

?>