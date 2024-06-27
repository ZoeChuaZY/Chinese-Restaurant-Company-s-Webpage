<!DOCTYPE html>
<html>
<head>
    <meta http-equiv="X-UA-Compativle" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Promotion Events</title>
    <style>
        *{
            margin: 0;
            box-sizing: border-box;
            font-family: "Poppins", sans-serif;
        }


        /*promotion Header*/ 
        .promotionBanner
        {
            padding-top: 11%;
        }
        
        .page-title{
            position: absolute;
            top: 10%;
            left: 0;
            width: 100vw;
            height: 60vh;
            background-image: url("../image/bg10.jpg");
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

        .promotionBanner h1{
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 10vh;
            font-family: mv boli;
            color: #ffffff;
            margin: 90px;
        }

        .promo-container{
            width: 100%;
            height: 100vh;
            background-color: #ffffff;
            background-size: cover;
            background-position: center;
            
        }

        .center-text h5{
            font-size: 3vh;
            text-align: center;
            font-family: sans-serif;
            padding: 5%;
        }

        .promo-wrapper{
            width: 95%;
            height: 100vh;
            margin: 0 auto;
            display: flex;
            align-items: center;
            justify-content: center;
            position: relative;
        }

        .event{
            width: 75%;
            height: 80vh;
            border-radius: 3%;
            margin: 0 60px;
            margin-bottom: 20%;
            display: fixed;
            align-items: center;
            justify-content: center;
            position: relative;
            box-shadow: 0 0 8px #00000080; 
            background-color: #ffffff;
            cursor: pointer;
            border-style: solid;
            border-color: #ffba0d;
        }

        .event img{
            width: 100%;  
            height: auto;
            background-size: cover;
        }
        
        .event-title{
            text-align: justify;
            padding: 5% 6%;
            color: #000000;
        }

        .release-date{
            display: table;
            position: relative;
            background-color: #ffba0d;
            margin-top: 25px;
            padding:1% 10%; 
            color: #000000;
        }

        .event-title h3{
            font-family: sans-serif;
            font-size: 3vh;
            font-weight: 900;
        }

        .event-title p{
            font-size: 18px;
            margin-top: 5%;
            width: 80%;
            color: #636363;
            font-family: sans-serif;
            line-height: 1.5;
        }

        .event-info img{
            width: 10%;  
            height: auto;
            margin-left: 90%;
            margin-bottom: 90%;
        }

        .event-title img:hover{
            transform: scale(1.2);
            transition: transform 0.5s ease;
        }

        .promo-wrapper a{
            width: 100%;
            text-decoration: none;
        }

    </style>
    <link rel="stylesheet" href="../style/generalstyle.css">
</head>

<body>
    <?php include('../includes/header.php'); ?>

    <div class="promotionBanner">
        <section>
            <h1> Promotion Events </h1>
            <div class="page-title"></div>
            <div class="darkoverlay"></div>
        </section>
    </div>

    <div class="promo-container">
        <div class="center-text">
            <h5>Don't miss out! New eats waiting for your taste buds. </h5>
        </div>

        <div class="promo-wrapper">
            <a href ="/eatlemou/promotion/event1">
                <div class="event">
                    <img src="../image/PromoEvent1.png" alt="This is a picture of promotion"></img>
                    <div class="event-info">
                        <div class="release-date">
                                9 Jan 2024
                        </div>
                        <div class="event-title">
                            <h3>Unwrap a Birthday Surprise: Special Set Menu Awaits at Eat Le Mou!</h3>
                            <p>Celebrate your birthday with a special set meal from Eat Le Mou!</p>
                            <img src="../image/arrow_right.png"></img>   
                        </div>  
                    </div>
                </div>
            </a>
            <a href ="/eatlemou/promotion/event2">
                <div class="event">
                    <img src="../image/PromoEvent2.jpg" alt="This is a picture of promotion"></img>
                    <div class="event-info">
                        <div class="release-date">
                                11 Jan 2024
                        </div>
                        <div class="event-title">
                            <h3>Get The Perfect Breakfast Morning Special For Just RM28.60!</h3>
                            <p>Love your mornings with two delightful, fulfilling breakfast choices.</p>
                            <img src="../image/arrow_right.png"></img>   
                        </div>
                    </div>
                </div>
            </a>
        </div>
        <?php include('../includes/footer.php'); ?>   
    </div>
</body>

</html>