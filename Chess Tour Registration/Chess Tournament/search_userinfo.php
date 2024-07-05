<html>
<head>
<title>Find User</title>
<script src="https://kit.fontawesome.com/64c073320b.js" crossorigin="anonymous"></script>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" integrity="sha256-DZXAbB0WnQa2B6y4CzB01Wl1BogT8l8r/5JoGO+8ffg=" crossorigin="anonymous">
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

    .text-right {
		overflow: hidden;
		float: right;
		left: 50%;
		background-color: rgb(255,0,0);
	}
	
	.text-right1 {
		margin-right: 8px;
		overflow: hidden;
		float: right;
		left: 50%;
	}

/*Popup Segment*/
.popup {	
		display: none;
		position: fixed;
		z-index: 1;
		left: 0;
		top: 0;
		width: 100%;
		height: 100%;
		overflow: hidden;
	}

    /**table segment**/
    table {
		width: 800px;
		border-collapse: collapse;
		overflow: hidden;
		box-shadow: 0 0 20px rgba(0,0,0,0.1);
	}

	th,td {
		padding: 15px;
		background-color: rgba(255,255,255,0.9);
		color: black;
	}
	
	thead {
		th {
			background-color: #55608f;
		}
	}
	
	tbody {
		tr {
			&:hover {
				background-color: rgba(255,255,255,0.5);
			}
		}
		td {
			position: relative;
			&:hover {
				&:before {
					content: "";
					position: absolute;
					left: 0;
					right: 0;
					top: -9999px;
					bottom: -9999px;
					background-color: rgba(255,255,255,0.1);
					z-index: -1;
				}
			}
		}
	}

	th {
		text-align: left;	
	}
	
</style>
</head>
<body>
    <center>

    <h2>Search Data</h2>

    <form method="post">
        <label style="color: white;">IGN to search:</label>
        <input type="text" name="username" placeholder="Insert IGN Name" required>
        <br>
		<br>
        <button type="submit" name="Enter" class="c_button">Search</button>
    </form>

    </center>

    <script>

    function AdminRemove() {
		window.location.href = "delete_userinfo.php";
	}
    function Home() {
		window.location.href = "Admin_page.php";
	}
    function closePopup() {
		var popups = document.getElementsByClassName('popup');
		for (var i = 0; i < popups.length; i++) {
			popups[i].style.display = 'none';
		}
	}

    </script>
</body>
</html>

<?php
include("connection.php");

if (isset($_POST['Enter'])) {
    $search = $_POST['username'];

    // Search query
    $sql = "SELECT * FROM userinfo WHERE username LIKE '%$search%'";

    // Execute the query
    $result = mysqli_query($conn, $sql);

    // Display search results
    if ($result) {
        echo '<div class="container">
        
                <center>
                    <table>
                        <tr>
                            <th>Result :
                                <button onclick="closePopup()" class="text-right"><i class="fa-solid fa-xmark"></i></button>
                                <button onclick="AdminRemove()" class="text-right1"><i class="fa-solid fa-trash"></i></button>
                                <button onclick="Home()" class="text-right1"><i class="fa-solid fa-house"></i></button>
                            </th>
                        </tr>
                    </table>
                    <table border="1">
                        <thead>
                            <tr>
                                <th>User ID</th>
                                <th>Username</th>
                                <th>Full Name</th>
                                <th>Email</th>
                                <th>Phone Number</th>
                                <th>Password</th>
                            </tr>
                        </thead>
                        <tbody>';

        // Output data for each row
        while ($row = mysqli_fetch_assoc($result)) {
            $userId = $row['User_id'];
            $username = $row['Username'];
            $fullnamer = $row['Full Name'];
            $email = $row['Email'];
            $phoneNumber = $row['Phone Number'];
            $pass = $row['Password'];

            echo '<tr>
                    <td>' . $userId . '</td>
                    <td>' . $username . '</td>
                    <td>' . $fullnamer . '</td>
                    <td>' . $email . '</td>
                    <td>' . $phoneNumber . '</td>
                    <td>' . $pass . '</td>
                </tr>';
        }

        echo '</tbody>
            </table>
        </center>
    </div>';

    } else {
        echo "No results found";
    }
} else {
    echo "Error executing query: " . mysqli_error($conn);
}

// Close connection
mysqli_close($conn);
?>

