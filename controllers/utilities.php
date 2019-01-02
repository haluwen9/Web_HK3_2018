<?php

include_once("models/user_model.php");

function Login($UserID, $Password)
{
    $userModel = new userModel;
    if ($userModel->loginAuthenticate($UserID, $Password))
    {
        $_SESSION['userSession'] = $userModel->getUserInfoByID($UserID);
        header("Location: index.php");
        return TRUE;
    }
    header("Location: index.php");
    return FALSE;
}

function Logout()
{
    $_SESSION = array();
    session_destroy();
}

?>