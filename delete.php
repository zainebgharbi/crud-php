<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "magasin";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

$sql = "DELETE FROM  article  where id = ". $_REQUEST['id'] ;

if ($conn->query($sql) === TRUE) {
  echo " record removed successfully";
} else {
  echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
header( 'Location: ./index.php' ) ;
?>