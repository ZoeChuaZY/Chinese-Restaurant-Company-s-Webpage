<?php
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

// Fetch outlets for Selangor state
$sql_selangor = "SELECT name, address, contactno FROM branches WHERE state = 'Selangor'";
$result_selangor = $conn->query($sql_selangor);

// Fetch outlets for Negeri Sembilan state
$sql_n9 = "SELECT name, address, contactno FROM branches WHERE state = 'Negeri Sembilan'";
$result_n9 = $conn->query($sql_n9);

// Fetch outlets for Negeri Sembilan state
$sql_penang = "SELECT name, address, contactno FROM branches WHERE state = 'Penang'";
$result_penang = $conn->query($sql_penang);


// Close the database connection
$conn->close();
?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>SContact Us</title>
        <style>
            *{
                margin: 0;
                box-sizing: border-box;
                font-family: "Poppins", sans-serif;
            }

            /*Contact Header*/ 
            .contact{
                padding-top: 11%;
            }
            .page-title{
                position: absolute;
                top: 10%;
                left: 0;
                width: 100vw;
                height: 60vh;
                background-image: url("../image/bg8.jpeg");
                background-repeat: no-repeat;
                background-size: cover;
                filter: blur(2px);
                z-index: -2;
            }

            .darkoverlay{
                position: absolute;
                top: 10%;
                left: 0;
                width: 100vw;
                height: 60vh;
                background-color: #00000080; 
                z-index: -1;
            }

            .contact h1{
                display: flex;
                align-items: center;
                justify-content: center;
                font-size: 10vh;
                font-family: mv boli;
                color: #ffffff;
                margin: 90px;
            }

            /*Restaurant Location*/
            .location
            {
                height: auto;
            }

            #section3{
                position: absolute;
                top: 100vh;
                right: 68vw;
            }   

            #section2{
                position: absolute;
                top: 100vh;
                right: 35vw;
            }

            #section1{
                position: absolute; 
                top: 100vh;
                right: 3vw;
            }

            .title {
                text-align: center; /* Center-align the content */
                margin-top: 10%;
                margin-left: 5%;
            }

            .title h2{
                font-size: 55px;
                font-family: mv boli;
                color: #080808;
            }

            .title p {
                font-size: 15px;
                letter-spacing: 2px;
                color: #636363;
                font-family: italic;
            }

            .contact .location .title-head h2{
                display: flex;
                align-items: center;
                justify-content: center;
                margin:50px;
                color: #801F17;
                text-decoration: underline;
            }

            .outlet{
                width: 400px;
                height: 200px;
                border-radius: 20px;
                display: flex;
                flex-direction: column;
                align-items: center;
                justify-content: center;
                position: relative;
                box-shadow: 0 0 8px #00000080; 
                background-color: #ffffff;
                cursor: pointer;
                margin-top: 50px;
            }

            .outlet h3{
                color: #3e628e;
            }

            .outlet p{
                margin: 3% 0%;
                text-align: center;
                width: 65%;
            }

            #section3 .outlet p{
                font-size: 20px;
                background color: #ffffff;
                font-family: italic;
            }

            /*Get In Touch*/
            .GetInTouch{
                width: 100vw;
                height: 105vh;
                background-image: url("../image/bg9.jpg");
                margin-top: 70%;
                display: flex;
                flex-direction: row;
                padding: 100px;
                gap: 150px;
            }

            .form-title{
                margin-left: 100px;
            }

            .form-title h2{
                text-align: center;
                font-size: 50px;
                font-family: mv boli;
                color: #dcab6f;
            }

            .form-title p{
                line-height: 1.7em;
                font-family: 'PT Sans', Helvetica, Arial, Lucida, sans-serif;
                font-size: 20px;
                text-align: justify;
                width: 300px;
                margin-top: 15px;
                margin-left: 15px;
                color: #636363;
            }

            .form-container{
                width: 46vw;
                height: 88vh;
                border-radius: 30px;
                display: flex;
                align-items: center;
                justify-content: center;
                position: relative;
                box-shadow: 0 0 8px #00000080; 
                background-color: #801F17;
                cursor: pointer;
                padding-top: 1%;
            }

            .contact-inputs{
                width: 300px;
                height: 7vh;
                border: none;
                outline: none;
                padding-left: 25px;
                color: #666;
                border-radius: 10px;
                margin-top: 25px;
                margin: 10px;
            }

            #email{
                width: 41vw;
            }
            
            .msg{
                width: 96%;
                height: 200px;
                border: none;
                outline: none;
                padding-left: 25px;
                font-weight: 500;
                color: #666;
                border-radius: 10px;
                margin: 10px;
                padding-top: 20px;
            }

            #submit{
                border-radius: 100px; /* Adjust roundness of the button */
                background-color: #ffffff; 
                border: none;
                color: #080808;
                text-align: center;
                padding: 10px 30px;
                cursor: pointer;
                font-size: 20px;
                margin-left: 80%;
            }

            #submit:hover{
                background-color: #dcab6f;
            }

            .error 
            {
                color: #ffffff;
                margin-left: 2%;
            }

            .enquiry-outlets {
                display: inline-flex;  /* Or inline-block for spacing between elements */
            }

            .name-phone{
                display: inline-flex;  /* Or inline-block for spacing between elements */
            }

        </style>
        <link rel="stylesheet" href="../style/generalstyle.css">

    </head>
    <body>
            <?php include('../includes/header.php'); ?>

        <div class="contact">
            <section>
                <h1> Contact Us </h1>
                <div class="page-title"></div>
                <div class="darkoverlay"></div>
            </section>

            <section>
                <div class="location">
                    <div class="title">
                        <h2>Outlet Locations</h2>
                        <br>
                        <p>Welcome to Eat Le Mou, where a memorable dining experience awaits you.</p>
                    </div>
                          
                    <div id="section1" class=contact-wrapper>
                        <div class="title-head">
                            <h2> Selangor </h2>
                        </div>
                        <?php
                        if ($result_selangor->num_rows > 0) {
                            while ($row = $result_selangor->fetch_assoc()) {
                                echo '<div class="outlet">';
                                echo '<h3>' . $row["name"] . '</h3>';
                                echo '<p>' . $row["address"] . '</p>';
                                echo '<p>Tel: +6' . $row["contactno"] . '</p>';
                                echo '</div>';
                            }
                        } else {
                            echo "0 results";
                        }
                        ?>  
                    </div>

                    <div id="section2" class=contact-wrapper>
                        <div class="title-head">
                            <h2> Negeri Sembilan </h2>
                        </div>
                        <?php
                        if ($result_n9->num_rows > 0) {
                            while ($row = $result_n9->fetch_assoc()) {
                                echo '<div class="outlet">';
                                echo '<h3>' . $row["name"] . '</h3>';
                                echo '<p>' . $row["address"] . '</p>';
                                echo '<p>Tel: +6' . $row["contactno"] . '</p>';
                                echo '</div>';
                            }
                        } else {
                            echo "0 results";
                        }
                        ?>  
                        
                        <div class="title-head">
                            <h2> Penang </h2>
                        </div>
                        <?php
                        if ($result_penang->num_rows > 0) {
                            while ($row = $result_penang->fetch_assoc()) {
                                echo '<div class="outlet">';
                                echo '<h3>' . $row["name"] . '</h3>';
                                echo '<p>' . $row["address"] . '</p>';
                                echo '<p>Tel: +6' . $row["contactno"] . '</p>';
                                echo '</div>';
                            }
                        } else {
                            echo "0 results";
                        }
                        ?>  
                    </div>

                    <div id="section3" class=contact-wrapper>
                        <div>
                            <img src="https://www.dintaifung.com.my/wp-content/uploads/2022/10/abt-img-1.png"></img>
                        </div>
                        <div class="title-head">
                            <h2>Hours Of Operation:</h2>
                        </div>
                        <div class="outlet">
                            <p>Mon - Fri : 9.00am - 9.30pm</p>
                            <br>
                            <p>Sat & Sun : 10.30am – 9.30pm</p>
                        </div>
                    </div>
                </div>
            </section>

            <section>
                <div class="GetInTouch">
                    <div class="form-title">
                        <h2>Get In Touch!</h2>
                        <p>Whether it's praise for what we're doing right or suggestions for areas where we can improve, we're eager to hear from you.</p>
                    </div>

                    <div class="form-container">
                        <?php include('validation.php'); ?>
                        <?php include('insertform.php'); ?>
                        <div class="form" id="contactForm">
                            <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>">
                                <div class="name-phone">
                                    <div id="nameInput">
                                        <input type="text" name="name" placeholder="Your Name*" id="nam" class="contact-inputs"><br>
                                        <span class="error"><?php echo $nameErr; ?> </span>    
                                    </div>

                                    <div id="phoneInput">
                                        <input type="text" name="phoneno" placeholder="Your Contact Number*" id="ph" class="contact-inputs"><br>  
                                        <span class="error"><?php echo $phonenoErr; ?> </span><br>
                                    </div>
                                </div>

                                <div id="emailInput">
                                    <input type="text" name="email" placeholder="Your Email*" id="email" class="contact-inputs"><br>
                                    <span class="error"><?php echo $emailErr; ?> </span>
                                </div>
                                <br>
                                <div class="enquiry-outlets">
                                    <div id="enquiryInput">
                                        <select name="enquiry" id="enq" class="contact-inputs">
                                            <option value="option">Select Enquiry*</option>
                                            <option value="GE">General Enquiry</option>
                                            <option value="COM">Complaints</option>
                                            <option value="FB">Feedbacks</option>
                                        </select><br>
                                        <span class="error"><?php echo $enquiryErr; ?> </span>
                                    </div>

                                    <div id="branchInput">
                                        <select name="branchname" id="outl" class="contact-inputs">
                                            <option value="option">Select Outlets*</option>
                                            <option value="IOI">Eat Le Mou IOI City Mall</option>
                                            <option value="SUNWAY">Eat Le Mou Sunway Piramid</option>
                                            <option value="MV">Eat Le Mou Mid Valley Megamall</option>
                                            <option value="AEON">Eat Le Mou AEON Serembam 2</option>
                                            <option value="QM">Eat Le Mou Queenbay Mall</option>
                                        </select>
                                        <br><span class="error"><?php echo $branchnameErr; ?> </span><br>
                                    </div>
                                </div>

                                <br>
                                <div id="detailsInput">
                                    <textarea name="details" placeholder="Tell Us More*" rows="10" cols="40" class="msg"></textarea>
                                </div>
                                <span class="error"><?php echo $detailsErr; ?> </span><br>
                                <input id="submit" type="submit" name="submit" value="Submit">
                                <br>

                            </form> 
                        </div>
                    </div>  
                </div>
            </section>
        </div>
        <?php include('../includes/footer.php'); ?>
    </body>
</html>