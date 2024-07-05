<?php
include("connection.php");

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = $_POST['ign_name'];
    $password = $_POST['pass']; 

    $sql_user = "SELECT * FROM userinfo WHERE username='$username' AND password='$password'";
    $result_user = $conn->query($sql_user);

    $sql_admin = "SELECT * FROM admininfo WHERE username='$username' AND password='$password'";
    $result_admin = $conn->query($sql_admin);

    if ($result_user->num_rows > 0) {
        // Set a cookie
        setcookie("username", $username, time() + (86400 * 30), "/"); 
        echo '<script>
            window.location.href ="landing_page.php";
            </script>';
    } elseif ($result_admin->num_rows > 0) {
        echo '<script>
            window.location.href ="admin_page.php";
            </script>';
    } else {
        echo '<script>
            alert("Failed to login!")
            window.location.href ="register_form.html";
            </script>';
    }
}

$conn->close();
?>