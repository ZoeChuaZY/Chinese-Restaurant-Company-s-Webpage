<!DOCTYPE html>
<html>
    <head>
        <meta http-equiv="X-UA-Compativle" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Morning Special</title>
        <style> /* style of event1.php is same as event2.php if all put in generalstyle.css (just include 1)*/
        *{
            margin: 0;
            box-sizing: border-box;
            font-family: "Poppins", sans-serif;
        }

        #top{
            padding: 31px;
            z-index: 1;
        }
        /*navigation for promotion events*/
        .returnBar{
            margin-top: 10vh;
            padding: 0 6%;    
        }

        .returnBar li{
            font-size: 14px;
            display: inline-block; /*make all li to the same role */
            font-family: sans-serif;
            font-weight: 400;
            color: #000000;
            font-weight: 600;
        }

        .returnBar a{
            text-decoration: none;
            color: #fac031;
        }

        .returnBar li:after {
            content: " / "; /* The slash character and space */
            color: #636363; 
            margin: 0 10px; /* Adjust spacing */
        }

        .returnBar li:last-child:after
        {
            content: ""; /* Hide the slash after the last item */
        }

        /*Event Title*/
        .event-header{
            text-align: justify;
            padding: 3% 6%;
        }

        .release-date{
            display: table;
            position: relative;
            background-color: #ffba0d;
            margin-top: 4vh;
            padding: 0.5% 4%;
        }

        .event-title h3{
            font-family: sans-serif;
            font-size: 3vh;
            font-weight: 900;
        }

        /*Event Information*/
        .event-body{
            width: 57vw;
            min-height: 100vh;
            margin-top: 8vh;
        }
        .event-info{
            text-align: justify;
            margin-left: 6vw;
        }

        .event-info img{
            max-width: 51vw; 
        }

        .event-info p,li{
            font-size: 18px;
            margin-top: 2%;
            color: #636363;
            font-family: sans-serif;
            line-height: 1.6;
        } 
        .event-info span{
            color: #fac031;
            font-weight: 800;
        }

        /*Other events*/
        .other-event{
            position: absolute;
            padding-top: 0;
            padding-bottom: 0;
            max-width: 32vw;
            left: 65vw;
            top: 65vh;
        }

        .other-event-title h2{
            color: #636363;
            font-size: 30px;
            font-family: sans-serif;
            margin-left: 4vw;
            margin-bottom: 2vh;

        }

        .othevent{
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

        .othevent img{
            width: 100%;  
            height: auto;
            background-size: cover;
        }
        
        .othevent-title{
            text-align: justify;
            padding: 5% 6%;
            color: #000000;
        }

        .othrelease-date{
            display: table;
            position: relative;
            background-color: #ffba0d;
            margin-top: 25px;
            padding:1% 10%; 
            color: #000000;
        }

        .othevent-title h3{
            font-family: sans-serif;
            font-size: 3vh;
            font-weight: 900;
        }

        .othevent-title p{
            font-size: 18px;
            margin-top: 5%;
            width: 80%;
            color: #636363;
            font-family: sans-serif;
            line-height: 1.5;
        }

        .othevent-info img{
            width: 10%;  
            height: auto;
            margin-left: 90%;
            margin-bottom: 90%;
        }

        .other-event-title a{
            width: 100%;
            text-decoration: none;
        }
        </style>
        <link rel="stylesheet" href="../style/generalstyle.css">
    </head>

    <body>
        <?php include('../includes/header.php'); ?>

        <div class="event-nav">
            <ol class="returnBar">
                <li><a href="/eatlemou">Home</li>
                <li><a href="/eatlemou/promotion">Promotions</a></li>
                <li>Get The Perfect Breakfast Morning Special For Just RM28.60!</li>
            </ol>
        </div>
        <div class="event-header">
            <div class="event-title">
                <h3>Get The Perfect Breakfast Morning Special For Just RM28.60!</h3>
            <div>
            <div class="release-date">
                11 Jan 2024
            </div>
            <div class="event-body">
                <div class="event-info">
                    <img src="../image/PromoEvent2.jpg" alt="This is a picture of promotion"></img>
                    <p>Start Your Day Right with Eat Le Mou's Delicious Morning Special!</p>
                    <p>
                        Enjoy a satisfying and delicious breakfast at Eat Le Mou with our special Morning Set menu! 
                        This limited-time offer is available <span>from 9:00am to 11:00am (Mon - Fri) only</span>.
                    </p>
                    <p>
                        Our Morning Special allows you to create your ideal breakfast combination. Choose between:
                        <ul>
                            <li>Vegan Congee: A light and healthy option packed with flavor.</li>
                            <li>Chicken Congee: A comforting and savory classic.</li>
                        </ul>
                    </p>
                    <p>
                        Plus Your Choice with Two Delicious Sides:
                        <ul>
                            <li>Lotus Root Soup: A delightful and refreshing addition to your meal.</li>
                            <li>Gui Ling Gao: A traditional Chinese brown sugar cake for a touch of sweetness.</li>
                        </ul>
                    </p>
                    <p>
                        All for <span>Only RM28.60!</span>
                    </p>
                    <p>
                        Don't miss out on this fantastic way to start your day. Come on down to Eat Le Mou and 
                        experience the taste of a perfect morning!
                    </p>
                <div>
            </div>

            <div class="other-event">
                <div class="other-event-title">
                    <h2>Other Events:</h2>
                    <a href ="/eatlemou/promotion/event1">
                        <div class="othevent">
                            <img src="../image/PromoEvent1.png" alt="This is a picture of promotion"></img>
                            <div class="othevent-info">
                                <div class="othrelease-date">
                                        9 Jan 2024
                                </div>
                                <div class="othevent-title">
                                    <h3>Unwrap a Birthday Surprise: Special Set Menu Awaits at Eat Le Mou!</h3>
                                    <p>Celebrate your birthday with a special set meal from Eat Le Mou!</p>
                                    <img src="../image/arrow_right.png"></img>   
                                </div>
                            </div>
                        </div>
                    </a>
                </div>
            </div>
        </div>
    </body>
</html>