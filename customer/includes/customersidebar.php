<?php
session_start();

if (!isset($_SESSION['name'])) 
{
    header('Location: ../loginorregiter/index.php');
    exit;
}
// Data Configuration
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "eatlemou";

// Connect to the database
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
?>

<div class="sidebar">
    <div class="companyName">
        <a href="#" class="logo"><span>Eat Le Mou</span>.Co</a>
    </div>

    <div class="sidebar-menu">
        <ul>
            <li><a href="customerpanel.php" class="dasOption">Dashboard</a></li>
            <li><a href="voucher.php" class="options">My Voucher</a></li>
            <li><a href="order.php" class="options">Order History</a></li>
            <li><a href="booking.php" class="options">Reservation</a></li>
            <li><a href="payment_history.php" class="options">Payment</a></li>
            <li><a href="menu.php" class="options">Menu</a></li>
        </ul>
    </div>
</div>

<div class = "header">
    <h2>Dashboard</h2>

    <div class="user-wrapper">
        <a href="../loginorregister/logout.php" class="icon"><img src="../image/user.png" width="10%" height="10%" alt=""></a> 
        <div>
            <?php
            // Fetch admin's name and role using u_id
            if(isset($_SESSION['u_id'])) {
                $u_id = $_SESSION['u_id'];

                // Fetch specific user's name and role
                $stmt = $conn->prepare("SELECT name, role FROM users WHERE u_id = ?");
                $stmt->bind_param("i", $u_id);
                $stmt->execute();
                $result = $stmt->get_result();

                if ($result->num_rows > 0) {
                    $row = $result->fetch_assoc();
                    $name = $row['name'];
                    $role = $row['role'];

                    echo "<h4>$name</h4>";
                    if ($role == 'CUS') {
                        echo "<h5>Customer</h5>";
                    }
                } else {
                    echo "User not found.";
                }

                $stmt->close();
            } else {
                echo "Session not set.";
            }
            ?>
        </div>
    </div>
</div>
