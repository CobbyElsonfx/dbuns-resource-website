<?php
require_once 'vendor/autoload.php';
require_once 'app/classes/Post.php';


use App\classes\Post;
use App\classes\Site;

$ob = Site::display();
$siteData = mysqli_fetch_assoc($ob);
#$post = Post::showActivelPost();
$populer = Post::showPopulerlPost();
$page = explode('/', $_SERVER['PHP_SELF']);
$page = end($page);
$title = '';
if ($page == 'login.php') {
    $title = 'Home';
} elseif ($page == 'contact.php') {
    $title = 'Contact';
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Basic -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">

    <!-- Mobile Metas -->
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Site Metas -->
    <title><?= $title . ' | ' . $siteData['title'] ?></title>
    <meta name="keywords"
        content="data bundles, affordable data, mobile data, internet data, data plans, data sellers, Ghana data bundles">
    <meta name="description"
        content="Get affordable data bundles from dataBundleshub, your trusted data seller in Ghana. We offer a range of mobile data plans to suit your needs.">
    <meta name="author" content="dataBundleshub">



    <!-- Bootstrap core CSS -->
    <link href="assets/css/bootstrap.css" rel="stylesheet">

    <!-- FontAwesome Icons core CSS -->
    <link href="assets/css/font-awesome.min.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="assets/style.css" rel="stylesheet">

    <!-- Responsive styles for this template -->
    <link href="assets/css/responsive.css" rel="stylesheet">

    <!-- Colors for this template -->
    <link href="assets/css/colors.css" rel="stylesheet">

    <!-- Version Tech CSS for this template -->
    <link href="assets/css/version/tech.css" rel="stylesheet">
    <link
        href="https://fonts.googleapis.com/css2?family=Macondo&family=Open+Sans:ital,wght@0,300..800;1,300..800&family=Outfit:wght@100..900&family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&family=Rubik:ital,wght@0,300..900;1,300..900&display=swap"
        rel="stylesheet">


</head>

<body>

    <div id="wrapper">
        <header class="tech-header header ">
            <div class="container-fluid">
                <nav class="navbar navbar-toggleable-md navbar-inverse py-3 mt-4 mx-3 fixed-top bg-inverse">
                    <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse"
                        data-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false"
                        aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                    <a class="navbar-brand desktop-logo mobile-logo bouncing" href="index.php"><img
                            src="uploads/<?= $siteData['logo'] ?>" alt=""></a>
                    <div class="collapse navbar-collapse" id="navbarCollapse">
                        <ul class="navbar-nav mr-auto">
                            <li class="nav-item">
                                <a class="nav-link" href="index.php">Home</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="databundle.php">Data Bundle </a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link disabled" href="#">Super Agent Reg. </a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="contact.php">About Us </a>
                            </li>
                        </ul>
                        <ul class="navbar-nav mr-2">
                            <form class="form-inline" method="get">
                                <input class="form-control mr-sm-2" type="search" placeholder="Search  "
                                    aria-label="Search" name="search">
                                <input type="submit" class="btn btn-outline-success my-2 my-sm-0" value="Search"
                                    style="cursor: pointer;" name="search-btn">
                            </form>
                        </ul>
                    </div>
                </nav>
            </div><!-- end container-fluid -->
        </header><!-- end market-header -->
        <div class=" mainheadWrapper">

            <div class="prehead ">
                <div class="overlay-gradient"></div>
                <div class="row  container  m-auto mt-3">
                    <div class="col-sm-12 col-md-6 ">
                        <div class="  header-welcome">
                            <p class="welcometo">Welcome to </p>
                            <h3>databundleHub</h3>
                            <p>Get the best data bundle plan for your internet needs</p>
                            <div class="text-white">
                                <a class="link-bundle px-2" href="databundle.php">
                                    Buy Now

                                </a>
                                <a class="link-agent px-2" href="#">
                                    Reg. as Agent
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="col-6  d-flex justify-content-start align-content-center h-100">
                        <img class="fourty" src="assets/images/bigsale.png">
                    </div>
                </div>



            </div>
            <section class="services">
                <div class="container">
                    <h2 class="section-title">Our Services</h2>
                    <div class="row">
                        <!-- Service items -->
                    </div>
                    <div class="row">
                        <!-- Service 1 -->
                        <div class="col-lg-4">
                            <div class="service-item">
                                <div class="service-icon">
                                    <!-- SVG icon for service 1 -->
                                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none"
                                        stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                        stroke-linejoin="round" class="feather feather-heart">
                                        <path
                                            d="M20.84 4.61a5.5 5.5 0 0 0-7.78 0L12 5.67l-1.06-1.06a5.5 5.5 0 0 0-7.78 7.78l1.06 1.06L12 21.23l7.78-7.78 1.06-1.06a5.5 5.5 0 0 0 0-7.78z">
                                        </path>
                                    </svg>
                                </div>
                                <h3>Connect with Loved Ones</h3>
                                <p>Explore a broad range of data plans for seamless communication.</p>
                            </div>
                        </div>
                        <!-- Service 2 -->
                        <div class="col-lg-4">
                            <div class="service-item">
                                <div class="service-icon">
                                    <!-- SVG icon for service 2 -->
                                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none"
                                        stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                        stroke-linejoin="round" class="feather feather-globe">
                                        <circle cx="12" cy="12" r="10"></circle>
                                        <line x1="2" y1="12" x2="22" y2="12"></line>
                                        <path
                                            d="M12 2a15.3 15.3 0 0 1 4 10 15.3 15.3 0 0 1-4 10 15.3 15.3 0 0 1-4-10 15.3 15.3 0 0 1 4-10z">
                                        </path>
                                    </svg>
                                </div>
                                <h3>Discover the Digital World</h3>

                                <p>Experience high-speed and dependable internet connectivity with our range of
                                    high-speed
                                    and Affordable data plans</p>

                            </div>
                        </div>
                        <!-- Service 3 -->
                        <div class="col-lg-4">
                            <div class="service-item">
                                <div class="service-icon">
                                    <!-- SVG icon for service 3 -->
                                    <!-- You can generate your own SVG icon or use an existing one -->
                                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none"
                                        stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                        stroke-linejoin="round" class="feather feather-package">
                                        <rect x="2" y="2" width="20" height="20" rx="2" ry="2"></rect>
                                        <line x1="7" y1="12" x2="17" y2="12"></line>
                                        <line x1="2" y1="12" x2="7" y2="12"></line>
                                        <line x1="17" y1="12" x2="22" y2="12"></line>
                                        <line x1="12" y1="7" x2="12" y2="17"></line>
                                        <line x1="12" y1="2" x2="12" y2="7"></line>
                                        <line x1="12" y1="17" x2="12" y2="22"></line>
                                        <line x1="7" y1="7" x2="9" y2="9"></line>
                                        <line x1="15" y1="7" x2="17" y2="9"></line>
                                        <line x1="7" y1="15" x2="9" y2="17"></line>
                                        <line x1="15" y1="15" x2="17" y2="17"></line>
                                    </svg>
                                </div>
                                <h3>24/7 Support</h3>
                                <p>Our dedicated support team is available round-the-clock to provide you with
                                    assistance
                                    whenever you need it.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </section>

            <hr>
            <section class="section">
                <div class="container">
                    <div class="row">