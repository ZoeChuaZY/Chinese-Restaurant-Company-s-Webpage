<!DOCTYPE html>
<html>
<head>
<title>
My Voucher
</title>
<style>
    img{
        width: 60%;
        height: 30%;
    }
</style>
<link rel="stylesheet" href="../style/customerstyle.css">
</head>
<body>
<?php include('includes/customersidebar.php'); ?>
<?php include('bookingvalidation.php');?>



<div class="CRUD">
    <div class="title">
    <h1>My Voucher</h1><br>
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

        // Retrieve branch information for the specific customer when is_used is 0 and expiration date is not passed
        $sql = "SELECT * FROM vouchers WHERE customer_id = $customer_id AND is_used = 0 AND expiration_date >= NOW()";
        $result = $conn->query($sql);

        // Display the data in a table
        if ($result->num_rows > 0) {
        echo "<table>";
        echo "<tr><th>Voucher Code</th><th>Expire Date</th><th>Voucher</th></tr>";
        //Initiate a loop, It fetches each row as an associative array and assigns it to the variable $row.
        while($row = $result->fetch_assoc()) {
            echo "<tr>";
            echo "<td>". $row["voucher_code"] . "</td>";
            echo "<td>" . $row["expiration_date"] . "</td>"; 
            echo "<td><img src='../admin/" . $row["voucher_image"] . "' alt='Voucher Image'></td>"; 
            echo "</tr>";
        }
        echo "</table>";
        } else {
        echo "No voucher available!";
        }
        ?>
	</div>
</div>
</body>
</html>