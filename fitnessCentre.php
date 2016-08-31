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


     <!-- pagination scripts -->
		<link href="pagination/css/pagination.css" rel="stylesheet" type="text/css" />
    <link href="pagination/css/A_green.css" rel="stylesheet" type="text/css" />

    <!-- autocomplete scripts  -->
		<link rel="stylesheet" href="//code.jquery.com/ui/1.11.4/themes/smoothness/jquery-ui.css">
	  <script src="//code.jquery.com/jquery-1.10.2.js"></script>
	  <script src="//code.jquery.com/ui/1.11.4/jquery-ui.js"></script>


    <!-- <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script> -->


    <script src="js/function.js"></script>
    		<script src="js/custom.js"></script>
    		<title>Bounze</title>

    	</head>

      <body>
        <?php
				include "header.php";
        include("db.php");
        $statement = '';
				$limit = '';
				$page = '';

				 include("pagination/function.php");

				// $output = NULL;
				if(isset($_POST['submit'])){
				$_SESSION["location"]= mysql_real_escape_string($_POST['location']);
				$_SESSION["events"] = mysql_real_escape_string($_POST['events']);
}
				$search =$_SESSION["location"];
				$events =$_SESSION["events"];

					$page = (int) (!isset($_GET["page"]) ? 1 : $_GET["page"]);
 				    	$limit = 5; //if you want to dispaly 10 records per page then you have to change here
 				    	$startpoint = ($page * $limit) - $limit;
 				      $statement = "eventdetails WHERE EventLocation LIKE '%$search%' AND EventsDetails LIKE '%$events%' order by EventCompany asc";

					//query the database
					// $resultSet = $db->query("SELECT * FROM eventdetails WHERE EventLocation LIKE '%$search%' AND EventsDetails LIKE '%$events%'");
					// $cou = mysqli_num_rows($resultSet);
					    $resultSet = mysql_query("select * from {$statement} LIMIT {$startpoint} , {$limit}");



						while ($rows = mysql_fetch_array($resultSet)) {

							$details = $rows['EventsDetails'];
							$location = $rows['EventLocation'];
							$company = $rows['EventCompany'];
							$ratings = $rows['EventRatings'];
							$price = $rows['Price'];
							$time = $rows['timings'];
							$contact = $rows['contact'];
							// $output = "$location <br />";


					?>	<div id="mainboxx">
						<div class="cards">

						<h3 class="EventCompany"><a href="#"><?php  echo "$company"; ?></a><span class="fff"><?php  echo "$ratings"; ?></span></h3>
						<br> 	<p class="EventAddress"><i class="fa fa-map-marker">  <?php  echo "$location"; ?></i></p>
						<br>  <p class="EventDetails"><i class="fa fa-envelope-square">  <?php  echo "$details"; ?></i></p>
						<br>  <p class="EventPrice"><i class="fa fa-money">  <?php  echo "$price"; ?></i></p>
						<br>  <p class="EventTime"><i class="fa fa-clock-o">  <?php  echo "$time"; ?></i></p>
						<br>  <p class="EventContact"><i class="fa fa-phone">  <?php  echo "$contact"; ?></i></p>
						<br>  <button class="Book"> Book A Trial </button>
						</div>
						</div>

						<?php
						}

				?>
				<?php
				echo "<div id='pagingg' >";
				echo pagination($statement,$limit,$page);
				echo "</div>";
				 ?>



        <?php include "footer.php"; ?>
      </body>
</html>
