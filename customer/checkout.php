<!DOCTYPE HTML>
<html>
<head>
    <title>Checkout</title>
    <link rel="stylesheet" href="../style/customerstyle.css">
    <style>
        #checkout {
            margin: 30px;
        }
    </style>
</head>
<body>

<?php include('includes/customersidebar.php');?>

<div class="main-content">
    <div class="card-wrapper">
        <div id="checkout">
            <?php
            // Check if the cart is set
            // Check if the cart is set
            if (isset($_SESSION['cart'])) {
                $total_price = 0;

                // Loop through each item in the cart to calculate total price
                foreach ($_SESSION['cart'] as $f_id => $quantity) {
                    $query = "SELECT * FROM menu WHERE f_id = $f_id";
                    $result = mysqli_query($conn, $query);

                    if($result){
                        //If query is successful then fetch the data
                        $row = mysqli_fetch_assoc($result);
                        //Get the food name and price
                        $food_name = $row['foodname'];
                        $food_price = $row['price'];

                        //calculate the subtotal for this item
                        $subtotal = $food_price * $quantity;

                        //Add the subtotal to the total price
                        $total_price += $subtotal;
                    }
                    else{
                        //if the query failed, display error message
                        echo "Error fetching food details for food ID: ".$f_id."<br>";
                    }
                }

                // Retrieve available vouchers for the user
                $voucher_query = "SELECT * FROM vouchers WHERE customer_id = $u_id AND is_used = 0 ORDER BY voucher_id ASC LIMIT 1";
                $voucher_result = mysqli_query($conn, $voucher_query);
                
                $voucher_code = "";

                // Check if the voucher is found
                if(mysqli_num_rows($voucher_result) > 0){
                    $voucher_row = mysqli_fetch_assoc($voucher_result);
                    $value = $voucher_row['value'];
                    $voucher_code = $voucher_row['voucher_code'];
                    $voucher_expiry = $voucher_row['expiration_date'];

                    // Check if the voucher is expired
                    if($voucher_expiry >= date("Y-m-d")){
                        // Calculate the discount based on the total price and voucher value
                        $discount = $total_price * ($value / 100);
                        // Apply the discount to the total price
                        $total_price -= $discount;
                        // Store the voucher code in the session
                        $_SESSION['voucher_code'] = $voucher_code;
                        $_SESSION['total_price'] = $total_price;
                    }
                }
                else{
                    $discount = 0;
                }

                // Display the table headers
                echo "<table border='1'>";
                echo "<tr>";
                echo "<th>Food Name</th>";
                echo "<th>Quantity</th>";
                echo "<th>Price</th>";
                echo "<th>Subtotal</th>";
                echo "</tr>";

                // Loop through each item in the cart again to display details
                foreach ($_SESSION['cart'] as $f_id => $quantity) {
                    $query = "SELECT * FROM menu WHERE f_id = $f_id";
                    $result = mysqli_query($conn, $query);

                    if($result){
                        //If query is successful then fetch the data
                        $row = mysqli_fetch_assoc($result);
                        //Get the food name and price
                        $food_name = $row['foodname'];
                        $food_price = $row['price'];

                        //calculate the subtotal for this item
                        $subtotal = $food_price * $quantity;

                        // Display food name, quantity, and price
                        echo "<tr>";
                        echo "<td>$food_name</td>";
                        echo "<td>$quantity</td>";
                        echo "<td>$food_price</td>";
                        echo "<td>$subtotal</td>";
                        echo "</tr>";
                    }
                    else{
                        //if the query failed, display error message
                        echo "Error fetching food details for food ID: ".$f_id."<br>";
                    }
                }

                // Display the row for the voucher discount with voucher code when available
                if($discount >= 0){
                    echo "<tr>";
                    echo "<td colspan='3'>Voucher Discount ($voucher_code)</td>";
                    echo "<td>-$discount</td>";
                    echo "</tr>";
                }
                else{
                    echo "<tr>";
                    echo "<td colspan='3'>No Voucher Applied</td>";
                    echo "<td>$discount</td>";
                    echo "</tr>";
                }

                // Display the row for the total price
                echo "<tr>";
                echo "<td colspan='3'>Total Price</td>";
                echo "<td>$total_price</td>";
                echo "</tr>";

                echo "</table>";

                // Button for confirming payment
                echo "<form method='post'>";
                echo "<input type='submit' name='confirm_payment' value='Confirm Payment'>";
                echo "</form>";
            }
            else{
                //if the cart is not set, display error message
                echo "Cart is empty";
            }

            if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['confirm_payment'])) {
                // Connect to the database
                $conn = mysqli_connect("localhost", "root", "", "eatlemou");

                // Check connection
                if (!$conn) {
                    die("Connection failed: " . mysqli_connect_error());
                }

                $u_id = $_SESSION['u_id'];
                //insert the order record
                $query = "INSERT INTO orders (c_id, total) VALUES ($u_id, $total_price)";
                $result = mysqli_query($conn, $query);
                $_SESSION['o_id'] = mysqli_insert_id($conn);

                //Update the voucher status to used
                $update_voucher_query = "UPDATE vouchers SET is_used = 1 WHERE voucher_code = '$voucher_code'";
                $update_voucher_result = mysqli_query($conn, $update_voucher_query);
                $_SESSION['total_price'] = $total_price;
                
                header('Location: process_payment.php'); 
                exit;
            }

            ?>
        </div>
    </div>
</div>
</body>
</html>