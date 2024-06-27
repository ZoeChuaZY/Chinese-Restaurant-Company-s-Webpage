<!DOCTYPE html>
<html>
<head>
<title>
Payment History
</title>

<link rel="stylesheet" href="../style/customerstyle.css">
</head>
<body>
<?php include('includes/customersidebar.php'); ?>

<div class="CRUD">
	<div class="title">
		<h1>Payment History</h1><br>
	</div>
	<div class="display">
	<?php
    // Database connection details
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "eatlemou";

    // Create connection
    $conn = new mysqli($servername, $username, $password, $dbname);

    // Check connection
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

    $c_id = $_SESSION['u_id'];

	//display the payment history
	$sql = "SELECT * FROM payment WHERE c_id = $c_id ORDER BY payment_id DESC";
	$result = $conn->query($sql);

	if ($result->num_rows > 0) {
		echo "<table><tr><th>Payment ID</th><th>Order ID</th><th>Total</th></tr>";
		// output data of each row
		while($row = $result->fetch_assoc()) {
			echo "<tr><td><a href='payment_details.php?payment_id=".$row["payment_id"]."'>".$row["payment_id"]."</a></td><td>".$row["o_id"]."</td><td>".$row["total"]."</td></tr>";
		}
		echo "</table>";
	} else {
		echo "No payment history!";
	}

    // Close the database connection
    $conn->close();
	?>
</div>
</body>
</html>