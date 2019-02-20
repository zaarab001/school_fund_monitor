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
 <!-- <link href="img/favicon.png" rel="icon">
  <link href="img/apple-touch-icon.png" rel="apple-touch-icon">-->

  <!-- Bootstrap core CSS -->
  <link href="lib/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <!--external css-->
  <link href="lib/font-awesome/css/font-awesome.css" rel="stylesheet" />
  <!-- Custom styles for this template -->
  <link href="css/style.css" rel="stylesheet">
  <link href="css/style-responsive.css" rel="stylesheet">
  <link href="css/table-responsive.css" rel="stylesheet">

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
        <h3><i class="fa fa-angle-right"></i> Review of Transactions</h3>
        <div class="row mt">
          <div class="col-lg-12">
            <div class="content-panel">
              <h4><i class="fa fa-angle-right"></i> Students Transaction</h4>
              <section id="unseen">
                <table class="table table-bordered table-striped table-condensed">
                  <thead>
                    <tr>
                      <th>S/No</th>
                      <th>Teller Number</th>
                      <th>Depositors Name</th>
                      <th class="numeric">Fees</th>
                      <th class="numeric">Details</th>
                      <th class="numeric">Paid</th>
                      <th class="numeric">Balance</th>
                      <th class="numeric">Date</th>
                    </tr>
                  </thead>
                  <?php
				 $sql = "SELECT * FROM students ORDER BY transaction_id";
				 $query = mysqli_query($dbC, $sql);
				 	
					if ($query){//if query successful
						while ($row = mysqli_fetch_assoc($query)){//start of while loop
							$transaction_id = $row['transaction_id'];
							$receipt_number = $row['receipt_number'];
							$despositors_name = $row['despositors_name'];
							$fees = $row['fees'];
							$paid_for = $row['paid_for'];
							$paid = $row['paid'];
							$date = $row['date'];
							$balance = $fees-$paid;
						
				 ?>
                  <tbody>
                    <tr>
                      <td><?php echo $transaction_id; ?></td>
                      <td><?php echo $receipt_number; ?></td>
                      <td><?php echo $despositors_name; ?></td>
                      <td class="numeric">GHC<?php echo $fees; ?></td>
                      <td><?php echo $paid_for; ?></td>
                      <td class="numeric">GHC<?php echo $paid; ?></td>
                      <td class="numeric">GHC<?php echo $balance; ?></td>
                      <td class="numeric"><?php echo $date; ?></td>
                    </tr>
                  </tbody>
                  <?php
				  			}//end of while loop
					}//end of if query successful
				 
				  ?>
                </table>
              </section>
            </div>
            <!-- /content-panel -->
          </div>
          <!-- /col-lg-4 -->
        </div>
        <!-- /row -->
        <div class="row mt">
          <div class="col-lg-12">
            <div class="content-panel">
              <h4><i class="fa fa-angle-right"></i> Staffs Transaction</h4>
              <section id="no-more-tables">
                <table class="table table-bordered table-striped table-condensed cf">
                  <thead class="cf">
                    <tr>
                      <th>S/No</th>
                      <th>Receipt Number</th>
                      <th>Depositors Name</th>
                      <th class="numeric">Fees</th>
                      <th class="numeric">Details</th>
                      <th class="numeric">Paid</th>
                      <th class="numeric">Balance</th>
                      <th class="numeric">Date</th>
                    </tr>
                  </thead>
                 <?php
				 $sql = "SELECT * FROM staffs ORDER BY transaction_id";
				 $query = mysqli_query($dbC, $sql);
				 	
					if ($query){//if query successful
						while ($row = mysqli_fetch_assoc($query)){//start of while loop
							$transaction_id = $row['transaction_id'];
							$receipt_number = $row['receipt_number'];
							$staff_name = $row['staff_name'];
							$amount = $row['amount'];
							$payment_details = $row['payment_details'];
							$paid = $row['paid'];
							$date = $row['date'];
							$balance = $amount-$paid;
						
				 ?>
                 <tbody>
                    <tr>
                      <td><?php echo $transaction_id; ?></td>
                      <td><?php echo $receipt_number; ?></td>
                      <td><?php echo $staff_name; ?></td>
                      <td class="numeric">GHC<?php echo $amount; ?></td>
                      <td><?php echo $payment_details; ?></td>
                      <td class="numeric">GHC<?php echo $paid; ?></td>
                      <td class="numeric">GHC<?php echo $balance; ?></td>
                      <td><?php echo $date; ?></td>
                    </tr>
                  </tbody>
                  <?php
				  			}//end of while loop
					}//end of if query successful
				 
				  ?>
                </table>
              </section>
            </div>
            <!-- /content-panel -->
          </div>
          <!-- /col-lg-12 -->
        </div>
        
        <div class="row mt">
          <div class="col-lg-12">
            <div class="content-panel">
              <h4><i class="fa fa-angle-right"></i> Journal Entry</h4>
              <section id="unseen">
                <table class="table table-bordered table-striped table-condensed">
                  <thead>
                    <tr>
                      <th>S/No</th>
                      <th>Entry</th>
                      <th>Grand Total</th>
                      <th>Date Issued</th>
                    </tr>
                  </thead>
                  <?php
				// $sql = "SELECT * FROM students ORDER BY transaction_id";
//				 $query = mysqli_query($dbC, $sql);
				 	
					//if ($query){//if query successful
//						while ($row = mysqli_fetch_assoc($query)){//start of while loop
//							$transaction_id = $row['transaction_id'];
//							$receipt_number = $row['receipt_number'];
//							$despositors_name = $row['despositors_name'];
//							$fees = $row['fees'];
//							$paid_for = $row['paid_for'];
//							$paid = $row['paid'];
//							
//							$balance = $fees-$paid;
//						
//				  			}//end of while loop
//					}//end of if query successful
				 $date = date('d M Y');
				 ?>
                  <tbody>
                    <tr>
                      <td>1</td>
                      <td>Total transaction (Credit)</td>
                      <td><?php $ttc = mysqli_query($dbC, "SELECT MAX(transaction_id) AS mid FROM students") or die(mysqli_error());
					  	  		while ($row = mysqli_fetch_assoc($ttc)){
									$mid = $row['mid'];
									echo $mid;
								}
						  ?>
                      </td>
                      <td class="numeric"><?php echo $date; ?></td>
                    </tr>
                    <tr>
                      <td>2</td>
                      <td>Total Amount (Credit)</td>
                      <td><?php $tac = mysqli_query($dbC, "SELECT SUM(paid) AS mid FROM students") or die(mysqli_error());
					  	  		 while ($row = mysqli_fetch_assoc($tac)){
								 $mid = $row['mid'];
								 echo $mid;
								} 
					  	 
						 ?>
                      </td>
                      <td class="numeric"><?php echo $date; ?></td>
                    </tr>
                    <tr>
                      <td>3</td>
                      <td>Total transaction (Debit)</td>
                      <td><?php  $ttd = mysqli_query($dbC, "SELECT MAX(transaction_id) AS mid FROM staffs") or die(mysqli_error());
					  	  		 while ($row = mysqli_fetch_assoc($ttd)){
								 $mid = $row['mid'];
								 echo $mid;
								}
						 ?>
                      </td>
                      <td class="numeric"><?php echo $date; ?></td>
                    </tr>
                    <tr>
                      <td>4</td>
                      <td>Total Amount (Debit)</td>
                      <td><?php  $tad = mysqli_query($dbC, "SELECT SUM(paid) AS mid FROM staffs") or die(mysqli_error());
					  	  		 while ($row = mysqli_fetch_assoc($tad)){
								 $mid = $row['mid'];
								 echo $mid;
								} 
					  	  
						  ?>
                      </td>
                      <td class="numeric"><?php echo $date; ?></td>
                    </tr>
                  </tbody>
                </table>
              </section>
            <center><input type="button" class="btn btn-success" href="#" value="Request Bank Statement"></center>
            
            </div>
            <!-- /content-panel -->
          </div>
          <!-- /col-lg-4 -->
        </div>
        <!-- /row -->
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
</body>

</html>
