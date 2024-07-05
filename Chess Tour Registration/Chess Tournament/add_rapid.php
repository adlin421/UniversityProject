<html>
<head>
<title>Add User</title>
<style>
	/************************************************/
	/*Body Segment*/
	html,body {
		height: 100%;
	}
	
	body {
		margin: 0;
		background-image: url('admin_bg.jpg');
		background-size: cover;
		background-repeat: no-repeat;
		background-attachment: fixed;
		width: 100vw;
	    height: 100vh;
	    display: flex;
	    flex-direction: column;
		color: black;
		font-family: sans-serif;
		font-weight: 100;
	}
	
	h2{
		font-size: 40px;
		color: white;
		font-family: 'Lato', 'Open Sans', 'Helvetica', sans-serif;
	}
	
	/************************************************/
	/*Button Segment*/
	.c_button {
		align-items: center;
		background: linear-gradient(144deg, #e6b800, #cc9900);
		border: 0;
		border-radius: 10px;
		box-sizing: border-box;
		color: black;
		cursor: pointer;
		display: flex;
		flex-direction: column;
		font: 700 14px/1 "Codec cold", sans-serif;
		height: 25px;
		justify-content: center;
		letter-spacing: 0.4px;
		line-height: 15px;
		max-width: 100%;
		padding: 5px 10px 0;
		text-align: center;
		text-decoration: none;
		text-transform: uppercase;
		user-select: none;
		-webkit-user-select: none;
		touch-action: manipulation;
	}

	.c_button:active,.c_button:hover {
		outline: 0;
	}

	.c_button span {
		transition: all 200ms;
	}

	.c_button:hover span {
		transform: scale(0.9);
		opacity: 0.75;
	}
	
</style>
</head>
<body>
    <center>
        <h2>Add Data for Rapid</h2>
        <form method="post">
            <label style="color: white;">Username:</label>
            <input type="text" name="new_username" placeholder="Insert Username" required>
            <br>
            <br>
            <button type="submit" name="Add" class="c_button">Add User</button>
        </form>
    </center>
</body>
</html>

<?php
include("connection.php");

if(isset($_POST['Add'])) {
    $newUsername = $_POST['new_username'];

    // Query to retrieve data from userinfo table
    $query = "SELECT * FROM userinfo WHERE username = '$newUsername'";
    $result = mysqli_query($conn, $query);

    if ($result) {
        // Fetch the data
        $row = mysqli_fetch_assoc($result);

        // Insert data into the other table with different columns
        $insertQuery = "INSERT INTO rapid (`Username`, `Email`, `Phone Number`, `User_id`) VALUES (
            '{$row["Username"]}',
            '{$row["Email"]}',
            '{$row["Phone Number"]}',
            '{$row["User_id"]}'
        )";

        if (mysqli_query($conn, $insertQuery)) {
            echo '<script>
				alert("Data inserted successfully.");
				window.location.href = "Aadmin.php";
				</script>';
        } else {
            echo "Error inserting data: " . mysqli_error($conn);
        }
    } else {
        echo "Error retrieving data: " . mysqli_error($conn);
    }
}
?>
