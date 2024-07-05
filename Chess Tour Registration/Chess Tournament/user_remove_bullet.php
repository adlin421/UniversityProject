<?php

include("connection.php");
session_start();

if (!isset($_COOKIE['username'])) {
    echo '<script>
    alert("Register at least if you want to leave !");
    window.location.href = "category_page.php";
    </script>';
} else {
    $current_username = $_COOKIE['username'];
    
    // Check if the user's record exists in the database
    $query = "SELECT * FROM bullet WHERE `username` = '$current_username'";
    $result = mysqli_query($conn, $query);
    
    if (mysqli_num_rows($result) > 0) {
        // The user's record exists in the database, so you can proceed with the deletion
        $delete_query = "DELETE FROM bullet WHERE `username` = '$current_username'";
        
        if(mysqli_query($conn, $delete_query)){
            echo '<script>
                alert("You have successfully removed your name from the Bullet Tournament");
                window.location.href = "category_page.php";
            </script>';
        } else {
            echo "Error: " . $delete_query . "<br>" . mysqli_error($conn);
        }
    } else {
        // The user's record doesn't exist in the database, so they've already canceled their registration
        echo '<script>
            alert("You have already canceled your registration.");
            window.location.href = "category_page.php";
        </script>';
    }
}
?>