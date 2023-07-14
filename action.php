<?php

require_once 'vendor/autoload.php';

use App\classes\FileUpload;
use App\classes\User;

if (isset($_GET['page']))
{
    if ($_GET['page'] == 'home')
    {
        include 'pages/home.php';
    }elseif ($_GET['page'] == 'file-management')
    {
        include 'pages/fileManagement.php';
    } elseif ($_GET['page'] == 'file-upload')
    {
        $fileUpload = new FileUpload($_POST, $_FILES);
        $result = $fileUpload->uploadFile();
        include 'pages/fileManagement.php';
    } elseif ($_GET['page'] == 'sign-in')
    {
        include 'pages/signIn.php';
    } elseif ($_GET['page'] == 'user-signin')
    {
        $user = new User($_POST);
        $message = $user->checkUser();
        include "pages/signIn.php";
    }
}