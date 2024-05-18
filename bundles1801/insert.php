<?php
require_once '../vendor/autoload.php';
require_once '../app/classes/Post.php';
require_once '../app/classes/Category.php';
require_once '../app/classes/UserLogin.php';
require_once '../app/classes/Mail.php';

use App\classes\Session;
Session::init();
// Enable error reporting for debugging
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);
//USER INSERT
if(isset($_POST['cat-btn'])){
    $userOb = new \App\classes\Category();
   $rtn_txt =  $userOb->addCategory($_POST);
   Session::set('txt',"$rtn_txt");
    header('location:addcategory.php');
}
if(isset($_POST['post-btn'])){
    $userOb = new \App\classes\Post();
   $rtn_txt =  $userOb->addPost($_POST);
   Session::set('txt',"$rtn_txt");
    header('location:addpost.php');
}
//USER INSERT
if(isset($_POST['user-btn'])){
    $userOb = new \App\classes\UserLogin();
   $rtn_txt =  $userOb->addUser($_POST);
   Session::set('userExists',"$rtn_txt");
    header('location:adduser.php');
}
//reply INSERT
if(isset($_POST['reply-btn'])){
    $userOb = new \App\classes\Mail();
    $rtn_txt =  $userOb->saveReply($_POST);
    header('location:inbox.php');
}


?>