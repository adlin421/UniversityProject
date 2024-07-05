<?php
session_start();
include("connection.php");

if (isset($_POST['update_profile'])) {
    $current_username = $_COOKIE['username'];

    $update_data = array();

    if (isset($_POST['namapenuh']) && !empty($_POST['namapenuh'])) {
        $new_fullName = $_POST['namapenuh'];
        $update_data[] = "`Full Name`='$new_fullName'";
    }

    if (isset($_POST['Email']) && !empty($_POST['Email'])) {
        $new_email = $_POST['Email'];
        $update_data[] = "`Email`='$new_email'";
    }

    if (isset($_POST['phone']) && !empty($_POST['phone'])) {
        $new_phoneNumber = $_POST['phone'];
        $update_data[] = "`Phone Number`='$new_phoneNumber'";
    }

    // Define the new_password variable based on the new password field
    if (isset($_POST['new_pass']) && !empty($_POST['new_pass'])) {
        $new_password = $_POST['new_pass'];
        $update_data[] = "`Password`='$new_password'";
    }

    // Check if the old password matches the one in the database
    if (isset($_POST['old_pass']) && !empty($_POST['old_pass'])) {
        $old_password = $_POST['old_pass'];


        // Retrieve the old password from the database
        $query = "SELECT `Password` FROM userinfo WHERE `username`='$current_username'";
        $result = mysqli_query($conn, $query);

        if ($result && mysqli_num_rows($result) > 0) {
            $row = mysqli_fetch_assoc($result);
            $stored_password = $row['Password'];

            // Check if the old password matches
            if ($old_password === $stored_password) {
                // Old password matches, allow the update
                $update_query = "UPDATE userinfo SET ";

                if (!empty($update_data)) {
                    $update_query .= "`Full Name`='$new_fullName', ";
                    $update_query .= "`Email`='$new_email', ";
                    $update_query .= "`Phone Number`='$new_phoneNumber', ";
                    $update_query .= "`Password`='$new_password' ";
                }

                $update_query .= "WHERE `username`='$current_username'";

                $update_result = mysqli_query($conn, $update_query);

                if ($update_result) {
                echo '<script>
                window.location.href = "current_profile.php";
                alert("You have successfully updated your profile");
                </script>';

                } else {
                    echo "Error updating profile: " . mysqli_error($conn);
                }
            } else {
                // Old password doesn't match
                echo '<script>
                window.location.href = "current_profile.php";
                alert("Your Old Password Does Not Match!! ");
            </script>';
            }
        } else {
            // Error retrieving old password from the database
            echo "Error retrieving old password from the database: " . mysqli_error($conn);
        }
    } else {
        // No old password provided
        echo '<script>
        window.location.href = "current_profile.php";
        alert("Please Insert Old Password To Have Authorisation To Update Your data Profile! ");
    </script>';
    }
} else {
    // Form submission was not triggered
    header("Location: current_profile.php");
    exit();
}
?>
