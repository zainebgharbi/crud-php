<!DOCTYPE html>
<html>
<style>
input, select {
  width: 100%;
  padding: 12px 20px;
  margin: 8px 0;
  display: inline-block;
  border: 1px solid #ccc;
  border-radius: 4px;
  box-sizing: border-box;
}

input[type=submit] {
  width: 100%;
  background-color: #4CAF50;
  color: white;
  padding: 14px 20px;
  margin: 8px 0;
  border: none;
  border-radius: 4px;
  cursor: pointer;
}

input[type=submit]:hover {
  background-color: #45a049;
}

div {
  border-radius: 5px;
  background-color: #f2f2f2;
  padding: 20px;
}
</style>
<body>

<h3>Edit Article</h3>

<?php

// Connection Paraméters
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

$sql = "SELECT * FROM article where id=" . $_REQUEST["id"];
$result = $conn->query($sql);

$row = $result->fetch_assoc();


?>



  <form action="update.php" method="post">

  <div>
    <label for="fid">ID</label>
    <input type="number" id="fid" name="id" value="<?php echo $row['id']?>">
</div>



    <div>
    <label for="fname">Name</label>
    <input type="text" id="fname" name="name" value="<?php echo $row['name']?>">
</div>
<div>
    <label for="fprice">Price</label>
    <input type="number" id="fprice" name="price" value="<?php echo $row['price']?>">
</div>
<div>
    <label for="fquantity">Quantity</label>
    <input type="number" id="fquantity" name="quantite" value="<?php echo $row['quantite']?>">
</div>

    <input type="submit" value="Submit">
  </form>
  <?php
  $conn->close();

  ?>

</body>
</html>