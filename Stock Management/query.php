<?php
include("connection.php");


?>

<!DOCTYPE html>
<html>


<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Kiosk Catalogue</title>
	<link rel="stylesheet" href="style.css">
	<script src="script.js"></script>
</head>


<body onload="loadDBPage()">

	<nav class="top_nav">
    <div style="margin-left: 5%;"><img src="logo.svg" alt="The Big 4" height="100vh" width="100vh"></div>
    <div id="username" style="display: flex; align-items: center;"><p style="text-align:center;">Welcome To The Big 4 Kiosk System</p></div>
    <div style=" margin-right: 5%; margin-top: auto; margin-bottom: auto; display:flex; align-items:center;" class="datetime show"></div>
    <div style=" margin-right: 5%; margin-top: auto; margin-bottom: auto; display:flex; align-items:center;" ><form action="logout.php"><button type="submit" value="Add" id="btn" class="small_button remove"><img src="exit.png" height="20px" width="20px">
        </button></form><div class="datetime"></div></div>
	</nav>

<!----------------------------------"Custom Console Section"------------------------------------>

  <div id="checkout_console" class="custom_console">
      <div><h2 style="font-size:initial;">Checkout</h2><p onclick="toggleConsole('off','checkout_console')">x</p></div>

    <form action="checkout.php" method="post">
      <label><p>Parcel</p></label>
        <input type="number" id="barcode" name="barcode1">
        </form>

        <form action="checkout.php" method="post">
      <label><p>Food</p></label>
      <input type="number" id="barcode" name="barcode2">
      </form>

      <form action="checkout.php" method="post">
      <label><p>Drink</p></label>
      <input type="number"  id="barcode" name="barcode3">
      </form>

      <button id="btn" type="submit" name="submit">Submit</button>

    </form>
  </div>

  <div id="addParcel_console" class="custom_console">
    <div><h2 style="font-size:initial;">Add Parcel</h2><p onclick="toggleConsole('off','addParcel_console')">x</p></div>
    <form class="login_box" method="post" action="addParcel.php">
      <input type="number" name="barcode" placeholder="Barcode" required><br>
      <input type="text" name="rec_Name" placeholder="Receiver Name" required><br>
      <input type="text" name="send_Name" placeholder="Sender Name"><br>
      <input type="text" name="cour" placeholder="Courier Type"><br>
      <input type="number" name="price" placeholder="Price"><br>
      <input type="date" name="date_rcv" placeholder="Date Received"><br>
      <input type="submit" name="Enter" value="enter" id="btn">
    </form>
  </div>

  <div id="addFood_console" class="custom_console">
    <div><h2 style="font-size:initial;">Add Food</h2><p onclick="toggleConsole('off','addFood_console')">x</p></div>
    <form class="login_box" method="post" action="addFoodStock.php">
    <input type="number" name="barcode" placeholder="Barcode" required><br>
      <input type="text" name="item_Name" placeholder="Item Name" required><br>
      <input type="number" name="quantity" placeholder="Quantity"><br>
      <input type="submit" name="Enter" value="enter" id="btn">
    </form> 
  </div>

  <div id="addDrink_console" class="custom_console">
    <div><h2 style="font-size:initial;">Add Drink</h2><p onclick="toggleConsole('off','addDrink_console')">x</p>
    </div>
    <form class="login_box" method="post" action="addDrinkStock.php">
      <input type="number" name="barcode" placeholder="Barcode" required><br>
      <input type="text" name="item_Name" placeholder="Item Name" required><br>
      <input type="number" name="quantity" placeholder="Quantity"><br>
      <input type="submit" name="Enter" value="enter" id="btn">
    </form>
  </div>

  <div id="removeParcel_console" class="custom_console">
    <div><h2 style="font-size:initial;">Remove Parcel</h2><p onclick="toggleConsole('off','removeParcel_console')">x</p></div>
    <form class="login_box" method="post" action="deleteParcel.php">
      <input type="number" name="barcode" placeholder="Barcode" required><br>
      <input type="submit" name="Enter" value="Delete" id="btn">
    </form>
  </div>

  <div id="removeFood_console" class="custom_console">
    <div><h2 style="font-size:initial;">Remove Food</h2><p onclick="toggleConsole('off','removeFood_console')">x</p></div>
    <form class="login_box" method="post" action="deleteFoodStock.php">
      <input type="number" name="barcode" placeholder="Barcode" required><br>
      <input type="submit" name="Enter" value="Delete" id="btn">
    </form>
  </div>

  <div id="removeDrink_console" class="custom_console">
    <div><h2 style="font-size:initial;">Remove Drink</h2><p onclick="toggleConsole('off','removeDrink_console')">x</p></div>
    <form class="login_box" method="post" action="deleteDrinkStock.php">
      <input type="number" name="barcode" placeholder="Barcode" required><br>
      <input type="submit" name="Enter" value="Delete" id="btn">
    </form>
  </div>

  <div id="cover_console"></div>
<!----------------------------------"Custom Console Page"------------------------------------>
<!----------------------------------"Catalogue Page"------------------------------------>
	<div class="main_div">
		<div id="catalogue" class="sec_div show">
      <!--tabs-->
      <div class="tab" style="display:flex; justify-content: space-between;">
        <div>
          <button class="tablinks" onclick="openTab(event, 'tab_parcel_1')">Parcel</button>
          <button class="tablinks" onclick="openTab(event, 'tab_food_1')">Food</button>
          <button class="tablinks" onclick="openTab(event, 'tab_drink_1')">Drink</button>
        </div>
        <div>
          <button style="margin-bottom:0px;" class="tablinks" id="btn" onclick="toggleConsole('on','checkout_console')">Checkout</button>
          <button style="margin-bottom:0px;" class="tablinks" id="btn" onclick="toggleStock()">Stock</button>
        </div>
      </div>

      <!-- parcel area -->
      <div id="tab_parcel_1" class="tabcontent show a">
        <h2>Parcel</h2>
        <table>
          <tr>
            <th>Barcode Number</th>
            <th>Reciever Number</th>
            <th>Sender Name</th>
            <th>Courier Type</th>
            <th>Price</th>
            <th>Date Recieved</th>
          </tr>
    
          <?php
          //parcel area
          $parc_query = "Select * from parcel";
          $result = $conn->query($parc_query);

          // Check for errors in the SQL SELECT query execution
          if (!$result) {
            echo "Error: " . $parc_query . "<br>" . $conn->error;
          }

          // Output the results of the SQL SELECT query
          if ($result->num_rows > 0) {
            while($row = $result->fetch_assoc()) {
              echo " <tr>";
              echo "<td>" . $row['Barcode Number'] . "</td>";
              echo "<td>" . $row['Receiver Name'] . "</td>";
              echo "<td>" . $row['Sender Name'] . "</td>";
              echo "<td>" . $row['Courier Type'] . "</td>";
              echo "<td>" . $row['Price'] . "</td>";
              echo "<td>" . $row['Date Received'] . "</td>";
                  
              echo "</tr>";
            }
          } else {
            echo "<p>0 results</p>";
          }
                
          ?>
                
          </table>
      </div>

      <!-- food area -->
      <div id="tab_food_1" class="tabcontent a">
        <h2>Food</h2>
        <table>
          <tr>
            <th>Barcode Number</th>
            <th>Item Name</th>
            <th>Expiry Date</th>
            <th>Price</th>
            <th>Volume</th>
          </tr>

          <?php
          //food area
          $food_query = "Select * from food";
          $result = $conn->query($food_query);

          // Check for errors in the SQL SELECT query execution
          if (!$result) {
            echo "Error: " . $food_query . "<br>" . $conn->error;
          }

          // Output the results of the SQL SELECT query
          if ($result->num_rows > 0) {
            while($row = $result->fetch_assoc()) {
              echo " <tr>";
              echo "<td>" . $row['Barcode Number'] . "</td>";
              echo "<td>" . $row['Item Name'] . "</td>";
              echo "<td>" . $row['Expiry Date'] . "</td>";
              echo "<td>" . $row['Price'] . "</td>";
              echo "<td>" . $row['Net Weight'] . "</td>";
              
              
              echo "</tr>";
            }
          } else {
              echo "<p>0 results</p>";
          }
            
          ?>
    
        </table>
      </div>

      <!-- drink area -->
      <div id="tab_drink_1" class="tabcontent a">
        <h2>Drink</h2>
        <table>
          <tr>
            <th>Barcode Number</th>
            <th>Item Name</th>
            <th>Expiry Date</th>
            <th>Price</th>
            <th>Volume</th>
          </tr>
  
          <?php
            //drink area
            $drink_query = "Select * from drink";
            $result = $conn->query($drink_query);

          // Check for errors in the SQL SELECT query execution
          if (!$result) {
            echo "Error: " . $drink_query . "<br>" . $conn->error;
          }

          // Output the results of the SQL SELECT query
          if ($result->num_rows > 0) {
            while($row = $result->fetch_assoc()) {
              echo " <tr>";
              echo "<td>" . $row['Barcode Number'] . "</td>";
              echo "<td>" . $row['Item Name'] . "</td>";
              echo "<td>" . $row['Expiry Date'] . "</td>";
              echo "<td>" . $row['Price'] . "</td>";
              echo "<td>" . $row['Volume'] . "</td>";
             
              
              echo "</tr>";
            }
          } else {
            echo "<p>0 results</p>";
          }
            
          ?>
  
        </table>
      </div>
    </div>

<!----------------------------------"Catalogue Page"------------------------------------>
<!----------------------------------"Stock Page"------------------------------------>
    <div id="stock" class="sec_div">
      <div class="tab" style="display:flex; justify-content: space-between;">
        <div>
          <button class="tablinks b" onclick="openTab(event, 'tab_food')">Food</button>
          <button class="tablinks b" onclick="openTab(event, 'tab_drink')">Drink</button>
        </div>
        <div>
          <button style="margin-bottom :0px;" class="tablinks" id="btn" onclick="toggleStock()">Catalogue</button>
        </div>
      </div>

      <!-- food area -->
    <div id="tab_food" class="tabcontent">
          <div class="inside_tab">
        <h2>Food</h2>
                <div class="inside_tab">
        <button id="btn" class="small_button" onclick="toggleConsole('on','addFood_console')"><img src="add.png" height="20px" width="20px">
        </button>
       <button id="btn" class="small_button remove" onclick="toggleConsole('on','removeFood_console')"><img src="remove.png" height="20px" width="20px">
        </button>
      </div>
    </div>
      <table>
      <tr>
      <th>Barcode Number</th>
    <th>Item Name</th>
    <th>Quantity</th>
 
  </tr>
  <!-- display stock for food -->
  <?php
  //food area
  $food_query = "Select * from food_stock";
  $result = $conn->query($food_query);

// Check for errors in the SQL SELECT query execution
if (!$result) {
  echo "Error: " . $food_query . "<br>" . $conn->error;
}

// Output the results of the SQL SELECT query
if ($result->num_rows > 0) {
  while($row = $result->fetch_assoc()) {
    echo " <tr>";
    echo "<td>" . $row['Barcode Number'] . "</td>";
    echo "<td>" . $row['Item Name'] . "</td>";
    echo "<td>" . $row['Quantity'] . "</td>";
    
    echo "</tr>";
  }
} else {
  echo "<p>0 results</p>";
}
  
  ?>
  
</table>
    
    </div>

       <!-- Drink tab -->
    <div id="tab_drink" class="tabcontent">
      <div class="inside_tab">
      <h2>Drink</h2>
      <div class="inside_tab">
        <button id="btn" class="small_button" onclick="toggleConsole('on','addDrink_console')"><img src="add.png" height="20px" width="20px">
        </button>
        <button id="btn" class="small_button remove" onclick="toggleConsole('on','removeDrink_console')"><img src="remove.png" height="20px" width="20px">
        </button>
      </div>
    </div>
      
      <table>
      <tr>
    <th>Barcode Number</th>
    <th>Item Name</th>
    <th>Quantity</th>
 
    

  </tr>
  
  <?php
  // display stock drink area
  $drink_query = "Select * from drink_stock";
  $result = $conn->query($drink_query);

// Check for errors in the SQL SELECT query execution
if (!$result) {
  echo "Error: " . $drink_query . "<br>" . $conn->error;
}

// Output the results of the SQL SELECT query
if ($result->num_rows > 0) {
  while($row = $result->fetch_assoc()) {
    echo " <tr>";
    echo "<td>" . $row['Barcode Number'] . "</td>";
    echo "<td>" . $row['Item Name'] . "</td>";
    echo "<td>" . $row['Quantity'] . "</td>";
   
    
    echo "</tr>";
  }
} else {
  echo "<p>0 results</p>";
}
  
  ?>
  
</table>
    </div>
    </div>
<!----------------------------------"Stock Page"------------------------------------>
  </div>
</body>
</html>