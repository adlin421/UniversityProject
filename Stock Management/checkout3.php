<?php

// Establish a database connection
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "database";

$conn = mysqli_connect($servername, $username, $password, $dbname);

// Check connection
if (!$conn) {
  die("Connection failed: " . mysqli_connect_error());
}

// Retrieve barcode number from user input
$barcode2 = $_POST["barcode3"];

// Delete one value from the Quantity column of the food_stock table for the product with the specified barcode number
$sql = "UPDATE drink_stock SET Quantity = Quantity - 1 WHERE `Barcode Number` = $barcode3";
mysqli_query($conn, $sql);

// Close the database connection
mysqli_close($conn);

// Redirect the user back to the original page
header("Location: query.php");
exit();

?>
