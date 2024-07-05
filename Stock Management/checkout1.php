<html>
<head>
	<title>delete parcel</title>
	<link rel="stylesheet" href="style.css">
</head>
<center>
<body>

<!-- <form class="login_box" method="post">
	<input type="number" name="barcode" placeholder="Barcode" required><br>
	<input type="submit" name="Enter" value="Delete" id="btn">
</form> -->

</body>
</center>
</html>

<?php
include("connection.php");

// Check if the form has been submitted
if(isset($_POST['Enter'])) {
	// Get the barcode number entered by the user
	$barcode = $_POST['barcode'];
	
	// Construct the query to delete the row with the given barcode number
	$query = "DELETE FROM parcel WHERE `Barcode Number`='$barcode'";
	
	// Execute the query
	if(mysqli_query($conn, $query)){
		echo "<h3>Data has been deleted!</h3>"; 
        header("Location: query.php?tab=parcel");
        header();
	} else {
        echo "Error: " . $query . "<br>" . mysqli_error($conn);
    }
}
?>
