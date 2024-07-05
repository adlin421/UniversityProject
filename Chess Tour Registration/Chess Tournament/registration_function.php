<?php

include("connection.php");

if (
    !empty($_POST['ign_name']) &&
    !empty($_POST['name']) &&
    !empty($_POST['email']) &&
    !empty($_POST['phone']) &&
    !empty($_POST['pass'])
) {
    $username = $_POST['ign_name'];
    $fullname = $_POST['name'];
    $emails = $_POST['email'];
    $phones = $_POST['phone'];
    $passwords = $_POST['pass'];

    // Assuming you have a database connection in $conn
    $stmt = $conn->prepare("INSERT INTO userinfo (Username, `Full Name`, Email, `Phone Number`, Password) VALUES (?, ?, ?, ?, ?)");

    if ($stmt) {
        $stmt->bind_param("sssss", $username, $fullname, $emails, $phones, $passwords);

        if ($stmt->execute()) {
            echo '<script>
                window.location.href = "register_form.html";
                alert("Thank you for registering on our website :> ...Please Login To Use Our Website :>");
            </script>';
            exit;
        } else {
            echo '<script>
                alert("Error executing the statement: ' . $stmt->error . '");
                window.location.href = "register_form.html";
            </script>';
        }

        $stmt->close();
    } else {
        // Display an error message or handle the failure in preparing the statement
        echo "Error in preparing the statement: " . $conn->error;
    }
} else {
    echo '<script>
        alert("Please fill in all the required fields in the registration form.");
        window.location.href = "register_form.html";
    </script>';
}
?>
