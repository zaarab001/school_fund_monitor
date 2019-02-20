<?php
session_start();
include 'includes/db_connect.php';
include 'includes/authentication.php';

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
<!--  <link href="img/favicon.png" rel="icon">
  <link href="img/apple-touch-icon.png" rel="apple-touch-icon">-->

  <!-- Bootstrap core CSS -->
  <link href="lib/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <!--external css-->
  <link href="lib/font-awesome/css/font-awesome.css" rel="stylesheet" />
  <link href="lib/bootstrap-wysihtml5/bootstrap-wysihtml5.css" rel="stylesheet" />
  <!-- Custom styles for this template -->
  <link href="css/style.css" rel="stylesheet">
  <link href="css/style-responsive.css" rel="stylesheet">

 
</head>

<body>
  <section id="container">
     <!--header start-->
    <header class="header black-bg">
      <?php include('includes/header.php');?>
    </header>
    <!--header end-->
   
    <!--sidebar start-->
     <?php include('includes/sidebar.php');?>
    <!--sidebar end-->
   
    <!--main content start-->
    <section id="main-content">
      <section class="wrapper">
        <!-- page start-->
        <div class="row mt">
          <div class="col-sm-3">
            <section class="panel">
              <div class="panel-body">
                <a href="" class="btn btn-compose">
                  <i class="fa fa-user"></i>  Administartor
                  </a>
                <ul class="nav nav-pills nav-stacked mail-nav">
                  <li><a href="#"> <i class="fa fa-user"></i> <?php echo $_SESSION['f_name'].' '.$_SESSION['l_name']; ?></a></li>
                  <li><a href="#"> <i class="fa fa-envelope-o"></i> <?php echo $_SESSION['email']; ?></a></li>
                  <li><a href="#"> <i class="fa fa-phone"></i> <?php echo $_SESSION['phone']; ?></a></li>
                  <li><a href="#"> <i class="fa fa-download"></i> Inbox</a></a></li>
                  <li><a href="#"> <i class="fa fa-upload"></i> Sent</a></a></li>
                  <li><a href="#"> <i class="fa fa-file-text-o"></i> Drafts</a></a></li>
                  <li><a href="#"> <i class="fa fa-trash-o"></i> Trash</a></li>
                </ul>
              </div>
            </section>
           
          </div>
          <div class="col-sm-9">
            <section class="panel">
              <header class="panel-heading wht-bg">
              
                <h4 class="gen-case">Compose Mail</h4>
              </header>
              <div class="panel-body">
               <?php 
				if (isset($_POST['send']))
				{//start of if isset
					$to = $_POST['to'];
					$cc = $_POST['cc'];
					$bcc = $_POST['bcc'];
					$subject = $_POST['subject'];
					$body = $_POST['body'];
					$file = $_POST['file'];
					if (!(empty($to))&&
						!(empty($subject))&&
						!(empty($body)))
							{//start of if not empty
								mail($to, $subject, $body, "From: ".$_SESSION['email']);
					
								echo '<div class="alert alert-success alert-dismissable">
              			  			  <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
              			  			  Dear '.$_SESSION['l_name'].', Your mail has been sent to '.$to.'. Thank You! 
			  	 		  			  </div>';
							}//end of if not empty
					
					else 	{//start of else if empty
								echo '<span class="label label-danger">All fields with asterik are REQUIRED </span>';
							}//end of else if empty
					
				}//end of if isset 
				?>
                <div class="compose-btn pull-right">
                  <button class="btn btn-theme btn-sm"><i class="fa fa-check"></i> Send</button>
                  <button class="btn btn-sm"><i class="fa fa-times"></i> Discard</button>
                  <button class="btn btn-sm">Draft</button>
                </div>
                <div class="compose-mail">
               
                  <form role="form-horizontal" method="post">
                    <div class="form-group">
                      <label for="to" class="">To:</label>
                      <input type="email" tabindex="1" id="to" name="to" class="form-control" required>
                      <div class="compose-options">
                        <a onclick="$(this).hide(); $('#cc').parent().removeClass('hidden'); $('#cc').focus();" href="javascript:;">Cc</a>
                        <a onclick="$(this).hide(); $('#bcc').parent().removeClass('hidden'); $('#bcc').focus();" href="javascript:;">Bcc</a>
                      </div>
                    </div>
                    <div class="form-group hidden">
                      <label for="cc" class="">Cc:</label>
                      <input type="text" tabindex="2" id="cc" name="cc" class="form-control">
                    </div>
                    <div class="form-group hidden">
                      <label for="bcc" class="">Bcc:</label>
                      <input type="text" tabindex="2" id="bcc" name="bcc" class="form-control">
                    </div>
                    <div class="form-group">
                      <label for="subject" class="">Subject:</label>
                      <input type="text" tabindex="1" id="subject" name="subject" class="form-control" required>
                    </div>
                    <div class="compose-editor">
                      <textarea class="wysihtml5 form-control" name="body" rows="9" required></textarea>
                      <input type="file" name="file" class="default">
                    </div>
                    <div class="compose-btn">
                      <button type="submit" name="send" class="btn btn-theme btn-sm"><i class="fa fa-check"></i> Send</button>
                      <button class="btn btn-sm"><i class="fa fa-times"></i> Discard</button>
                      <button class="btn btn-sm">Draft</button>
                    </div>
                  </form>
                </div>
              </div>
            </section>
          </div>
        </div>
      </section>
      <!-- /wrapper -->
    </section>
    <!-- /MAIN CONTENT -->
    <!--main content end-->
    <!--footer start-->
     <?php include('includes/footer.php');?>
    <!--footer end-->
  </section>
  <!-- js placed at the end of the document so the pages load faster -->
  <script src="lib/jquery/jquery.min.js"></script>
  <script src="lib/bootstrap/js/bootstrap.min.js"></script>
  <script class="include" type="text/javascript" src="lib/jquery.dcjqaccordion.2.7.js"></script>
  <script src="lib/jquery.scrollTo.min.js"></script>
  <script src="lib/jquery.nicescroll.js" type="text/javascript"></script>
  <!--common script for all pages-->
  <script src="lib/common-scripts.js"></script>
  <!--script for this page-->
  <script type="text/javascript" src="lib/bootstrap-wysihtml5/wysihtml5-0.3.0.js"></script>
  <script type="text/javascript" src="lib/bootstrap-wysihtml5/bootstrap-wysihtml5.js"></script>

  <script type="text/javascript">
    //wysihtml5 start

    $('.wysihtml5').wysihtml5();

    //wysihtml5 end
  </script>
</body>

</html>
