<?php
session_start();

if (isset($_SESSION['name']) && isset($_SESSION['role']))
{
    if($_SESSION['role'] == 'ADM')
    {
        header('Location: ../admin/adminpanel.php');
        exit;
    }
    else if($_SESSION['role'] == 'CUS')
    {
        header('Location: ../customer/customerpanel.php');
        exit;
    }
    else
    {
        header('Location: index.php');
        exit;
    }
}
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

$message = "";

// Verify user's login
if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['submit']) && $_POST['submit'] == 'Sign In')
{
    $username = $_POST["username"];
    $password = $_POST["password"];

    $stmt = $conn->prepare("SELECT * FROM users WHERE username = ? AND password = ?");
    $stmt->bind_param("ss", $username, $password);
    $stmt->execute();
    $result = $stmt->get_result();

    if ($result->num_rows > 0) 
    {
        $row = $result->fetch_assoc();
        $role = $row['role'];
        $name = $row['name'];
        $u_id = $row['u_id'];

        $_SESSION['u_id'] = $u_id; // Storing u_id in session

        if($role == 'ADM')
        {
            $_SESSION['name'] = $name;
            $_SESSION['role'] = $role;
            header("Location: ../admin/adminpanel.php");
            exit;
        }
        else
        {
            $_SESSION['name'] = $name;
            $_SESSION['role'] = $role;
            header("Location: ../customer/customerpanel.php");
            exit;
        } 
        $stmt->close();
    }
    else 
    {
        $message = "Invalid username or password";
        header("Location: index.php?message=".urlencode($message));
        exit;
    }
}

// Close the database connection
$conn->close();
?>