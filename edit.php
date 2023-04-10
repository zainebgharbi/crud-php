<!DOCTYPE html>
<html>
<head>
<style>
table {
  font-family: arial, sans-serif;
  border-collapse: collapse;
  width: 100%;
}

td, th {
  border: 1px solid #dddddd;
  text-align: left;
  padding: 8px;
}

tr:nth-child(even) {
  background-color: #dddddd;
}
.button {
  background-color: #4CAF50;
  border: none;
  color: white;
  padding: 15px 32px;
  text-align: center;
  text-decoration: none;
  display: inline-block;
  font-size: 16px;
  margin: 4px 2px;
  cursor: pointer;
}
</style>
</head>
<body>

<h2>articles</h2>
<a href="create.html" class="button">Link Button</a>
<table>
  <tr>
    <th>Id</th>
    <th>Name</th>
    <th>Price</th>
    <th>Quantity</th>
  </tr>
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

$sql = "SELECT * FROM article";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // output data of each row
    while ($row = $result->fetch_assoc()) {
        echo "<tr><td> " . $row["id"] . " </td><td> " . $row["name"] . "</td><td> "  . $row["price"] . "  </td><td> "  . $row["quantite"] . "</td></tr>";
    }
} else {
    echo "0 results";
}
$conn->close();

?>
</table>
</body>
</html>