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

// define variables to empty values  
$nameErr = $icnoErr = $dobErr = $phoneErr = $emailErr = $usernameErr = $passwordErr = $bankcardErr = "";  
$name = $icno = $dob = $phone = $email = $username = $password = $bankcard = "";  
  
//Login's fields validation  
if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['submit']) && $_POST['submit'] == 'Register')
{  
     //Name Validation  
     if (empty(trim($_POST["name"]))) {  
            $nameErr = "Name is required";  
     } 
     else {  
        $name = input_data($_POST["name"]);  
            // check if name only contains letters and whitespace  
                if (!preg_match("/^[a-zA-Z ]*$/",$name)) {  
                 $nameErr = "Only alphabets and white space are allowed";  
                }  
     }  
        
     //IC Number Validation  
     if (empty(trim($_POST["icno"]))) {  
                $icnoErr = "IC Number is required";  
     } 
     else {  
        $icno = input_data($_POST["icno"]);  
        // check if icno is well-formed  
        if (!preg_match ("/^[0-9]*$/", $icno) ) {  
            $icnoErr = "Only numeric value is allowed.";  
            }  
        //check icno length should not be less and greator than 12  
        if (strlen ($icno) != 12) {  
            $icnoErr = "IC Number must contain 12 digits.";  
            }  
     }  
        
     //Date of Birth Validation  
     if (empty(trim($_POST["dob"]))) {  
                $dobErr = "Date of Birth is required";  
     } else {  
                $dob = input_data($_POST["dob"]);  
     }  
        
    //Phone Number Validation  
    if (empty(trim($_POST["phone"]))) {  
        $phoneErr = "Phone no is required";  
    } else {  
        $phone = input_data($_POST["phone"]);  
        // check if phone no is well-formed  
        if (!preg_match ("/^[0-9]*$/", $phone) ) {  
            $phoneErr = "Only numeric value is allowed.";  
            }  
        //check mobile no length should not be less and greator than 10  
        if (strlen ($phone) != 10 && strlen ($phone) != 11){  
            $phoneErr = "Phone no. must contain 10-11 digits.";  
            }  
    }  
      
    //Email Validation  
    if (empty(trim($_POST["email"]))) {  
            $emailErr = "Email is required";  
    } else {  
            $email = input_data($_POST["email"]);  
            // check that the e-mail address is well-formed  
            if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {  
                $emailErr = "Invalid email format";  
            }  
    }  
       
    //Username Validation
    if (empty(trim($_POST["username"]))) {  
        $usernameErr = "Username is required";  
    } else {  
        $username = input_data($_POST["username"]);  
    }

    //Password Validation
    if (empty(trim($_POST["password"]))) {  
        $passwordErr = "Password is required";  
    } else {  
        $password = input_data($_POST["password"]);  
        if (strlen ($password) < 8 || strlen ($password) > 12){  
            $passwordErr = "Password must set between 8-12 character.";  
            }  
    }

    //Bank Card Validation
    if (empty(trim($_POST["bankcard"]))) {  
        $bankcardErr = "Bank Card is required";  
    } else {  
        $bankcard = input_data($_POST["bankcard"]);  
        if (!preg_match ("/^[0-9]*$/", $bankcard) ) {  
            $bankcardErr = "Only numeric value is allowed.";  
            }  
        //check mobile no length should not be less and greator than 10  
        if (strlen ($bankcard) != 16) {  
            $bankcardErr = "Bankcard must contain 16 digits.";  
            }
    }

   // Check if there are any errors
   if (empty($nameErr) && empty($icnoErr) && empty($dobErr) && empty($phoneErr) && empty($emailErr) && empty($usernameErr) && empty($passwordErr) && empty($bankcardErr)) {
        // Retrieve
        $sql = "SELECT icno FROM users";
        $result = $conn->query($sql);

        if ($result->num_rows > 0) {
            while($row = $result->fetch_assoc()) {
                if ($icno == $row["icno"]) {
                    $icnoErr = "IC Number already exists";
                }
            }
        }
    }
}  

function input_data($data) {  
  $data = trim($data);  
  $data = stripslashes($data);  
  $data = htmlspecialchars($data);  
  return $data;  
}  
?>