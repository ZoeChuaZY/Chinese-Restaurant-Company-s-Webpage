<!DOCTYPE html>
<html>
<head>
<title>Register</title>
<style>
/*Specific sytle*/
*{
    margin:0;
    padding: 0;
    box-sizing: border-box;
    font-family:Cambria, Cochin, Georgia, Times, 'Times New Roman', serif;
}

body{
    display: flex;
    justify-content: center;
    align-items:center;
    min-height: 100vh;
    background: #dfdfdf;
}

.register-box{
    display: flex;
    justify-content: center;
    flex-direction: column;
}

.register-header{
    text-align: center;
}

.register-header h1{
    color: #333333;
    font-size: 30px;
    font-weight:600;
    text-align: center;
    position: absolute;
    top: 4%;
    right: 47%;
}

.input-box .input{
    width: 100%;
    height: 55px;
    font-size: 17px;
    padding: 0px 25px;
    margin-bottom: 15px;
    border-radius: 30px;
    border: none;
    box-shadow: 0 0 8px #00000080;
    outline: none;
    display: block;
}

::placeholder{
    font-weight: 500;
    color: #636363;
}

#left
{
    position: absolute;
    top: 15%;
    right: 54%;
}

#right
{
    position: absolute;
    top: 15%;
    right: 28%;
}

.input-submit{
    position: absolute;
    top: 90%;
	right: 39%;
}

.button{
    width: 20vw;
    height: 7vh;
    background: #222222;
    border-radius: 100px;
    cursor: pointer;
    color: #ffffff;
    font-size: 2vh;
    letter-spacing: 1.2px;
    border:none;
    box-shadow: 0 0 8px #00000080;
}

.button:hover{
    background: #A02843;
}

p{
    padding-bottom: 2%;
    color: #222222;
    font-weight: 600;
    margin-left: 2%;
}

.error{
    color: #FF0000;
}
</style>
</head>
<body>
    <?php 
    include('serversidevalidation.php'); 
    include('createaccount.php');
    ?>
    <div class="register-box">
        <div class="register-header">
            <h1> Register </h1>
        </div>    
            <form method="post">
                <div id="message"><?php echo $message; ?></div>
                <div id="left">
                    <div class="input-box">
                    <p>Name:</p>
                    <input class="input" type="text" id="name" name="name">
                    <span class="error"><?php echo $nameErr; ?></span><br>
                    <br>
                    </div>

                    <div class="input-box">
                    <p>IC Number:</p>
                    <input class="input" type="text" id="icno" name="icno" placeholder=" without '-'">
                    <span class="error"><?php echo $icnoErr; ?></span><br>
                    <br>
                    </div>

                    <div class="input-box">
                    <p>Date of Birth:</p>
                    <input class="input" type="date" id="dob" name="dob" max="<?php echo date('Y-m-d'); ?>">
                    <span class="error"><?php echo $dobErr; ?></span><br>
                    <br>
                    </div>

                    <div class="input-box">
                    <p>Phone Number:</p>
                    <input class="input" type="text" name="phone" placeholder=" exp:0123456789">
                    <span class="error"><?php echo $phoneErr; ?></span><br>
                    <br>
                    </div>
                </div>

                <div id="right">
                    <div class="input-box">
                    <p>Email:</p>
                    <input class="input" type="text" name="email" placeholder=" exp:abd123@gmail.com">
                    <span class="error"><?php echo $emailErr; ?></span><br>
                    <br>
                    </div>

                    <div class="input-box">
                    <p>Username:</p>
                    <input class="input" type="text" name="username">
                    <span class="error"><?php echo $usernameErr; ?></span><br>
                    <br>
                    </div>

                    <div class="input-box">
                    <p>Password:</p>
                    <input class="input" type="password" name="password">
                    <span class="error"><?php echo $passwordErr; ?></span><br>
                    <br>
                    </div>

                    <div class="input-box">
                    <p>Bank Card:</p>
                    <input class="input" type="password" name="bankcard" placeholder="16 digits of your debit card">
                    <span class="error"><?php echo $bankcardErr; ?></span><br>
                    <br>
                    </div>
                </div>
                <div class="input-submit">
                    <input id="register" type="submit" name="submit" class="button" value="Register">
                </div>
            </form>
        </div>
    </div>
</body>
<html>