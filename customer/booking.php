<!DOCTYPE html>
<html>
<head>
<title>
Reservation
</title>

<link rel="stylesheet" href="../style/customerstyle.css">
</head>
<body>
<?php include('includes/customersidebar.php'); ?>
<?php include('bookingvalidation.php');?>


<div class="CRUD">
	<div class="title">
		<h1>Reservation</h1><br>
	</div>
	<div class="display">
	<?php
	//Database connection details
	$servername = "localhost";
	$username = "root";
	$password = "";
	$dbname = "eatlemou";

	//create connection
	$conn = new mysqli($servername, $username, $password, $dbname);

	//check connection
	if($conn ->connect_error)
	{
		die("Connection failed: " . $conn ->connect_error);
	}

	$customer_id = $_SESSION['u_id'];

	// Retrieve branch information for the specific customer
	$sql = "SELECT * FROM booking WHERE c_id = $customer_id";
	$result = $conn->query($sql);

	// Display the data in a table
	if ($result->num_rows > 0) {
	echo "<table>";
	echo "<tr><th>Booking ID</th><th>Num of Pax.</th><th>Booking Date</th><th>Booking Time</th><th>Branch</th></tr>";
	//Initiate a loop, It fetches each row as an associative array and assigns it to the variable $row.
	while($row = $result->fetch_assoc()) {
		echo "<tr>";
		echo "<td>". $row["book_id"] . "</td>";
		echo "<td>" . $row["no_of_guest"] . "</td>"; 
		echo "<td>" . $row["bookdate"] . "</td>"; 
		echo "<td>" . $row["booktime"] . "</td>"; 
		echo "<td>" . $row["bookbranch"] . "</td>"; 
		echo "</tr>";
	}
	echo "</table>";
	} else {
	echo "No booking information found!";
	}
	?>
	</div>
    <div class ="container">

		<form method="post">
			Number of Guests:
			<br>
			<input type="text" name="guests"><br>
			<span class="error"><?php echo $noguesterror; ?></span><br>
			<label for="reservationDate">Select Date:</label>
			<input type="date" id="reservationDate" name="reservationDate" min="<?php echo date('Y-m-d'); ?>">
			<br>
			<span class="error"><?php echo $dateerror; ?></span><br>
			<label for="reservationTime">Select Time:</label>
			<input type="time" id="reservationTime" name="reservationTime"><br>
			<span class="error"><?php echo $timeerror; ?></span><br>
			Reservation type:
			<br>
			<select class="dropbox" id="type" name="type">
			<option value = "" >Please select a reservation type</option>
			<option value = "Breakfast" >Breakfast</option>
			<option value = "Lunch" >Lunch</option>
			<option value = "Dinner" >Dinner</option>
			<option value = "Birthday/ Anniversary" >Birthday/ Anniversary</option>
			<option value = "Wedding" >Wedding</option>
			<option value = "Other" >Other</option>
			</select>
			<br>
			<span class="error"><?php echo $reservetypeerror; ?></span><br>
			<br>
			Reservation branch:
			<br>
			<select class="dropbox" id="branch" name="branch">
			<option value = "" >Please select a reservation branch</option>
			<option value = "IOI CITY MALL" >IOI CITY MALL</option>
			<option value = "SUNWAY PYRAMID" >SUNWAY PYRAMID</option>
			<option value = "MID VALLEY MEGAMALL" >MID VALLEY MEGAMALL</option>
			<option value = "AEON SEREMBAN 2" >AEON SEREMBAN 2</option>
			<option value = "QUEENBAY MALL" >QUEENBAY MALL</option>
			</select>
			<br>
			<span class="error"><?php echo $reservebrancherror; ?></span><br>
			<br>
			Notes (Optional):
			<br>
			<textarea id="remark" name="remark" ros="25" cols="51"></textarea><br>
			<br>
			<input class="button" type="submit" name="submit" value="Reserve">
		</form>
	</div>
</div>
</body>
</html>