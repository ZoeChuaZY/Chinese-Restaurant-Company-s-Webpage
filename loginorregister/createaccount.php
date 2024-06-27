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

// Initialize the message variable
$message = "";

// Add new user
if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['submit']) && $_POST['submit'] == 'Register' && $nameErr == "" && $icnoErr == "" && $dobErr == "" && $phoneErr == "" && $emailErr == "" && $usernameErr == "" && $passwordErr == "" && $bankcardErr == "") 
{
  $name = $_POST["name"];
  $icno = $_POST["icno"];
  $dob = $_POST["dob"];
  $phone = $_POST["phone"];
  $email = $_POST["email"];
  $username = $_POST["username"];
  $password = $_POST["password"];
  $bankcard = $_POST["bankcard"];

  $stmt = $conn->prepare("INSERT INTO users (name, icno, dob, phoneno, email, username, password, bankcard) VALUES (?, ?, ?, ?, ?, ?, ?, ?)");
  $stmt->bind_param("ssssssss", $name, $icno, $dob, $phone, $email, $username, $password, $bankcard);

  if ($stmt->execute()) 
  {
    // $message = "New account created successfully"; 
    echo '<script>alert("New account created successfully"); window.location = "index.php";</script>';
    
  } else {
    $message =  "Error: " . $sql . "<br>" . $stmt->error;
  }
  $stmt->close();
}
// Close the database connection
$conn->close();

?>