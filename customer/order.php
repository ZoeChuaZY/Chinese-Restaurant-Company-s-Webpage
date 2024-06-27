<!DOCTYPE html>
<html>
<head>
<title>
Order History
</title>
<link rel="stylesheet" href="../style/customerstyle.css">
<style>
    .order-status-pending {
        color: red;
        background-color: #f9d1cc; /* or any other color you prefer for pending status */
        padding: 2px 4px; 
    }

    .order-status-process {
        color: orange;
        background-color: #f9e8cc; /* or any other color you prefer for processing status */
        padding: 2px 4px; 
    }

    .order-status-completed {
        color: green;
        background-color: #cdf9cc; /* or any other color you prefer for completed status */
        padding: 2px 4px; 
    }

    .CRUD
    {
        font-weight: 700;
    }
</style>
</head>
<body>
<?php include('includes/customersidebar.php'); ?>


<div class="CRUD">
	<div class="title">
		<h1>Order History</h1><br>
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

    $customer_id = $_SESSION['u_id'];

    // Retrieve orders and their corresponding order details for the specific customer
    $sql = "SELECT o.o_id, o.total, o.order_status, od.f_id, od.quantity, m.foodname
            FROM orders o
            JOIN orderdetails od ON o.o_id = od.o_id
            JOIN menu m ON od.f_id = m.f_id
            WHERE o.c_id = $customer_id
            ORDER BY o.o_id";
    $result = $conn->query($sql);

    // Display the data in a table
    if ($result->num_rows > 0) {
        $current_order_id = null;
        echo "<table>";
        echo "<tr><th>Order ID</th><th>Total Amount</th><th>Order Status</th><th>Food Name</th><th>Quantity</th></tr>";
        // Iterate through the rows
        while ($row = $result->fetch_assoc()) {
            // If the current order ID is different from the previous one, start a new row
            if ($row['o_id'] !== $current_order_id) {
                echo "<tr>";
                echo "<td>" . $row["o_id"] . "</td>";
                echo "<td>" . $row["total"] . "</td>";
                echo "<td><span class='order-status-" . strtolower($row["order_status"]) . "'>" . $row["order_status"] . "</span></td>";
                echo "<td>" . $row["foodname"] . "</td>";
                echo "<td>" . $row["quantity"] . "</td>";
                echo "</tr>";
                $current_order_id = $row['o_id'];
            } else {
                // If it's the same order ID, just add the food name and quantity in the same row
                echo "<tr>";
                echo "<td></td>";
                echo "<td></td>";
                echo "<td></td>";
                echo "<td>" . $row["foodname"] . "</td>";
                echo "<td>" . $row["quantity"] . "</td>";
                echo "</tr>";
            }
        }
        echo "</table>";
    } else {
        echo "No order history found!";
    }

    // Close connection
    $conn->close();
    ?>
	</div>
</div>
</body>
</html>