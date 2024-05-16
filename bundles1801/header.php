<?php
require_once '../vendor/autoload.php';
session_start();
if (!isset($_SESSION['login-success'])) {
    header('location:login.php');
}
$page = explode('/', $_SERVER['PHP_SELF']);
$page = end($page);
use App\classes\Session;
use App\classes\UserLogin;
use App\classes\Mail;

$name = $_SESSION['username'];
$userData = UserLogin::loginUserData("$name");
$title = '';
if ($page == 'login.php') {
    $title = 'Home';
} elseif ($page == 'addcategory.php' || $page == 'managecategory.php') {
    $title = 'Category';
} elseif ($page == 'addpost.php' || $page == 'managepost.php') {
    $title = 'Post';
} elseif ($page == 'adduser.php' || $page == 'manageuser.php') {
    $title = 'User';
} elseif ($page == 'inbox.php' || $page == 'sentmail.php' || $page == 'draft.php' || $page == 'strash.php') {
    $title = 'Mail';
} elseif ($page == 'logo.php' || $page == 'social.php') {
    $title = 'Site Identity';
} else {
    $title = 'Home';
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= $title . ' | ' . $siteData['title']?></title>
    <meta name="keywords" content="data bundles, affordable data, mobile data, internet data, data plans, data sellers, Ghana data bundles">
<meta name="description" content="Get affordable data bundles from dataBundleshub, your trusted data seller in Ghana. We offer a range of mobile data plans to suit your needs.">
<meta name="author" content="dataBundleshub">

    <!-- Bootstrap core CSS -->

    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/bootstrap-reset.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <!--external css-->
    <link href="assets/font-awesome/css/font-awesome.css" rel="stylesheet" />
    <link href="assets/jquery-easy-pie-chart/jquery.easy-pie-chart.css" rel="stylesheet" type="text/css"
        media="screen" />
    <link rel="stylesheet" href="css/owl.carousel.css" type="text/css">
    <!--dynamic table-->
    <link href="assets/advanced-datatable/media/css/demo_page.css" rel="stylesheet" />
    <link href="assets/advanced-datatable/media/css/demo_table.css" rel="stylesheet" />
    <link rel="stylesheet" href="assets/data-tables/DT_bootstrap.css" />
    <!--right slidebar-->
    <link href="css/slidebars.css" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.11.5/css/jquery.dataTables.css">


    <!-- Custom styles for this template -->

    <link href="css/style.css" rel="stylesheet">
    <link href="css/style-responsive.css" rel="stylesheet" />

</head>

<body>

    <section id="container">
        <!--header start-->
        <header class="header white-bg">
            <div class="sidebar-toggle-box">
                <i class="fa fa-bars"></i>
            </div>
            <!--logo start-->
            <a href="index.php" class="logo">DataBundle<span> Solutions</span></a>
            <!--logo end-->
            <div class="nav notify-row" id="top_menu">
                <!--  notification start -->
                <ul class="nav top-menu">
        
                    <li id="header_inbox_bar" class="dropdown">
                        <a data-toggle="dropdown" class="dropdown-toggle" href="#">
                            <i class="fa fa-envelope-o"></i>
                            <span class="badge badge-danger"><?= Mail::countNewMail() ?></span>
                        </a>
                        <ul class="dropdown-menu extended inbox">
                            <div class="notify-arrow notify-arrow-red"></div>
                            <li>
                                <p class="red">You have <?= Mail::countNewMail() ?> new messages</p>
                            </li>
                            <?php
                            $mail = Mail::displayNewMail();
                            while ($m = mysqli_fetch_assoc($mail)) {
                                ?>
                                <li>
                                    <a href="">
                                        <span class="photo"><img alt="avatar" src="img/avatar-mini.jpg"></span>
                                        <span class="subject">
                                            <?= $m['subject'] ?>
                                        </span>
                                    </a>
                                </li>
                            <?php } ?>
                            <li>
                                <a href="inbox.php">See all messages</a>
                            </li>
                        </ul>
                    </li>
                    <!-- inbox dropdown end -->
                    <!-- notification dropdown start-->
                    <li id="header_notification_bar" class="dropdown">
                        <a data-toggle="dropdown" class="dropdown-toggle" href="#">
                            <i class="fa fa-bell-o"></i>
                            <span class="badge badge-warning">0</span>
                        </a>
                        <ul class="dropdown-menu extended notification">
                            <div class="notify-arrow notify-arrow-yellow"></div>
                            <!-- <li>
                                    <p class="yellow">You have 7 new notifications</p>
                                </li>
                   
                                <li>
                                    <a href="#">
                                        <span class="label label-danger"><i class="fa fa-bolt"></i></span>
                                        Database overloaded 24%.
                                        <span class="small italic">4 hrs</span>
                                    </a>
                                </li> -->

                        </ul>
                    </li>
                    <!-- notification dropdown end -->
                </ul>
                <!--  notification end -->
            </div>
            <div class="top-nav ">
                <!--search & user info start-->
                <ul class="nav pull-right top-menu">
                    <li>
                        <input type="text" class="form-control search" placeholder="Search">
                    </li>
                    <!-- user login dropdown start-->
                    <li class="dropdown">
                        <a data-toggle="dropdown" class="dropdown-toggle" href="#">
                            <img alt="" src="../uploads/<?= $userData['image'] ?>" style="width: 35px">
                            <span
                                class="username"><?= isset($_SESSION['username']) ? $_SESSION['username'] : ''; ?></span>
                            <b class="caret"></b>
                        </a>
                        <ul class="dropdown-menu extended logout dropdown-menu-right">
                            <div class="log-arrow-up"></div>
                            <li><a href="profile.php"><i class=" fa fa-suitcase"></i>Profile</a></li>
                            <li><a href="#"><i class="fa fa-cog"></i> Settings</a></li>
                            <li><a href="#"><i class="fa fa-bell-o"></i> Notification</a></li>
                            <li><a href="logout.php"><i class="fa fa-key"></i> Log Out</a></li>
                        </ul>
                    </li>
                    <li class="sb-toggle-right">
                        <i class="fa  fa-align-right"></i>
                    </li>
                    <!-- user login dropdown end -->
                </ul>
                <!--search & user info end-->
            </div>
        </header>
        <!--header end-->
        <!--sidebar start-->
        <aside>
            <div id="sidebar" class="nav-collapse ">
                <!-- sidebar menu start-->
                <ul class="sidebar-menu" id="nav-accordion">
                    <li>
                        <a href="index.php" <?= $page == 'login.php' ? 'class="active"' : '' ?>>
                            <i class="fa fa-dashboard"></i>
                            <span>Dashboard</span>
                        </a>
                    </li>
                    <li class="sub-menu">
                        <a href="javascript:;" <?= $page == 'orders.php' ? 'class="active"' : '' ?> >
                            <i class="fa fa-shield"></i>
                            <span>Bundle Orders</span>
                        </a>
                        <ul class="sub">
                            <li <?= $page == 'orders.php' ? 'class="active"' : '' ?>><a href="orders.php">MTN Bundle
                                    Orders</a></li>
                        </ul>
                       
                    </li>
                    <li class="sub-menu">
                        <a href="javascript:;" <?= $page == 'addcategory.php' ? 'class="active"' : '' ?>
                            <?= $page == 'managecategory.php' ? 'class="active"' : '' ?>>
                            <i class="fa fa-shield"></i>
                            <span>Categories</span>
                        </a>
                        <ul class="sub">
                            <li <?= $page == 'addcategory.php' ? 'class="active"' : '' ?>><a href="addcategory.php">Add
                                    Category</a></li>
                            <li <?= $page == 'managecategory.php' ? 'class="active"' : '' ?>><a
                                    href="managecategory.php">Manage Category</a></li>
                        </ul>
                    </li>
                    <li class="sub-menu">
                        <a href="javascript:;" <?= $page == 'addpost.php' ? 'class="active"' : '' ?>
                            <?= $page == 'managepost.php' ? 'class="active"' : '' ?>>
                            <i class="fa fa-thumb-tack"></i>
                            <span>Posts</span>
                        </a>
                        <ul class="sub">
                            <li <?= $page == 'addpost.php' ? 'class="active"' : '' ?>><a href="addpost.php">Add Post</a>
                            </li>
                            <li <?= $page == 'managepost.php' ? 'class="active"' : '' ?>><a href="managepost.php">Manage
                                    Post</a></li>
                        </ul>
                    </li>
                    <!-- adduser only admin -->
                    <?php
                    if ($userData['role'] == 1) { ?>
                        <li class="sub-menu">
                            <a href="javascript:;" <?= $page == 'adduser.php' ? 'class="active"' : '' ?>
                                <?= $page == 'manageuser.php' ? 'class="active"' : '' ?>>
                                <i class="fa fa-users"></i>
                                <span>Users</span>
                            </a>
                            <ul class="sub">
                                <li <?= $page == 'adduser.php' ? 'class="active"' : '' ?>><a href="adduser.php">Add User</a>
                                </li>
                                <li <?= $page == 'manageuser.php' ? 'class="active"' : '' ?>><a href="manageuser.php">Manage
                                        Users</a></li>
                            </ul>
                        </li>
                    <?php } ?>
                    <li class="sub-menu">
                        <a href="javascript:;" <?= $page == 'inbox.php' ? 'class="active"' : '' ?> <?= $page == 'draft.php' ? 'class="active"' : '' ?> <?= $page == 'trash.php' ? 'class="active"' : '' ?><?= $page == 'sentmail.php' ? 'class="active"' : '' ?>>
                            <i class="fa fa-envelope-o"></i>
                            <span>Mail</span>
                        </a>
                        <ul class="sub">
                            <li <?= $page == 'inbox.php' ? 'class="active"' : '' ?> <?= $page == 'draft.php' ? 'class="active"' : '' ?> <?= $page == 'trash.php' ? 'class="active"' : '' ?><?= $page == 'sentmail.php' ? 'class="active"' : '' ?>><a href="inbox.php">Manage
                                    Mail</a></li>
                        </ul>
                    </li>
                    <li class="sub-menu">
                        <a href="javascript:;" <?= $page == 'logo.php' ? 'class="active"' : '' ?> <?= $page == 'social.php' ? 'class="active"' : '' ?>>
                            <i class="fa  fa-globe"></i>
                            <span>Site Identity</span>
                        </a>
                        <ul class="sub">
                            <li <?= $page == 'logo.php' ? 'class="active"' : '' ?>><a href="logo.php">Logo & Footer</a>
                            </li>
                            <li <?= $page == 'social.php' ? 'class="active"' : '' ?>><a href="social.php">Social Media</a>
                            </li>
                        </ul>
                    </li>
                </ul>
                <!-- sidebar menu end-->
            </div>
        </aside>
        <!--sidebar end-->
        <!--main content start-->
        <section id="main-content">
            <section class="wrapper">