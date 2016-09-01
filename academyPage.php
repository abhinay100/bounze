<html>
	<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<link rel="stylesheet" href="style.css">

<!-- For sign in -->

		<link href='http://fonts.googleapis.com/css?family=PT+Sans:400,700' rel='stylesheet' type='text/css'>
		<link rel="stylesheet" href="css/reset.css">
		<link rel="stylesheet" href="css/style.css">
		<link href="http://maxcdn.bootstrapcdn.com/font-awesome/4.1.0/css/font-awesome.min.css" rel="stylesheet">
		<script src="js/modernizr.js"></script>

    <link rel="stylesheet" href="//code.jquery.com/ui/1.11.4/themes/smoothness/jquery-ui.css">
    <script src="//code.jquery.com/jquery-1.10.2.js"></script>
    <script src="//code.jquery.com/ui/1.11.4/jquery-ui.js"></script>


    <script src="js/function.js"></script>
    <script src="js/custom.js"></script>

    <title>Bounze</title>

  </head>

  <body >

  <?php
  include "header.php";
  include("db.php");


// die($_POST['company_image']);
	// $company = $_POST['company'];
	// echo $company;
	?>

	<div class="banner">

	      <img src="<?php echo ($_POST['company_image']); ?>" alt="" />

	      <h2 class="academy"><span><center><?php echo ($_POST['company_name_tob_booked']); ?></center></span></h2>
				<h2 class="academyLocation"><span><center><?php echo ($_POST['company_location']); ?></center></span></h2>
				<br><button class="pay"> Book Now </button>

	</div>

	<div class="academy-details">
		<div class="academy-list">
			<a href="#aboutcontent"><img src="images/aboutus.png" /></a>
			<a href="#offerings"><img src="images/offerings.png" /></a>
			<a href="#"><img src="images/gallery.png" /></a>
			<a href="#"><img src="images/pricing.png" /></a>
			<!-- <br> <span class = "about"> About Us </span> -->
		</div>
	</div>

	<div class="aboutus" id="aboutcontent">
		<div class="abouttext">
			<center><p class="abouttitle">About US</p></center>
			<br><center><p class="aboutcontent">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum</p></center>
		</div>
	</div>

	<div class="offer" id="offerings">
		<div class="offer-head">Offerings</div>

		<div class="img-with-text">
    <img src="images/22.png" />
    <p class="imagetext">Astanga Yoga</p>
   </div>

	</div>




  <?php include "footer.php"; ?>
  </body>
  </html>
