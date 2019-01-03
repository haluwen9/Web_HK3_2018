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

function Signup($UserID, $Password, $Email)
{
    $userModel = new userModel;
    if ($userModel->validateAccount($UserID, $Email)) {
        $userModel->insertUser(new User($UserID, md5($Password), $Email, $UserID, '', '', '', '', '', '', '', '','', ''));
        // Logout();
        // $_SESSION['userSession'] = $userModel->getUserInfoByID($UserID);
        
        return 1;
    }
    return 0;
}

?>