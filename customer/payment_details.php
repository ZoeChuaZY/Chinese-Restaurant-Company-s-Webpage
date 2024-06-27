<!DOCTYPE html>
<html>
<head>
<title>
Payment Details
</title>

<link rel="stylesheet" href="../style/customerstyle.css">
</head>
<body>
<?php include('includes/customersidebar.php'); ?>

<div class="CRUD">
	<div class="title">
		<h1>Payment Details</h1><br>
	</div>
	<div class="display">

    <?php
        // Check if the user is logged in
        if (!isset($_SESSION['name'])) {
            header('Location: ../loginorregiter/index.php');
            exit;
        }

        // Check if the order ID is set in the session
        if (!isset($_SESSION['o_id'])) {
            echo "Order ID not found!";
            exit;
        }

        // Database configuration
        $dbHost = "localhost";
        $dbUsername = "root";
        $dbPassword = "";  
        $dbName = "eatlemou";

        // Create database connection
        $conn = new mysqli($dbHost, $dbUsername, $dbPassword, $dbName);

        // Check if the connection was successful
        if ($conn->connect_error) {
            die("Connection failed: " . $conn->connect_error);
        }

        $customer_id = $_SESSION['u_id'];
        $total = $_SESSION['total_price'];  

        if(isset($_GET['payment_id'])) {
            $payment_id = $_GET['payment_id'];

            // Retrieve orders and their corresponding order details for the specific customer
            $sql = "SELECT o.o_id, o.total, od.f_id, od.quantity, m.foodname, m.price
                    FROM payment p
                    JOIN orders o ON p.o_id = o.o_id
                    JOIN orderdetails od ON o.o_id = od.o_id
                    JOIN menu m ON od.f_id = m.f_id
                    WHERE p.payment_id = $payment_id";
            $result = $conn->query($sql);

            //Display the payment details
            if ($result->num_rows > 0) {
                echo "<table><tr><th>Food Name</th><th>Quantity</th><th>Price</th></tr>";
                // output data of each row
                while($row = $result->fetch_assoc()) {
                    echo "<tr><td>".$row["foodname"]."</td><td>".$row["quantity"]."</td><td>".$row["price"]."</td></tr>";
                }
                // Display the total price
                echo "<tr><td colspan='2'>Total</td><td>".$total."</td></tr>";
                echo "</table>";
            } else {
                echo "No payment details!";
            }

            
        }
        else {
            echo "Payment ID not found!";
        }

        // Close database connection
        $conn->close();
    ?>
</div>
</body>
</html>

