<html>
<head>
	<title>delete drink</title>
	<link rel="stylesheet" href="style.css">
</head>
<center>
<body>


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
	$query = "DELETE FROM drink_stock WHERE `Barcode Number`='$barcode'";
	
	// Execute the query
	if(mysqli_query($conn, $query)){
		echo "<h3>Data has been deleted!</h3>"; 
        header("Location: query.php");
        header();
	} else {
        echo "Error: " . $query . "<br>" . mysqli_error($conn);
    }
}
?>
