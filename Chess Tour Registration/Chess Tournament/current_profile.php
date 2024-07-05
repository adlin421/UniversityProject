<!DOCTYPE html>
<html>
<head>
    <link rel="canonical" href="https://getbootstrap.com/docs/5.3/examples/carousel/">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css">
    <script src="https://kit.fontawesome.com/966bde08cf.js" crossorigin="anonymous"></script>
    <style>
        body {
            background-color: #737474;
            color: white;
            font-family: Arial, sans-serif;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            margin: 10;
        }
        .profile {
            background-color: #FFFFFF;
            width: 500px;
            padding: 20px;
            border-radius: 10px;
            box-shadow: 0px 0px 10px rgba(0,0,0,0.5);
            color: #000000; 
            border: 4px solid black;
        }
        .profile h2, .profile h3 {
            text-align: center;
        }
        
        .profile input {
            display: block;
            width: 97%;
            padding: 10px;
            margin: 10px 0;
            border: 1px solid #000000; 
            border-radius: 5px;
            color: #000000; 
            background-color: #FFFFFF; 
        }
        .profile button {
            display: block;
            width: 100%;
            padding: 10px;
            margin-top: 20px;
            border: 1px solid #000000; 
            border-radius: 5px;
            background-color:
            cursor: pointer;
        }
        /* Add this to your CSS */
        #profileForm {
            display: flex;
            flex-direction: column;
            justify-content: space-between;
            align-items: flex-end;
        }
        #profileForm input {
            flex: 1;
            margin-bottom: 10px;
        }
        #profileForm button {
            flex: 0;
        }
        .password-container {
            position: relative;
            display: flex;
            align-items: center;
            width: 100%;
        }

        #Password {
            padding-right: 30px; /* Adjust the padding to accommodate the eye icon */
            flex: 1;
        }

        .password-toggle {
            position: absolute;
            top: 50%;
            left: 410px;
            transform: translateY(-50%);
            cursor: pointer;
            width: 100%;
        }

        #eyeIcon {
    color: #666;
        }
    </style>
</head>
<body>
    <div class="bg-secondary-subtle">

        <!--Navigation Bar-->
        <header data-bs-theme="dark">
        <nav class="navbar navbar-expand-md navbar-dark fixed-top bg-dark">
            <div class="container-fluid">
            <a class="navbar-brand" href="landing_page.php">
                <i class="fa-solid fa-chess"></i> CHESS ROYALE</a><!--link to homepage-->
            </button>
            <div>
                <ul class="navbar-nav me-auto mb-2 mb-md-0">
                <li class="nav-item">
                    <a class="nav-link" aria-current="page" href="landing_page.php">Home</a> <!--link to homepage-->
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="category_page.php">Tournament</a><!--link to category page-->
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="about_us.php">About Us</a><!--link to about us page-->
                </li>
                </ul>
            </div>

            <button class="btn btn-warning rounded-4" type="submit" onclick="window.location.href='current_profile.php';">
            
            <?php
                    session_start(); 
    
                
                if (isset($_COOKIE['username'])) {
                    $current_username = $_COOKIE['username'];
                    echo "Welcome, $current_username!";
                } else {
                    
                    echo "Welcome, Guest!";
                }
            ?>
        
                </button><!--link to edit profile-->
                
            </div>
            <a class="navbar-brand" href="logout.php"><i class="fa-solid fa-arrow-right-from-bracket" style="color: #ffae00;"></i></a><!--logout button link-->
        </nav>
        </header>
    
    <div class="profile">
        <h2>Current User Profile</h2>
    <form method="post" action="edit_profile.php">
    <input type="text" id="userName" placeholder="User Name" disabled>
    <input type="text" id="fullName" placeholder="Full Name" name="namapenuh">
    <input type="email" id="email" placeholder="Email" name="Email">
    <input type="tel" id="phoneNumber" placeholder="Phone Number" name="phone">
    <div class="password-container">
    <input type="password" id="oldPassword" placeholder="Old Password" name="old_pass">
    <span class="password-toggle" onclick="togglePasswordVisibility('oldPassword')">
        <i class="fas fa-eye" id="eyeIcon"></i>
    </span>
    </div>
    <div class="password-container">
        <input type="password" id="newPassword" placeholder="New Password" name="new_pass">
        <span class="password-toggle" onclick="togglePasswordVisibility('newPassword')">
            <i class="fas fa-eye" id="eyeIconNew"></i>
        </span>
    </div>

    <button type="submit" name="update_profile" onclick="editProfile()">Edit Profile</button>
</form>
    </div>
<script>

function editProfile() {
    window.location.href = 'edit_profile.php';
}

//set variable in js
var userName = document.getElementById('userName').value;
var fullName = document.getElementById('fullName').value;
var email = document.getElementById('email').value;
var phoneNumber = document.getElementById('phoneNumber').value;

console.log(userName, fullName, email, phoneNumber);

function togglePasswordVisibility(passwordFieldId) {
    var passwordField = document.getElementById(passwordFieldId);
    var eyeIconId = "eyeIcon" + passwordFieldId.charAt(0).toUpperCase() + passwordFieldId.slice(1);

    if (passwordField.type === 'password') {
        passwordField.type = 'text';
        document.getElementById(eyeIconId).classList.remove('fa-eye');
        document.getElementById(eyeIconId).classList.add('fa-eye-slash');
    } else {
        passwordField.type = 'password';
        document.getElementById(eyeIconId).classList.remove('fa-eye-slash');
        document.getElementById(eyeIconId).classList.add('fa-eye');
    }
}

    </script>
</body>
</html>

<?php

include("connection.php");

// Retrieve and populate user data in the fields if available
if (isset($_COOKIE['username'])) {
    $current_username = $_COOKIE['username'];

    $query = "SELECT * FROM userinfo WHERE username = '$current_username'";
    $result = mysqli_query($conn, $query);

    if ($row = mysqli_fetch_assoc($result)) {
        $fullName = $row['Full Name'];
        $email = $row['Email'];
        $phoneNumber = $row['Phone Number'];
        $pass = $row['Password'];

        echo '<script>
                document.getElementById("userName").value = "'.$current_username.'";
                document.getElementById("fullName").value = "'.$fullName.'";
                document.getElementById("email").value = "'.$email.'";
                document.getElementById("phoneNumber").value = "'.$phoneNumber.'";
                document.getElementById("Password").value = "'.$pass.'";
            </script>';
    } else {
        echo "User not found in the database.";
    }
} else {
    echo '<script>
    window.location.href = "landing_page.php";
    alert("You are a GUEST !!! What data do you want to edit if you did not register?");
    </script>';
}
?>