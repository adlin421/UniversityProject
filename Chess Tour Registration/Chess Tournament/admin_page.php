<!DOCTYPE html>
<html>
<head>
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
	
	h1{
		font-size: 40px;
		color: white;
		font-family: 'Lato', 'Open Sans', 'Helvetica', sans-serif;
	}
	
	/************************************************/
	/*Button Segment*/
	.c_button {
		background: linear-gradient(144deg, #e6b800, #cc9900);
		border: 0;
		border-radius: 8px;
		box-shadow: 0 15px 30px -5px rgba(151, 65, 252, 0.2);
		color: #000000;
		font-family: 'Phantomsans', sans-serif;
		font-size: 20px;
		padding: 7px 14px;
		cursor: pointer;
		display: flex;
		justify-content: center;
		align-items: center;
		line-height: 1em;
		min-width: 140px;
		max-width: 100%;
		white-space: nowrap;
		text-decoration: none;
		user-select: none;
		-webkit-user-select: none;
		touch-action: manipulation;
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

	/************************************************/
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
	
	.popup-content {
		margin-top: 20px;
		background-color: #fff;
		margin: 15% auto;
		width: 80%;
	}
	
	/************************************************/
	/*Table Segment*/
	.container {
		position: absolute;
		top: 50%;
		left: 50%;
		transform: translate(-50%, -50%);
	}
	
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
	<script src="https://kit.fontawesome.com/64c073320b.js" crossorigin="anonymous">
	</script>
	<center>
	<h1><u>Tournament Categories</u></h1>
	<br></br>
	<button onclick="showPopup('BulletTable')" class="c_button" ><i class="fa-solid fa-table" style="margin-right: 8px;"></i>Bullet</button>
	<br></br>
	<button onclick="showPopup('BlitzTable')" class="c_button" ><i class="fa-solid fa-table" style="margin-right: 8px;"></i>Blitz</button>
	<br></br>
	<button onclick="showPopup('RapidTable')" class="c_button" ><i class="fa-solid fa-table" style="margin-right: 8px;"></i>Rapid</button>
	<br><br>
	<button onclick="showPopup('UserTable')" class="c_button" ><i class="fa-solid fa-eye" style="margin-right: 8px;"></i>View All Participants</button>
	<br><br>
	<button onclick="showPopup('CategoryTable')" class="c_button" ><i class="fa-solid fa-plus" style="margin-right: 8px;"></i>View Category</button>
	<br><br>
	<button onclick="ViewHome()" class="c_button" ><i class="fa-solid fa-house" style="margin-right: 8px;"></i>View Homepage</button>
	<br><br>
	<button onclick="logout()" class="c_button"><i class="fa-solid fa-sign-out" style="margin-right: 8px;"></i>Logout</button>
	</center>

	<div id="BulletTable" class="popup">
		<div class="popup-content">
		<div class="container">
			<table>
				<tr>
				<th>Bullet Tournament List
				<button onclick="closePopup()" class="text-right"><i class="fa-solid fa-xmark"></i></button>
				<button onclick="BulletRemove()" class="text-right1"><i class="fa-solid fa-trash"></i></button>
				<button onclick="BulletAdd()" class="text-right1"><i class="fa-solid fa-user-plus"></i></button>
				</th>
				</tr>
			</table>
			
			<?php
				echo "<table border='1'>
					<thead>
						<tr>
							<td>User ID</td>
							<td>Username</td>
							<td>Email</td>
							<td>Phone Number</td>
						</tr>
					</thead>";
						
				$con = mysqli_connect("localhost", "root", "", "project_web") or die("Cannot connect to server." . mysqli_error($con));

				$sql = "SELECT * FROM bullet";
				$result = mysqli_query($con, $sql) or die("Cannot execute sql: " . mysqli_error($con));

				while ($row = mysqli_fetch_assoc($result)) 
				{
					$userId = $row['User_id'];
					$username = $row['Username'];
					$email = $row['Email'];
					$phoneNumber = $row['Phone Number'];

					echo "
						<tbody>
							<tr>
								<td>$userId</td>
								<td>$username</td>
								<td>$email</td>
								<td>$phoneNumber</td>
						    </tr>
						</tbody>";
				}

				echo "</table>";
			?>
			</div>
		</div>
	</div>

	<div id="BlitzTable" class="popup">
		<div class="popup-content">
		<div class="container">
			<table>
				<tr>
				<th>Blitz Tournament List
				<button onclick="closePopup()" class="text-right"><i class="fa-solid fa-xmark"></i></button>
				<button onclick="BlitzRemove()" class="text-right1"><i class="fa-solid fa-trash"></i></button>
				<button onclick="BlitzAdd()" class="text-right1"><i class="fa-solid fa-user-plus"></i></button>
				</th>
				</tr>
			</table>
			
			<?php
				echo "<table border='1'>
					<thead>
						<tr>
							<td>User ID</td>
							<td>Username</td>
							<td>Email</td>
							<td>Phone Number</td>
						</tr>
					</thead>";
						
					include("connection.php");

				$sql = "SELECT * FROM blitz";
				$result = mysqli_query($con, $sql) or die("Cannot execute sql: " . mysqli_error($con));

				while ($row = mysqli_fetch_assoc($result)) 
				{
					$userId = $row['User_id'];
					$username = $row['Username'];
					$email = $row['Email'];
					$phoneNumber = $row['Phone Number'];

					echo "
						<tbody>
							<tr>
								<td>$userId</td>
								<td>$username</td>
								<td>$email</td>
								<td>$phoneNumber</td>
						    </tr>
						</tbody>";
				}

				echo "</table>";
			?>
			</div>
		</div>
	</div>

	<div id="RapidTable" class="popup">
		<div class="popup-content">
		<div class="container">
			<table>
				<tr>
				<th>Rapid Tournament List
				<button onclick="closePopup()" class="text-right"><i class="fa-solid fa-xmark"></i></button>
				<button onclick="RapidRemove()" class="text-right1"><i class="fa-solid fa-trash"></i></button>
				<button onclick="RapidAdd()" class="text-right1"><i class="fa-solid fa-user-plus"></i></button>
				</th>
				</tr>
			</table>
			
			<?php
				echo "<table border='1'>
					<thead>
						<tr>
							<td>User ID</td>
							<td>Username</td>
							<td>Email</td>
							<td>Phone Number</td>
						</tr>
					</thead>";
						
					include("connection.php");

				$sql = "SELECT * FROM rapid";
				$result = mysqli_query($con, $sql) or die("Cannot execute sql: " . mysqli_error($con));

				while ($row = mysqli_fetch_assoc($result)) 
				{
					$userId = $row['User_id'];
					$username = $row['Username'];
					$email = $row['Email'];
					$phoneNumber = $row['Phone Number'];

					echo "
						<tbody>
							<tr>
								<td>$userId</td>
								<td>$username</td>
								<td>$email</td>
								<td>$phoneNumber</td>
						    </tr>
						</tbody>";
				}

				echo "</table>";
			?>
			</div>
		</div>
	</div>
	
	<div id="UserTable" class="popup">
		<div class="popup-content">
		<div class="container">
			<table>
				<tr>
				<th>All Participants List
				<button onclick="closePopup()" class="text-right"><i class="fa-solid fa-xmark"></i></button>
				<button onclick="AdminRemove()" class="text-right1"><i class="fa-solid fa-trash"></i></button>
				<button onclick="AdminSearch()" class="text-right1"><i class="fa-solid fa-magnifying-glass"></i></button>
				</th>
				</tr>
			</table>
			
			<?php
			
				echo "<div style='height: 300px; overflow-y: auto'>
				
				<table border='1'>
					<thead>
						<tr>
							<td>User ID</td>
							<td>Username</td>
							<td>Email</td>
							<td>Phone Number</td>
						</tr>
					</thead>
					</div>";
						
					include("connection.php");

				$sql = "SELECT * FROM userinfo";
				$result = mysqli_query($con, $sql) or die("Cannot execute sql: " . mysqli_error($con));

				while ($row = mysqli_fetch_assoc($result)) 
				{
					$userId = $row['User_id'];
					$username = $row['Username'];
					$email = $row['Email'];
					$phoneNumber = $row['Phone Number'];

					echo "
						<tbody>
							<tr>
								<td>$userId</td>
								<td>$username</td>
								<td>$email</td>
								<td>$phoneNumber</td>
						    </tr>
						</tbody>";
				}

				echo "</table>";
			?>
			</div>
		</div>
	</div>
			</div>
	<div id="CategoryTable" class="popup">
		<div class="popup-content">
		<div class="container">
			<table>
				<tr>
				<th>Available Category
				<button onclick="closePopup()" class="text-right"><i class="fa-solid fa-xmark"></i></button>
				<button onclick="CategoryRemove()" class="text-right1"><i class="fa-solid fa-trash"></i></button>
				<button onclick="CategoryAdd()" class="text-right1"><i class="fa-solid fa-user-plus"></i></button>
				</th>
				</tr>
			</table>
			
			<?php
			
				echo "<div style='height: 300px; overflow-y: auto'>
				
				<table border='1'>
					<thead>
						<tr>
							<td>Category ID</td>
							<td>Name</td>
							<td>Quota</td>
						</tr>
					</thead>
					</div>";
						
					include("connection.php");

				$sql = "SELECT * FROM category";
				$result = mysqli_query($con, $sql) or die("Cannot execute sql: " . mysqli_error($con));

				while ($row = mysqli_fetch_assoc($result)) 
				{
					$eventid = $row['category_id'];
					$nama = $row['Name'];
					$kota = $row['Quota'];

					echo "
						<tbody>
							<tr>
								<td>$eventid</td>
								<td>$nama</td>
								<td>$kota</td>
						</tr>
						</tbody>";
				}

				echo "</table>";
			?>
			</div>
		</div>
	</div>

	<script>
	function showPopup(id) {
		document.getElementById(id).style.display = 'block';
	}

	function closePopup() {
		var popups = document.getElementsByClassName('popup');
		for (var i = 0; i < popups.length; i++) {
			popups[i].style.display = 'none';
		}
	}
	
	function BulletAdd() {
		window.location.href = "add_bullet.php";
	}
	
	function BlitzAdd() {
		window.location.href = "add_blitz.php";
	}
	
	function RapidAdd() {
		window.location.href = "add_rapid.php";
	}
	
	function BulletRemove() {
		window.location.href = "delete_bullet.php";
	}
	
	function BlitzRemove() {
		window.location.href = "delete_blitz.php";
	}
	
	function RapidRemove() {
		window.location.href = "delete_rapid.php";
	}
	function AdminRemove() {
		window.location.href = "delete_userinfo.php";
	}
	function AdminSearch() {
		window.location.href = "search_userinfo.php";
	}
	function CategoryAdd() {
		window.location.href = "add_category.php";	
	}
	function CategoryRemove() {
		window.location.href = "delete_category.php";	
	}
	function ViewHome() {
		window.location.href = "landing_page.php";
	}
	function logout() {
    window.location.href = "logout.php";
	}
	</script>

</body>
</html>