<?php
session_start();
include 'includes/db_connect.php';
ob_start();

?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="description" content="">
  <meta name="author" content="">
  <meta name="keyword" content="">
  <title>School Fund Grant</title>

  <!-- Favicons -->
 <!-- <link href="img/favicon.png" rel="icon">
  <link href="img/apple-touch-icon.png" rel="apple-touch-icon">-->

  <!-- Bootstrap core CSS -->
  <link href="lib/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <!--external css-->
  <link href="lib/font-awesome/css/font-awesome.css" rel="stylesheet" />
  <!-- Custom styles for this template -->
  <link href="css/style.css" rel="stylesheet">
  <link href="css/style-responsive.css" rel="stylesheet">

</head>

<body>
  <div id="login-page">
    <div class="container">
    <?php
	include 'includes/_login.php';
	?>
      <form class="form-login" method="post" action="#">
        <h2 class="form-login-heading">ADMINISTRATIVE PANEL</h2>
        <div class="login-wrap">
          <input type="text" name="email" class="form-control" placeholder="Enter Email" required>
          <br>
          <input type="password" name="pass" class="form-control" placeholder="Enter Password" required>
          <label class="checkbox">
            <input type="checkbox" value="remember-me"> Remember me
            <span class="pull-right">
            <a data-toggle="modal" href="#"> Forgot Password?</a>
            </span>
            </label>
          <center><input type="submit" class="btn btn-large btn-success" value="SIGN IN" name="login"></center>
          <hr>
          
          <div align="center">
             <p><?php echo '<i class="fa fa-code"></i> by 2JM Lab Nig Ltd.  <br>With <i class="fa fa-heart"></i> All Rights Reserved';?></p>

          </div>
        </div>
        <!-- Modal -->
        <!--<div aria-hidden="true" aria-labelledby="myModalLabel" role="dialog" tabindex="-1" id="myModal" class="modal fade">
          <div class="modal-dialog">
            <div class="modal-content">
              <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                <h4 class="modal-title">SCHOOL FUND GRANT MANAGEMANT SYSTEM</h4>
              </div>
              <div class="modal-body">
                <p>Enter your ID Code below to reset your password.</p>
                <input type="text" name="code" placeholder="ID Code" autocomplete="off" class="form-control placeholder-no-fix">
              </div>
              <div class="modal-footer">
                <button data-dismiss="modal" class="btn btn-default" type="button">Cancel</button>
                <button class="btn btn-theme" type="button">Submit</button>
              </div>
            </div>
          </div>
        </div>-->
        <!-- modal -->
      </form>
    </div>
  </div>
  <!-- js placed at the end of the document so the pages load faster -->
  <script src="lib/jquery/jquery.min.js"></script>
  <script src="lib/bootstrap/js/bootstrap.min.js"></script>
  <!--BACKSTRETCH-->
  <!-- You can use an image of whatever size. This script will stretch to fit in any screen size.-->
  <script type="text/javascript" src="lib/jquery.backstretch.min.js"></script>
 <script>
    //$.backstretch("img/login-bg.jpg", {
      //speed: 500
    //});
  </script>
</body>

</html>
