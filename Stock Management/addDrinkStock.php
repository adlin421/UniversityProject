<?php

include("connection.php");

if(isset($_POST['Enter']))
{
    $BarcodeNum= $_POST['barcode'];
    $item_Name= $_POST['item_Name'];
    $quantity= $_POST['quantity'];
    
    // Disable foreign key check
    mysqli_query($conn, 'SET FOREIGN_KEY_CHECKS=0');

    // Insert into drink table
    $sql = "INSERT INTO drink (`Barcode Number`, `Item Name`) VALUES ('$BarcodeNum', '$item_Name')";
    mysqli_query($conn, $sql);

    // Insert into drink_stock table
    $sql = "INSERT INTO drink_stock (`Barcode Number`, `Quantity`) VALUES ('$BarcodeNum', '$quantity', '$item_Name')";
    mysqli_query($conn, $sql);

    // Re-enable foreign key check
    mysqli_query($conn, 'SET FOREIGN_KEY_CHECKS=1');

    header("Location: query.php");
    exit();
}

mysqli_close($conn);

?>
