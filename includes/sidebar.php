<!--***************************************************
        MAIN SIDEBAR MENU
**************************************************** -->
        <aside>
      <div id="sidebar" class="nav-collapse ">
        <!-- sidebar menu start-->
        <ul class="sidebar-menu" id="nav-accordion">
          <p class="centered"><a href="profile.php"><img src="img/default-avatar.png" class="img-circle" width="80"></a></p>
          <h5 class="centered"><?php echo $_SESSION['f_name'].' '.$_SESSION['l_name'] ?></h5>
          <li class="mt">
            <a class="active" href="index.php">
              <i class="fa fa-dashboard"></i>
              <span>Dashboard</span>
              </a>
          </li>
          <li>
            <a href="withdrawal.php">
              <i class="fa fa-paypal"></i>
              <span>Withdrawal Request</span>
              </a>
          </li>
          <li>
            <a href="transaction.php">
              <i class="fa fa-list"></i>
              <span>Transactions</span>
              </a>
          </li>
          <li>
            <a href="mail.php">
              <i class="fa fa-envelope"></i>
              <span>Mail Bank</span>
              </a>
          </li>
        </ul>
        <!-- sidebar menu end-->
      </div>
    </aside>