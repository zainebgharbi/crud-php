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

$sql = "INSERT INTO article (name, quantite, price)".
" VALUES ('". $_POST['name'] ."', ". $_POST['quantite'] . ",".$_POST['price'].")";

if ($conn->query($sql) === TRUE) {
  echo "New record created successfully";
} else {
  echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
header( 'Location: ./index.php' ) ;
?>
