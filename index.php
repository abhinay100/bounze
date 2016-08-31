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
		<script src="js/modernizr.js"></script>

    <!-- autocomplete scripts  -->
		<link rel="stylesheet" href="//code.jquery.com/ui/1.11.4/themes/smoothness/jquery-ui.css">
	  <script src="//code.jquery.com/jquery-1.10.2.js"></script>
	  <script src="//code.jquery.com/ui/1.11.4/jquery-ui.js"></script>



	  <script>
	  $(function() {
			var closing = false;
			var exit = false;
				//location search script
	    $( "#location" ).autocomplete({
	      source: 'search.php',
				minLength: 0,
				close: function(){
        // avoid double-pop-up issue
        closing = true;
        setTimeout(function() { closing = false; }, 300);
      }
	}).focus(function() {
        if (!closing)
        $(this).autocomplete("search");
});

      //events search script
			$( "#events" ).autocomplete({
	      source: 'eventsSearch.php',
				minLength: 0,
				close: function(){
        // avoid double-pop-up issue
        exit = true;
        setTimeout(function() { exit = false; }, 300);
      }
	    }).focus(function() {
		        if (!exit)
		        $(this).autocomplete("search");
		});

	  });
	  </script>


<!-- ENds here -->
<!-- <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script> -->
<script src="js/function.js"></script>
		<script src="js/custom.js"></script>
		<title>Bounze</title>

	</head>
	<body class="main">
		<?php include "header.php"; ?>
		<div class="banner">
			<img src="images/banner1.jpg" />
		</div>



		<div class="mid-content1">
			<div class="loc-handler">
				<form action="fitnessCentre.php" method="post">
				<input type="text" id="location" name="location" placeholder="Pick a Location" class="loc" />
				<input type="text" id="events" name="events" placeholder="Pick a Fitness Option" class="fit loc"/>
				<input type="submit" value="Search" name="submit" class="search-result"/>
				<!-- <div class="ui-widget">
 <label for="tags">Tags: </label>
 <input id="skills">
</div> -->

        </form>

			</div>
		</div>
		<div class="mid-content2">
			<div class="mct">
				<h2><a href="#">MEMBERSHIP</a></h2><h2><a href="#">CORPORATE</a></h2><h2><a href="#">PERSONAL TRAINING</a></h2>
			</div>
		</div>
		<div class="mid-content3">
			<div class="fitness-list">
				<a href="#"><img src="images/fitness.png" /></a>
				<a href="#"><img src="images/yoga.png" /></a>
				<a href="#"><img src="images/swimming.png" /></a>
				<a href="#"><img src="images/skating.png" /></a>
				<a href="#"><img src="images/badminton.png" /></a>
				<a href="#"><img src="images/cricket.png" /></a>
			</div>
		</div>
		<div class="mid-content4">
			<table  cellspacing="0" cellpadding="0">
				<tr>
					<td><a href="#"><img src="images/1.jpg" /></a></td>
					<td><a href="#"><img src="images/2.jpg" /></a></td>
					<td><a href="#"><img src="images/3.jpg" style="width:450px;"/></a></td>
				</tr>
				<tr>
					<td><a href="#"><img src="images/4.jpg" /></a></td>
					<td><a href="#"><img src="images/5.jpg" /></a></td>
					<td><a href="#"><img src="images/6.jpg" style="width:450px;"/></a></td>
				</tr>
				<tr>
					<td><a href="#"><img src="images/7.jpg" /></a></td>
					<td><a href="#"><img src="images/8.jpg" /></a></td>
					<td><a href="#"><img src="images/9.jpg" style="width:450px;height:244px;"/></a></td>
				</tr>
			</table>
		</div>
		<div class="mid-content5">
			<div class="content-head">What Our Customer Says</div>
			<div class="content-text">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed consequat eu felis ac sagittis. Suspendisse sed neque orci.
				Suspendisse aliquam nulla vitae leo gravida, in tincidunt quam cursus. Quisque gravida lorem vitae suscipit mollis - <h3>DAVID MOORE</h3></div>
		</div>
		<?php include "footer.php"; ?>
	</body>
</html>
