<!DOCTYPE html>
<html>
<head>
	<title>add parcel</title>
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
	$rec_Name= $_POST['rec_Name'];
	$send_Name= $_POST['send_Name'];
	$cour= $_POST['cour'];
	$price= $_POST['price'];
	$date_rcv= $_POST['date_rcv'];
	
	
	$query="INSERT INTO parcel (`Barcode Number`, `Receiver Name`, `Sender Name`, `Courier Type`, `Price`, `Date Received`) 
	VALUES ('$BarcodeNum', '$rec_Name', '$send_Name', '$cour', '$price', '$date_rcv')";
	if(mysqli_query($conn, $query)){
		echo "<h3>Data has been added!</h3>"; 
		header("Location: query.php?tab=parcel");
	} else {
        echo "Error: " . $query . "<br>" . mysqli_error($conn);
    }
}

?>

<!--- <form class="login_box" method="post">
	<input type="number" name="barcode" placeholder="Barcode" required><br>
	<input type="text" name="rec_Name" placeholder="Receiver Name" required><br>
	<input type="text" name="send_Name" placeholder="Sender Name"><br>
	<input type="text" name="cour" placeholder="Courier Type"><br>
	<input type="number" name="price" placeholder="Price"><br>
	<input type="date" name="date_rcv" placeholder="Date Received"><br>

	<input type="submit" name="Enter" value="enter" id="btn">

</form> --->

</body>
</center>
</html>
