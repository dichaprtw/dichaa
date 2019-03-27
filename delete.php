<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "dichaunyuk";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 

// sql to delete a record
$id_post= $_GET["id_post"];
$sql = "DELETE FROM postt WHERE id_post =$id_post";

if ($conn->query($sql) === TRUE) {
    echo "Record deleted successfully";
    header('location:home2.php');
} else {
    echo "Error deleting record: " . $conn->error;
}

$conn->close();
?>
