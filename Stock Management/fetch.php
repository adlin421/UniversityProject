<?php
    include("connection.php");

    if(isset($_POST['submit'])){
        $username = $_POST["userName"];
        $password = $_POST["passWord"];
        $identity = $_POST["idenTity"];

        

        // Use prepared statement with placeholders
        $sql = "SELECT * FROM login WHERE username = ? AND password = ? AND identity = ?";
        
        $stmt = mysqli_prepare($conn, $sql);
        mysqli_stmt_bind_param($stmt, 'sss', $username, $password, $identity);
        mysqli_stmt_execute($stmt);
        $result = mysqli_stmt_get_result($stmt);
        


        $count = mysqli_num_rows($result);
        if($count == 1){
            
            // Update last_login timestamp
            date_default_timezone_set('Asia/Kuala_Lumpur');
            $current_datetime = date('Y-m-d H:i:s', time());
            $sql2 = "UPDATE login SET last_login = '$current_datetime' WHERE username = '$username'";
            mysqli_query($conn, $sql2);
            echo "$current_datetime";
            header('Location: query.php');
            
        }
        else{
            echo '<script>
                window.location.href = "login.php";
                alert("Login failed. Invalid username or password")
                </script>';
        }
    }
?>
