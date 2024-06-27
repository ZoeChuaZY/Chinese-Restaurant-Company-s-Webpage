<?php
    // Start the session to access session variables
    session_start();

    if (!isset($_SESSION['name'])) 
    {
    header('Location: ../loginorregiter/index.php');
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

    $o_id = $_SESSION['o_id'];
    $total = $_SESSION['total_price'];
    $c_id = $_SESSION['u_id'];

    // Check if the confirm payment button is clicked
    if (isset($_SESSION['cart'])) 
    {
        //insert each item in the cart into order_items table
        foreach ($_SESSION['cart'] as $f_id => $quantity) {
            $query = "INSERT INTO orderdetails (o_id, f_id, quantity) VALUES (?, ?, ?)";

            // Prepare the statement
            $stmt = $conn->prepare($query);
                        
            // Bind parameters
            $stmt->bind_param("iii", $o_id, $f_id, $quantity);
            
            // Execute the statement
            $stmt->execute();
            
            // Check if execution was successful
            if ($stmt->affected_rows < 0) {
                // Handle insertion failure
                echo "Error inserting order detail for food ID: $f_id<br>";
            }
        }

        //Store the orderID, order total into the payment table
        $query = "INSERT INTO payment (c_id, o_id, total) VALUES (?, ?, ?)";
        $stmt = $conn->prepare($query);
        $stmt->bind_param("iid", $c_id, $o_id, $total);
        $stmt->execute();
        if ($stmt->affected_rows < 0) {
            // Handle insertion failure
            echo "Error inserting payment record for order ID: $o_id<br>";
        }
    }

    // Clear the cart after successful payment
    unset($_SESSION['cart']);

    // Display success message and redirect back to index.php
    echo "<script>alert('Payment is done. Your meal will be coming as fast as possible. Thank You.'); window.location.href = 'customerpanel.php';</script>";
?>
