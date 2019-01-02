<?php

function Login($UserID, $Password)
{
    $userModel = new userModel;
    if ($userModel->loginAuthenticate($UserID, $Password))
    {
        $_SESSION['userSession'] = $userModel->getUserInfoByID($UserID);
        // die("Login Successfully!");
        return TRUE;
    }
    return FALSE;
}

function Logout()
{
    $_SESSION = array();
    session_destroy();
}

?>