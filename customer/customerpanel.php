<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Customer Panel</title>
    <link rel="stylesheet" href="../style/customerstyle.css">
</head>

<body>
<?php include('includes/customersidebar.php'); ?>
    <div class="main-content">
        <div class="card-wrapper">
    
            <!--Show profile-->
            <div class="profile">
                <div class="profile-header">
                    <h1>User Profile</h1>
                </div>
                <div class="profile-body">
                    <?php
                        // Fetch u_id from session
                        if(isset($_SESSION['u_id'])) {
                            $u_id = $_SESSION['u_id'];

                            // Fetch specific user's name and role
                            $stmt = $conn->prepare("SELECT name, dob, phoneno, email FROM users WHERE u_id = ?");
                            $stmt->bind_param("i", $u_id);
                            $stmt->execute();
                            $result = $stmt->get_result();

                            if ($result->num_rows > 0) {
                                $row = $result->fetch_assoc();
                                $name = $row['name'];
                                $dob = $row['dob'];
                                $phoneno = $row['phoneno'];
                                $email = $row['email'];
                                
                                echo "<table>"; 
                                echo "<tr>";
                                echo "<td>Name: $name</td>";
                                echo "</tr>";
                                echo "<tr>";
                                echo "<td>Date Of Birth: $dob</td>";
                                echo "</tr>";
                                echo "<tr>";
                                echo "<td>Contact Number: $phoneno</td>";
                                echo "</tr>";
                                echo "<tr>";
                                echo "<td>Email: $email</td>";
                                echo "</tr>";
                                echo "</table>";
                            } else {
                                echo "User not found.";
                            }

                            $stmt->close();
                        } else {
                            echo "Session not set.";
                        }      
                        // Close the database connection
                        $conn->close();     
                    ?>
                </div>
            </div>
        </div>
    </div>

</body>
</html>