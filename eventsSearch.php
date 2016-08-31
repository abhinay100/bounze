<?php
// $dbHost = 'localhost';
// $dbUsername = 'root';
// $dbPassword = '';
// $dbName = 'bounze';
// //connect with the database
// $db = new mysqli($dbHost,$dbUsername,$dbPassword,$dbName);
include("database.php");
//get search term
$searchTerm = $_GET['term'];
//get matched data from skills table
$query = $db->query("SELECT * FROM fitlist WHERE events LIKE '%".$searchTerm."%' ORDER BY events ASC");
while ($row = $query->fetch_assoc()) {
    $data[] = $row['events'];
}
//return json data
echo json_encode($data);
?>
