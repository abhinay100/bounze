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
							$image = $rows['images'];
							// $output = "$location <br />";


					?>	<div id="mainboxx">
						<div class="cards">
            <form action="academyPage.php" method="post">
						<br> <h3 class="EventCompany" name = "company"><a  class="CompanyName" href="#"><?php  echo "$company"; ?></a><span class="rate"><?php  echo "$ratings"; ?></span></h3>
						<br> <img class="EventImage" src="<?php echo "$image" ?>" height="200" width="175">
            <div class = "new">
						 <p class = "eventLocation"><img src="images/location.png" width="20" >  <?php  echo "$location"; ?></p>
						 <br><p class = "eventDetails"><img src="images/details.png" width="20" >  <?php  echo "$details"; ?></p>
             <br><p class = "eventprice"><img src="images/money.png" width="20" style="margin-bottom: -1%;">  <?php  echo "$price"; ?></p>
						 <br><p class = "eventtime"><img src="images/time.png" width="20" style="margin-bottom: -1%;">  <?php  echo "$time"; ?></p>
						 <br><p class = "eventcontact"><img src="images/phone.png" width="20">  <?php  echo "$contact"; ?></p>
						 <input type="hidden" name="company_name_tob_booked" value="<?php echo $company; ?>" />
						 <input type="hidden" name="company_location" value="<?php echo $location; ?>" />
						 <input type="hidden" name="company_image" value="<?php echo $image; ?>"/>
						 <br><button class="Book"> Book Now </button>

						 </div>
           </form>
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
