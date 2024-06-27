<?php
$nameErr = $phonenoErr = $emailErr = $enquiryErr = $branchnameErr = $detailsErr = "";
$name = $phoneno = $email = $enquiry = $branchname = $details = "";

if($_SERVER["REQUEST_METHOD"] == "POST"){
    //Name Validation
    if(empty(($_POST['name'])))
    {
        $nameErr = "Name is required!";
    } else{
        $name = input_data($_POST["name"]);
    }

    //Phone Number Validation  
    if (empty(($_POST["phoneno"]))) {  
        $phonenoErr = "Contact No. is required!";  
    } else{  
        $phoneno = input_data($_POST["phoneno"]);  
        // check if phone no is well-formed  
        if (!preg_match ("/^[0-9]*$/", $phoneno) ) {  
        $phonenoErr = "Only numeric value is allowed!";  
        }  
    //check mobile no length should not be less and greator than 10  
    if (strlen ($phoneno) != 10) {  
        $phonenoErr = "Phone no. must contain 10 digits!";  
        }  
    } 
    
    //Email Validation   
    if (empty(($_POST["email"]))) {  
        $emailErr = "Email is required!";  
    } else {  
        $email = input_data($_POST["email"]);  
        // check that the e-mail address is well-formed  
        if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {  
            $emailErr = "Invalid email format!";  
        }  
    }

    // Types of enquiries Validation  
    if ($_POST['enquiry'] == "option") {  
        $enquiryErr = "Please select type of your enquiry!";  
    } else {  
        $enquiry = input_data($_POST['enquiry']);  
    }

    // Types of branch Validation  
    if ($_POST['branchname'] == "option") {  
        $branchnameErr = "Please select a branch!";  
    } else {  
        $branchname = input_data($_POST['branchname']);  
    }

    //Details Validation  
    if (empty(($_POST["details"]))) 
    {  
            $detailsErr = "Details are required!";  
    } else 
    {  
            $details = input_data($_POST["details"]);  
    }
    
}

function input_data($data) {  
    $data = trim($data);  
    $data = stripslashes($data);  
    $data = htmlspecialchars($data);  
    return $data;  
} 
?>