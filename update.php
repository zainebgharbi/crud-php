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

$sql = "UPDATE  article SET name='". $_POST['name'] ."', quantite= "
. $_POST['quantite'] . ", price=".$_POST['price']." where id = ". $_POST['id'] ;

if ($conn->query($sql) === TRUE) {
  echo " record updated successfully".$sql;
} else {
  echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
header( 'Location: ./index.php' ) ;
?>
