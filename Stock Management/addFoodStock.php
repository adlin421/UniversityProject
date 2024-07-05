<!DOCTYPE html>
<html>
<head>
	<title>add drink stock</title>
	<link rel="stylesheet" href="style.css">
</head>
<center>
<body>

<?php

include("connection.php");

//retrieve data
if(isset($_POST['Enter']))
{
	$BarcodeNum= $_POST['barcode'];
	$item_Name= $_POST['item_Name'];
    $quantity= $_POST['quantity'];
	
	
	$query="INSERT INTO food_stock (`Barcode Number`, `Item Name`, `Quantity`) 
	VALUES ('$BarcodeNum', '$item_Name', '$quantity')";
	if(mysqli_query($conn, $query)){
		header("Location: query.php?tab=parcel");
	} else {
        echo "Error: " . $query . "<br>" . mysqli_error($conn);
    }
}

?>


</body>
</center>
</html>
