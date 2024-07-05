<html>
<head>
<title>Delete Category</title>
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
        <h2>Delete Category</h2>
        <form method="post" action="">
            <label style="color: white;">Event ID:</label>
            <input type="number" name="event_id" placeholder="Insert Category ID" required>
            <br>
            <br>
            <button type="submit" name="Delete" class="c_button">delete</button>
        </form>
    </center>
</body>
</html>

<?php
include("connection.php");

if(isset($_POST['Delete'])) {
    $event_id = $_POST['event_id'];

    $deleteQuery = "DELETE FROM category WHERE category_id = '$event_id'";

    if (mysqli_query($conn, $deleteQuery)) {
        echo '<script>
            alert("Event has been deleted successfully.");
            window.location.href = "Admin_page.php";
            </script>';
    } else {
        echo "Error deleting data: " . mysqli_error($conn);
    }
}
?>
