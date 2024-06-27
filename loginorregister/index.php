<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compativle" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <style>
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

    .login-box{
        display: flex;
        justify-content: center;
        flex-direction: column;
        width: 440px;
        height: 440px;
        padding: 30px;
    }

    .login-header{
        text-align: center;
        margin: 20px 0 40px 0;
    }

    .login-header h1{
        color: #333333;
        font-size: 30px;
        font-weight:600;
    }

    .input-box .input{
        width: 100%;
        height: 60px;
        font-size: 17px;
        padding: 0px 25px;
        margin-bottom: 15px;
        border-radius: 30px;
        border: none;
        box-shadow: 0 0 8px #00000080;
        outline: none;
    }

    ::placeholder{
        font-weight: 500;
        color: #636363;
    }

    a{
        text-decoration: none;
        color: #555555;
    }

    a:hover{
        text-decoration: underline;
    }

    .button{
        width: 100%;
        height: 7vh;
        background: #222222;
        border-radius: 100px;
        cursor: pointer;
        color: #ffffff;
        font-size: 2vh;
        letter-spacing: 1.2px;
        border: none;
        box-shadow: 0 0 8px #00000080;
    }

    .button:hover{
        background: #A02843;
    }

    .register p{
        display:flex;
        text-align:center;
        justify-content: center;
        padding: 5%;
        text-decoration: none;
    }

    .register span{
        color: #222222;
        font-weight: 600;
        padding: 10px;

    }

    .register span:hover{
        color: #A02843;
    }

    #message{
        color: #FF0000;
        display:flex;
        text-align:center;
        justify-content: center;
        padding-bottom: 5%;
    }

    </style>
</head>

<body>
    <?php include('login.php');
    // Retrieve message from URL parameter
    $message = isset($_GET['message']) ? $_GET['message'] : "";
    ?>
    <div class="login-box">
        <div class="login-header">
            <h1> Login </h1>
        </div>    
        <form action="login.php" method="post">
        <div class="input-box">
            <input type="text" name="username" class="input" placeholder="Username" required><br>
        </div>
        <div class="input-box">
            <input type="password" name="password" class="input" placeholder="Password" required>
        </div>
        <div id="message"><?php echo $message; ?></div>
        <div class="input-submit">
            <input id="submit" type="submit" name="submit" class="button" value="Sign In">
        </div>
        
        <div class="register">
            <p>Don't have account? <a id="register-link" href="register.php" title="Register"> <span>Sign Up</span></a></p>
        </div>
        </form>
    </div>
</body>
</html>
