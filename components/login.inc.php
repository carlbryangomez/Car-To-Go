<!doctype html>
	<html class="no-js" lang=""><head>
	<title>BNB Pharmacy Management System</title>
	<meta charset="utf-8">
	<meta http-equiv="x-ua-compatible" content="ie=edge">
	<meta name="description" content="Botika ng Bayan">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="apple-touch-icon" href="apple-touch-icon.png">

	<!-- Import Icon Packs -->
	<link rel="stylesheet" href="css/logincss/font-awesome.min.css">
	<link rel="stylesheet" href="css/logincss/elegent-icons.css">

	<!-- Import External Scrpit CSS Files -->
	<link rel="stylesheet" href="css/logincss/bootstrap.min.css">
	<link rel="stylesheet" href="css/logincss/owl.carousel.css">

	<!-- Import Template CSS Files -->
	<link rel="stylesheet" href="css/logincss/style.css">
	<link rel="stylesheet" href="css/logincss/header.css">
	<link rel="stylesheet" href="css/logincss/themes.css">
	<link rel="stylesheet" href="css/logincss/responsive.css">

	<!-- <script src="//cdnjs.cloudflare.com/ajax/libs/less.js/2.7.2/less.min.js"></script> -->
	<script src="js/link.js"></script>
	
	<!-- class -->
	<script src="js/class.js"></script>
	
	<!-- myStyle.css -->
	<link rel="stylesheet" href="css/logincss/myStyle.css">
	
</head><body> <!-- end tag @ footer.php -->
  
<div class="overlay-wrapper"> <!-- end tag @ footer.php -->
	<header class="masthead">
	
		<div class="header-top">
			<div class="container">
			
				<div class="side-menu-trigger hidden-xs">
					<span class="trigger-icon">
						<image class="image-rounded" src="" />
					</span>
				</div> <!-- /.side-menu-trigger -->

				<?php
				session_start();
				include 'php/database.php';
				if (isset($_SESSION['alert'])) {
					echo "<script>alert(\"$_SESSION[alert]\")</script>";
					unset($_SESSION['alert']);
				}
				
				if (isset($_SESSION['accountId'])) {
					$mysqli = $db->query("select * from user_accounts where accountId like \"$_SESSION[accountId]\"");
					if ($mysqli->num_rows == 0) {
						$logOutDateTime = date("Y-m-d H:i:s");
						$db->query("update log_in_out set logOut = \"$logOutDateTime\" where emailAddress like \"$_SESSION[emailAddress]\" and logIn like \"$_SESSION[logInDateTime]\"");
						unset($_SESSION['accountId']);
						unset($_SESSION['firstName']);
						unset($_SESSION['lastName']);
						unset($_SESSION['emailAddress']);
						unset($_SESSION['encryptedPassword']);
						unset($_SESSION['userType']);
						unset($_SESSION['imageSource']);
						unset($_SESSION['logInDateTime']);
						$x = -1;
						unset($_SESSION['x']);
						unset($_SESSION['grand_total']);
						if (isset($_SESSION['product'])) {
							foreach ($_SESSION['productName'] as $y) {
								$x++;
								unset($_SESSION['product'][$x]);
								unset($_SESSION['category'][$x]);
								unset($_SESSION['price'][$x]);
								unset($_SESSION['quantity'][$x]);
							}
						}
						header("location: index.php");
					}
				}
				
				if (isset($_SESSION['accountId']) && $mysqli->num_rows > 0) {
				?>
				<div class="dropdown pull-right">Welcome
					<a class="dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
						<i>
							<u style="font-weight:bold">
								<?=$_SESSION['firstName']?> <?=$_SESSION['lastName']?>
							</u>
							<img class="img-rounded" height="20px"  width="20px" src="<?=$_SESSION['imageSource']?>"></img>
							<span class="caret"></span>
						</i>
					</a>
					<ul class="dropdown-menu" aria-labelledby="dropdownMenuButton">
					<li>
						<a class="dropdown-item" href="profile.php">
							<i class="fa fa-user"></i> Profile Page
						</a>
					</li>
					<li>
						<a class="dropdown-item" href="php/logIn_Out.php?logOutButton=Customer" onclick="return confirm('Logout?')">
							<i class="fa fa-sign-out"></i> Log Out
						</a>
					</li>
					</ul>
				</div> <!-- .dropdown -->
				
				<a class="navbar-brand hidden-xs" href="index.php">
					<img src="img/logo.png" width="200%"/>
				</a>
				<div class="menu-search hidden">
					<div class="form-trigger">
						<i class="icon_search"></i>
					</div>
					<form action="#">
						<input type="text" class="search" name="search" id="menu-search" placeholder="Search here..">
					</form>
				</div> <!-- .menu-search -->
				<?php
				}
				else if (!isset($_SESSION['accountId']) || $mysqli->num_rows == 0) {
				?>
				<form name="logIn" class="wpcf7-form-control pull-right" method="post" class="modal-content animate">
					<div class="form-group row">
						<div class="col-sm-5 hidden-xs">
							<input type="emailAddress" id="emailAddress" placeholder="Email Address" class="wpcf7-form-control text-box" />
							<div class="login-text">
								<a class="small link" href="registration.php">Create an Account!</a>
							</div>
						</div>
						<div class="col-sm-5 hidden-xs">
							<input type="password" id="password" placeholder="Password" class="wpcf7-form-control text-box">
							<div class="login-text">
								<a class="small link" href="forgotPassword.php">Forgot Your Password?</a>
							</div>
						</div>
						<div class="col-sm-2 hidden-xs">
							<input type="button" name="logInButton" class="btn wpcf7-form-control" value="Login" />
						</div>
					</div>
				</form>
				<?php
				}
				?>
				
			</div> <!-- /.container -->
		</div> <!-- /.header-top -->

	</header> <!-- /.masthead -->
	<script src="js/header.js"></script>
	<script src="js/main.js"></script>
