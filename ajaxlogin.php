<?php
include("db.php");
session_start();
if(isset($_POST['username']) && isset($_POST['password'])) {

$username = mysql_real_escape_string( $_POST["username"] );
$password =  md5($_POST["password"]);
$sql = "SELECT * FROM userlogin WHERE email='$username' AND password='$password'";
$result = mysql_query($sql);

$row = mysql_fetch_array($result);
if($row[0] > 0) {
	$_SESSION['username'] = $row['username'];
	echo true;exit;
  } 
  else {
	  echo false;exit;
  }
}
		
		

?>