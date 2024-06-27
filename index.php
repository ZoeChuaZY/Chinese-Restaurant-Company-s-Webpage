<!DOCTYPE html>
<html>

<head>
	<meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>
    Eat Le Mou Restaurant Company
    </title>
    <style>
        *{
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            font-family: "Poppins", sans-serif;
        }

        /*Promotion Event Slider*/
        .slider-container{
            margin-top: 5%;
            width: 100vw;
            overflow: hidden;
            position: absolute; /* Add this line */
            top: 0; /* Add this line to position at the top */
            left: 0; /* Add this line to position at the left */
            z-index: 0;
        }

        .slider-wrapper{
            width: 100%;
            display: flex;
            animation: slide 15s infinite;
        }

        @keyframes slide {
            0% {
                transform: translateX(0);
            }
            25% {
                transform: translateX(0);
            }
            35% {
                transform: translateX(-100%); /* Adjusted translateX for two images */
            }
            45% {
                transform: translateX(-100%); /* Adjusted translateX for two images */
            }
            55% {
                transform: translateX(-100%); /* Adjusted translateX for two images */
            }
            75% {
                transform: translateX(-100%); /* Adjusted translateX for two images */
            }
            85% {
                transform: translateX(-100%); /* Adjusted translateX for two images */
            }
            90% {
                transform: translateX(0%); /* Adjusted translateX for two images */
            }
            100% {
                transform: translateX(0);
            }
        }

        .slider-wrapper img{
            max-width: 100%;
            padding: 1%;
        }

        .Promotion{
            margin-bottom: 5%;
        }

        /*About*/
        .about{
            background-image: url(https://www.gonoodlehouse.com.my/wp-content/uploads/2023/10/home-v2-bg.jpg);
            width: 100vw;
            height: 100vh;
            margin-top: 120vh;
        }

        .about-info{
            width: 100%;
            max-width: 100%;
            position: relative;
            display: flex;
            align-items: center;
            flex-direction: row;
            padding: 5% 0%;
        }

        .about-image img{
            max-width: 70%;
            width: 750px;
            padding: 10%;
            margin-left: 40%;
        }

        .about-text{
            max-width: 70%;
            width: 50%;
            margin-left: 10%;
        }
        .about-text h4{
            font-style: Arial;
            font-weight: 700;
            font-size: 10px;
            color: #ffffff;
            letter-spacing: 5px;
            line-height: 16px;
        }

        .about-text h2{
            font-size: 70px;
            position: relative;
            bottom: 2px;
            font-family: mv boli;
            color: #801F17;
        }

        .about-text p{
            width: 60%;
            margin-right: 15px;
            font-style: Arial;
            color: #ffffff;
            font-size: 16px;
            margin-bottom: 0; 
            line-height: 30px;
            font-weight: 300;
        }

        .button-wrapper{
            background-color: #801F17;
            width: 30%;
            margin-top: 50px;
        }

        .button-wrapper h3{
            height: auto;
            padding: 20px;
            color: #ffffff;
            font-weight: 600;
            font-style: 'PT Sans';
            letter-spacing: 1px;
            font-size: 16px;
            text-align: center;
        }

        .button-wrapper a{
            text-decoration: none;
        }

        /*Menu*/
        .menu{
            width: 100%;
            height: 140vh;
        }
        .menu-text{
            margin-top: 5%;
            margin-left: 5%;
            display: flex; /* Enable flexbox layout */
            justify-content: center; /* Center elements horizontally */
            align-items: center; /* Center elements vertically */
            flex-direction: column;
        }

        .menu-text h1{
            font-size: 50px;
            text-align: center;
            font-weight: 500;
        }

        .menu-text p{
            font-size: 16px;
            text-align: center;
            width: 50%;
            line-height: 1.8em;
            color: #636363;
        }

        .menu-button{
            background-color: #801F17;
            width: 15%;
            margin-top: 30px;
        }

        .menu-button h3{
            height: auto;
            padding: 20px;
            color: #ffffff;
            font-weight: 600;
            font-style: 'PT Sans';
            letter-spacing: 1px;
            font-size: 16px;
            text-align: center;
        }

        .menu-button a{
            text-decoration: none;
        }

        .foods-container{
            display: flex;
            flex-wrap: wrap;
            margin: 2%;
            margin-left: 18%;
        }

        .box img{
            width: 350px;
            height: 350px;
        }

        /*Customer Reviews*/
        .reviews{
            margin-top: 10vh;
            width: 100%;
            height: 90vh;
            background-color: #F0EEE1;
            flex-direction: column;
            align-items:center;
            justify-content: center;
        }
        
        .reviews h1{
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 55px;
            margin-top: 20px;
            margin-bottom: 10px;
            font-family: mv boli;
            color: #080808;
            padding-top: 5%;
        }

        .reviews span{
            color:#fac031;
            margin-left: 15px;
            font-family: mv boli;
        }

        .review-box{
            width: 90%;
            max-width: 700px;
            height: 300px;
            border-radius: 10px;
            box-shadow: 0 0 8px #00000080;
            position: relative;
            margin-left: 28%;
            overflow: hidden;
            cursor: pointer;
        }

        .card{
            height: 300px;
            padding: 40px;
            color: #000000;
            line-height:22px;
            box-sizing: border-box;
            background: #fff;
            position: relative;
        }
        
        .card p{
            width: 90%;
        }

        .profile{
            display: flex;
            align-items: center;
            margin-bottom: 20px;
        }

        .profile img{
            width: 70px;
            border-radius: 50%;
            margin-right: 20px;
        }

        .profile h3{
            font-size: 26px;
            color: #DCAB6F;
            margin-bottom: 8px;
        }

        #slide{
            width: 100%;
            padding-right: 60px;
            box-sizing: border-box;
            position: absolute;
            top: 0;
            left: 0;
            transition: 0.5s;
        }

        .sidebar{
            width: 60px;
            height: 100%;
            padding: 15px 0;
            box-sizing: border-box;
            background: #DCAB6F;
            position: absolute;
            right: 0;
            top: 0;
            display: flex;
            flex-direction: column;
            justify-content: space-between;
            align-items: center;
        }

        .sidebar img{
            width: 30px;
            padding: 5px;
            background:#fff;
            border-radius: 50%;
            cursor: pointer;
        }
    </style>
    <link rel="stylesheet" href="style/generalstyle.css">              
</head>

<body>
     <?php include('includes/header.php'); ?>

    <section>
    <!--Promotion section-->
    <div class="Promotion">
        <a href="/eatlemou/promotion">
            <div class="slider-container">
                <div class="slider-wrapper">
                    <img src="image/PromoEvent1.png">
                    <img src="image/PromoEvent2.jpg">
                </div>
            </div>
        </a>
    </div>
    </section>

    </section>
    <!--About section-->
    <div class="about">
        <div class="about-info">
            <div class="about-image">
                <img src= "https://www.oliveandmango.com/images/uploads/2020_04_27_takeout_style_kung_pao_chicken_2.jpg">
            </div>
            <div class="about-text">
                <h4>ABOUT EAT LE MOU</h4>
                <h2>Our story<h2>
                <p>Eat Le Mou is a Chinese style restaurant which have 21 years histories. At here, you can 
                    have a culinary journey through Cantonese tradition. Eat Le Mou believe that every meal 
                    is an opportunity to create cherished memories and forge lasting connections.</p>
                <div class="button-wrapper">
                    <a href="/eatlemou/about/aboutus">
                        <h3>Learn More</h3>
                    </a>
                </div>
            </div>
        </div>
    </div>
    </section>

    <!--Menu section-->
    <div class="menu">
        <div class="menu-text">
            <h1>Top Recommendations</h1>
            <p>Looking for the best dish on the menu? Look no further than our Top Recommendation. 
                Our experienced chefs use only the highest quality ingredients to create this mouthwatering 
                dish, freshly made to order. With a balanced mix of savory and sweet flavors, it’s no wonder 
                why this is a customer favorite.</p>
            <div class="menu-button">
                <a href="/eatlemou/menu">
                    <h3>View Menu</h3>
                </a>
            </div>
        </div>
        <div class="recommendations">
            <div class="foods-container">
                <div class="box">
                    <img src="https://i.pinimg.com/originals/d5/f8/75/d5f875347d98eb9a564a405250f2cd1a.jpg">
                </div>
                <div class="box">
                    <img src="image/Sweet and Sour Fish.jpg">
                </div>
                <div class="box">
                    <img src="image/Seafood Fried Rice.jpg">
                </div>
                <div class="box">
                    <img src="image/Chicken Congee.jpg">
                </div>
                <div class="box">
                    <img src="image/Mango Sago.jpeg">
                </div>
                <div class="box">
                    <img src="image/Golden Beancurd Skin Rolls.jpg">
                </div>
            </div>
        </div>
    </div>

    <!--Customer Reviews-->
    <div class="reviews">
        <h1>Customer<span>Review</span></h1>

        <div class="review-box">
            <div id="slide">
                <div class="card">
                    <div class="profile">
                        <div>
                            <h3>Li Mei</h3>
                        </div>
                    </div>
                    <p>This restaurant is amazing! Authentic Sichuan cuisine, so numbing and spicy, it's incredibly 
                        satisfying! The waiters were also very friendly and helped us understand the dishes. 
                        We will definitely come back!</p>
                </div>

                <div class="card">
                    <div class="profile">
                        <div>
                            <h3>David Miller</h3>
                        </div>
                    </div>
                    <p>A friend recommended this restaurant, and it certainly lived up to the hype! The soup dumplings 
                        were bursting with flavor, the dough was thin and delicate. The stir-fried dishes were also 
                        cooked perfectly, with a beautiful combination of color, aroma, and taste. Next time I'll 
                        have to bring my family to try it!</p>
                </div>

                <div class="card">
                    <div class="profile">
                        <div> 
                            <h3>Michael Thompson</h3>
                        </div>
                    </div>
                    <p>The ambience is elegant, and the dishes are beautifully presented, perfect for a romantic date. We ordered 
                        the signature steamed perch, the fish was fresh and tender, and the sauce was very flavorful. The cold 
                        appetizers were also refreshing and helped cut through the richness. Next time, I want to try their claypot 
                        rice!"</p>
                </div>

                <div class="card">
                    <div class="profile">
                        <div> 
                            <h3>Emily Lee</h3>
                        </div>
                    </div>
                    <p>This restaurant is perfect for family gatherings, with dishes suitable for children and nourishing 
                        soups for older family members. We ordered the Hong Shao Shi Zi Tou, which were crispy on the outside 
                        and tender on the inside, a big hit with the kids. The black sesame paste was thick, fragrant, and sweet,
                        a perfect dessert after the meal. The waiters were also very attentive and helped look after the children.</p>
                </div>
            </div>

            <div class="sidebar">
                <img src="image/up-arrow.png" id="upArrow">
                <img src="image/down-arrow.png" id="downArrow">
            </div>
        </div>
    </div>    

    <script>
        var slide = document.getElementById("slide");
        var upArrow = document.getElementById("upArrow");
        var downArrow= document.getElementById("downArrow");

        let x = 0;
        
        upArrow.onclick = function(){
            if(x > "-900"){
                x = x - 300;
                slide.style.top = x + "px";
            }  
        }

        downArrow.onclick = function(){
            if(x < 0){
                x = x + 300;
                slide.style.top = x + "px";
            }  
        }
    </script>
    <?php include('includes/footer.php'); ?>
</body>
</html>