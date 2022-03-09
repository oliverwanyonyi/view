<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "viewtravel";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
if(isset($_GET["travellersId"])){
    $travellersId=$_GET["travellersId"];
    require_once "db_connection.php";
}
// sql to delete a record
id = $travellersId;
$deleteQuery= "DELETE FROM `travellers` WHERE id=$travellersId";

if ($conn->query($sql) === TRUE) {
    echo "Record deleted successfully";
} else {
    echo "Error deleting record: " . $conn->error;
}

$conn->close();