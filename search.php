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
$query = $db->query("SELECT * FROM location WHERE items LIKE '%".$searchTerm."%' ORDER BY items ASC");
while ($row = $query->fetch_assoc()) {
    $data[] = $row['items'];
}
//return json data
echo json_encode($data);
?>
