<?php
    //session_start();
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
  
    // Initialize error variables
    $noguesterror = $dateerror = $timeerror = $reservetypeerror = $reservebrancherror = "";
    $noguest = $date = $time = $reservetype = $message = $reservebranch = $remark = "";

    // Retrieve user ID from session
    if(isset($_SESSION['u_id'])) {
        $customer_id = $_SESSION['u_id'];
    }

    //Create
    if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['submit']) && $_POST['submit'] == 'Reserve'){
        //Validate the number of guest
        if (empty(trim($_POST["guests"]))) {
            $noguesterror = "Number of guests is required";
        } 
        else {
            $noguest = input_data($_POST["guests"]);    
            if (!preg_match ("/^[0-9]*$/", $noguest) ) {  
                $noguesterror = "Only numeric value is allowed.";  
                }
            else{
                if ($noguest < 1) {  
                    $noguesterror = "Minimum number of guests is 1";  
                    } 
            }
        }

        //Validate the reservation date
        if (empty($_POST["reservationDate"])) {
            $dateerror = "Reservation date is required";
        } 
        else {
            $date = input_data($_POST["reservationDate"]);
        }

        //Validate the reservation time
        if (empty($_POST["reservationTime"])) {
            $timeerror = "Reservation time is required";
        } 
        else {
            $time = input_data($_POST["reservationTime"]);
        }

        //Validate the reservation type
        if (empty($_POST["type"])) 
        {
        $reservetypeerror = "Reservation type is required";
        } else {
        $reservetype = input_data($_POST["type"]);
        }

        $remark = input_data($_POST["remark"]);

        //Validate the reservation branch
        if (empty($_POST["branch"])) 
        {
        $reservebrancherror = "Reservation branch is required";
        } else {
        $reservebranch = input_data($_POST["branch"]);
        }

        // Insert data into the database
        if (empty($noguesterror) && empty($dateerror) && empty($timeerror) && empty($reservetypeerror) && empty($reservebrancherror)) 
        {   
            $sql = $conn->prepare("INSERT INTO booking (c_id, no_of_guest, bookdate, booktime, booktype, bookbranch, note) VALUES (?, ?, ?, ?, ?, ?, ?)");
            $sql->bind_param("iisssss", $customer_id, $noguest, $date, $time, $reservetype, $reservebranch, $remark);
            
            if ($sql->execute()) {
                // $message = "Reservation successful!";
                echo '<script>alert("Reservation successful!");</script>';
            } else {
                $message = "Error: " . $sql->error;
            }
        }
    }

    function input_data($data) {  
        $data = trim($data);  
        $data = stripslashes($data);  
        $data = htmlspecialchars($data);  
        return $data;  
    }  

	$conn->close();
?>