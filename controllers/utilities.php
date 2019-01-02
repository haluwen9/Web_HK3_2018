<?php

include_once("../models/user_model.php")

function Login($UserID, $Password)
{
    $userModel = new userModel;
    if ($userModel->loginAuthenticate($UserID, $Password))
    {
        $_SESSION['userSession'] = $userModel->getUserInfoByID($UserID);
        die ("Đăng nhập thành công!");
    }
    die ("Sai mật khẩu!");
}

function Logout()
{
    unset($_SESSION['userSession']);
    session_destroy();
}

?>