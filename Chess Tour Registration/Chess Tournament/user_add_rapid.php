<?php
include("connection.php");

session_start();

if (isset($_COOKIE['username'])) {
    $current_username = $_COOKIE['username'];

    $existingQuery = "SELECT * FROM rapid WHERE Username = '$current_username'";
    $existingResult = mysqli_query($conn, $existingQuery);

    if (mysqli_num_rows($existingResult) > 0) {
            //utk cek sama ada user dh login atau tak
        echo '<script>
            alert("Oh no! Looks like you already registered in Rapid Tournament!");
            window.location.href = "category_page.php";
        </script>';
    } else {
        // ni dapatkan total row dalam table
        $countQuery = "SELECT COUNT(*) AS count FROM rapid";
        $countResult = mysqli_query($conn, $countQuery);

        if ($countResult) {
            $countData = mysqli_fetch_assoc($countResult);
            $totalCount = $countData['count'];

            if ($totalCount >= 20) {

                echo '<script>
                    alert("Oh no! Total participants have reached the maximum limit, so you cannot register for Rapid Tournament.");
                    window.location.href = "category_page.php";
                </script>';
            } else {

                $insertQuery = "INSERT INTO rapid (`Username`, `Email`, `Phone Number`, `User_id`) SELECT `Username`, `Email`, `Phone Number`, `User_id` FROM userinfo WHERE username = '$current_username'";

                if (mysqli_query($conn, $insertQuery)) {

                    echo '<script>
                        alert("You have successfully registered in Rapid Tournament!");
                        window.location.href = "category_page.php";
                    </script>';
                } else {

                    echo '<script>
                        alert("Oh no!");
                        window.location.href = "category_page.php";
                    </script>';
                }
            }
        } else {

            echo '<script>
                alert("Error checking the total count of participants.");
                window.location.href = "category_page.php";
            </script>';
        }
    }
} else {

    echo '<script>
        alert("Register at least if you want to enter!");
        window.location.href = "category_page.php";
    </script>';
}
?>
