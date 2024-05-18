<?php
require_once '../vendor/autoload.php';
require_once '../app/classes/Category.php';
require_once '../app/classes/Post.php';
require_once '../app/classes/UserLogin.php';
require_once '../app/classes/Site.php';
require_once '../app/classes/Session.php';

use App\classes\Session;

Session::init();
//CATEGORY UPDATE

// Enable error reporting for debugging
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

// CATEGORY UPDATE
if (isset($_POST['update-cat'])) {
    $upCat = new \App\classes\Category();
    $result = $upCat->updateCategory($_POST);
    Session::set('uptxt', "$result");
    header('location:managecategory.php');
    exit(); // Ensure the script stops executing
}

// POST UPDATE
if (isset($_POST['update-btn'])) {
    $upPost = new \App\classes\Post();
    $result = $upPost->updatePost($_POST);
    Session::set('uptxt', "$result");
    header('location:managepost.php');
    exit(); // Ensure the script stops executing
}

// USER UPDATE
if (isset($_POST['update-user'])) {
    $upUser = new \App\classes\UserLogin();
    $result = $upUser->updateUser($_POST);
    header('location:editprofile.php');
    exit(); // Ensure the script stops executing
}

// SITE UPDATE
if (isset($_POST['site-btn'])) {
    $upUser = new \App\classes\Site();
    $result = $upUser->updateSite($_POST);
    header('location:logo.php');
    exit(); // Ensure the script stops executing
}

// SITE LINKS UPDATE
if (isset($_POST['link-btn'])) {
    $upUser = new \App\classes\Site();
    $result = $upUser->updateSocialLink($_POST);
    header('location:social.php');
    exit(); // Ensure the script stops executing
}
?>
