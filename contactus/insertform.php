<?php
//Database connection details
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "eatlemou";

//create connection
$conn = new mysqli($servername, $username, $password, $dbname);

//check connection
if($conn ->connect_error){
    die("Connection failed: " . $conn ->connect_error);
}

if($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['submit']) && $_POST['submit'] == 'Submit' && $nameErr == "" && $phonenoErr == ""
&& $emailErr =="" && $enquiryErr == "" && $branchnameErr == "" && $detailsErr == "")
{
    $name = $_POST["name"];
    $phoneno = $_POST["phoneno"];
    $email = $_POST["email"];
    $enquiry = $_POST["enquiry"];
    $branchname = $_POST["branchname"];
    $details = $_POST["details"];

    $sql = "INSERT INTO feedback (name, phoneno, email, enquiry, branchname, details) VALUES
    ('$name', '$phoneno', '$email', '$enquiry', '$branchname', '$details')";

    if ($conn->query($sql) === TRUE) {
        // If the insertion is successful, use JavaScript to display the success message as an alert
        echo '<script>alert("Thank you for your love, support and feedback! Your feedback has been sent to us.");</script>';
    } else {
        // If there's an error, use JavaScript to display the error message as an alert
        echo '<script>alert("Error: ' . $sql . '\n' . $conn->error . '");</script>';
    }
}

$conn->close();
?>
