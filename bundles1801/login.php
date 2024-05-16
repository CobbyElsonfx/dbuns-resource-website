<?php

require_once '../vendor/autoload.php';

if(isset($_POST['login-btn'])){
    $login = new App\classes\UserLogin();
     $error_txt = $login->userCheck($_POST);
}
if(isset($_SESSION['login-success'])){
    header('location:index.php');
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="keywords" content="data bundles, affordable data, mobile data, internet data, data plans, data sellers, Ghana data bundles">
<meta name="description" content="Get affordable data bundles from dataBundleshub, your trusted data seller in Ghana. We offer a range of mobile data plans to suit your needs.">
<meta name="author" content="dataBundleshub">

    <title>Login page</title>

    <!-- Bootstrap core CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link href="css/bootstrap-reset.css" rel="stylesheet">
    <!--external css-->
    <link href="assets/font-awesome/css/font-awesome.css" rel="stylesheet" />
    <!-- Custom styles for this template -->
    <link href="css/style.css" rel="stylesheet">
    <link href="css/style-responsive.css" rel="stylesheet" />


</head>

  <body class="login-body">

    <div class="container">

      <form class="form-signin" action="" method="post">
        <h2 class="form-signin-heading">sign in now</h2>
        <div class="login-wrap">
            <input type="text" class="form-control" placeholder="User name" autofocus name="username">
            <input type="password" class="form-control" placeholder="Password" name="password">
            <label class="checkbox">
                <input type="checkbox"  name="keep"> Remember me
                <small class="pull-right">
                    <a data-toggle="modal" href="#myModal"> Forgot Password?</a>
</small>
            </label>
            <input type="submit" value="Log In" name="login-btn" class="btn btn-md btn-info btn-login " >
            <p style="color: info;"><?= isset($error_txt) ? $error_txt : ''?></p>
        </div>
      </form>

    </div>
    <!-- Modal -->
    <div aria-hidden="true" aria-labelledby="myModalLabel" role="dialog" tabindex="-1" id="myModal" class="modal fade">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h4 class="modal-title">Forgot Password ?</h4>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <p>Enter your e-mail address below to reset your password.</p>
                    <input type="text" name="email" placeholder="Email" autocomplete="off" class="form-control placeholder-no-fix">

                </div>
                <div class="modal-footer">
                    <button data-dismiss="modal" class="btn btn-default" type="button">Cancel</button>
                    <button class="btn btn-success" type="button">Submit</button>
                </div>
            </div>
        </div>
    </div>
    <!-- modal -->
    <!-- js placed at the end of the document so the pages load faster -->
    <script src="js/jquery.js"></script>
    <script src="js/bootstrap.bundle.min.js"></script>

  </body>

</html>
