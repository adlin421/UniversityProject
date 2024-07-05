<?php 
    session_start();
    include("connection.php");
    
    // Check connection
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }
    if(isset($_POST["Name"]) && $_POST["Name"] != $_SESSION["Name"]){
        $name = $_POST["Name"];
        $message .= "Name, ";
    }
    else{
        if($_SESSION["Name"] === null){
            header("location: /project");
        }
        $name = $_SESSION["Name"];
    }
    if(isset($_POST["Age"]) && $_POST["Age"] != $_SESSION["Age"]){
        $age = $_POST["Age"];
        $message .= "Age, ";
    }
    else{
        $age = $_SESSION["Age"];
    }
    if(isset($_POST["Email"]) && $_POST["Email"] != $_SESSION["Email"]){
        $email = $_POST["Email"];
        $message .= "Email, ";
    }
    else{
        $email = $_SESSION["Email"];
    }

    if(isset($_POST["PhoneNumber"]) && $_POST["PhoneNumber"] != $_SESSION["PhoneNumber"]){
        $phone = $_POST["PhoneNumber"];
        $message .= "Phone Number, ";
    }
    else{
        $phone = $_SESSION["PhoneNumber"];
    }

    if ($message === ""){
        $message = "No changes were made. ";
    }  
    else{
        $message .= " changed. ";
    }

    if(($_POST["Password"] === $_SESSION["Password"]) && $_POST["NewPassword0"] != null && $_POST["NewPassword0"] === $_POST["NewPassword1"]){
        $password = $_POST["NewPassword1"];
        $password .= "Password, ";
    }
    else{
        if ($_POST["NewPassword0"] != null && $_POST["NewPassword0"] != $_POST["NewPassword1"]){
            $message .= "Please repeat your new password correctly";
        }
        else if ($_POST["Password"] != null && $_POST["Password"] != $_SESSION["Password"]){
            $message .= "Please insert your old password correctly";
        }
        $password = $_SESSION["Password"];
    }

    $tem_email = $_SESSION["Email"];
    $sql = "SELECT * FROM users_password WHERE email='$tem_email'";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        $sqla = "UPDATE userinfo SET Email='$email', Password='$password' WHERE Email='$tem_email'";
        $result = $conn->query($sqla);
        $_SESSION['Email'] = $email;
        $_SESSION['Password'] = $password;

    } else {
        // User not found
        header("refresh:10;url=/project");
        echo "User not found. Please check your email and try again.";
    }

    $sql = "SELECT * FROM users WHERE email='$tem_email'";
    $result = $conn->query($sql);
    if ($result->num_rows > 0) {
        $sqla = "UPDATE users SET Name='$name',Age='$age',Email='$email', PhoneNumber='$phone' WHERE Email='$tem_email'";
        $result = $conn->query($sqla);

        $_SESSION['Name'] = $name;
        $_SESSION['Age'] = $age;
        $_SESSION['PhoneNumber'] = $phone;

    } else {
        // User not found
        header("refresh:10;url=/project");
        echo "User not found. Please check your email and try again.";
    }
?>`'