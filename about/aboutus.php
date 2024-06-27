<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compativle" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>About Us</title>
    <style>
        #top 
        {
            z-index: 3;
            padding: 31px;
        }

        *{
            margin: 0;
            box-sizing: border-box;
            font-family: "Poppins", sans-serif;
        }

        /*About*/
        .about{
            width: 100%;
            height: 100%;
        }

        .about_main{
            display: flex;
            align-items: center;
            justify-content: space-around;
            background-color: #ffffff;
            padding: 100px;
            margin-top: 80px;
        }

        .about_main .image img{
            width: 500px;
            position: relative;
            top: 5px;
        }

        .about_text h1 span{
            color: #fac031;
            margin-right: 15px;
        
        }

        .about_text h1{
            font-size: 70px;
            position: relative;
            bottom: 2px;
            font-family: mv boli;
        }

        .about_text h3 span{
            margin-right: 15px;
            font-family: mv boli;
            color: #DCAB6F;
            font-size: 70px;
            line-height: 1;
            margin-bottom: 0;  
        }

        .about_text h3{
            font-size: 35px;
            margin: 0 0 45px 0;
            font-family:'Courier New';
        }

        .about_text p{
            font-size: 18px;
            font-style: Arial;
            width: 700px;
            text-align: justify;
            margin-right: 30px;
            line-height: 30px;
        }

        /*Mission and Vision*/
        .wrapper{
            display: flex;
            flex-direction: row;
        }

        .mv-container{
            background-color: #FFEDA5;
        }

        .wrapper .image img{
            display: flex;
            align-items: center;
            justify-content: center;
            position: relative;
            width: 600px;
            height: 100%;
        }

        .mission-vision{
            margin: 45px auto;
        }

        .mission-vision img{
            width: 50px;
            height: 50px;
            margin-left: 48%;
        }

        .mission-vision h2{
            text-align: center;
            align-items: center;
            margin-bottom: 10px;
            font-family: mv boli;
            font-size: 55px;
        }
        .mission-vision p{
            text-align: center;
            margin: 0 auto;
            font-size: 18px;
            letter-spacing: 1.5px;
            color: #636363;
            width: 68%;
        }

        /*Our golden Chef*/
        .chef{
            width: 100%;
            height: 100vh;
            background-color: #ffffff;
            background-size: cover;
            background-position: center;
        }

        .chef h1{
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 55px;
            margin-top: 30px;
            margin-bottom: 30px;
            font-family: mv boli;
            color:#fac031;
        }

        .chef h1 span{
            color: #080808;
            margin-right: 15px;
            font-family: mv boli;
        }

        .box{
            width: 95%;
            margin: 0 auto;
            display: flex;
            align-items: center;
            justify-content: center;
            position: relative;
        }

        .chef .box .profile{
            width: 400px;
            height: 550px;
            border-radius: 30px;
            margin: 0 60px;
            display: flex;
            align-items: center;
            justify-content: center;
            position: relative;
            box-shadow: 0 0 8px #00000080; 
            background-color: #ffffff;
            cursor: pointer;
        }

        .profile .image img{
            width: 200px;
            height: 200px;
            border-radius: 80%;
            box-shadow:  0 0 8px #00000080;
            z-index: 2;
            margin-bottom: 30vh;
        }

        .profile .info{
            position: absolute;
            text-align: center;
            align-items: center;
            top: 45%;
            padding: 10%;
        }

        .info .name{
            color: #080808;
            margin-bottom: 15px;
            font-size: 30px;
        }

        .info .bio{
            text-align: center;
            margin: 0 auto 10px auto;
            font-size: 15px;
            letter-spacing: 1px;
            color: #636363;
        }

        .profile .social-container {
            position: absolute;
            width: 100%; 
            bottom: 50px; 
            left: 0; 
            text-align: center; 
        }

        .social-media {
            display: flex;
            justify-content: center; 
            gap: 25px; 
        }

        .social-media img {
            width: 30px; 
            height: 30px; 
            cursor: pointer;
        }

        /*Our Story*/
        .story{
            background-color: #801F17;
        }
        .story h1{
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 55px;
            font-family: mv boli;
            color:#fac031;
            padding: 2%;
        }

        .story h1 span{
            color: #ffffff;
            margin-right: 15px;
            font-family: mv boli;
        }

        .desc img{
            width: 450px;
            height: 300px;
            box-shadow:  0 0 8px #00000080;
        }

        .desc p{
            color: #ffffff; 
            width: 60%;
            height: 60%;
            text-align: justify;
            margin-top: 20px;
            margin-left: 130px;
            font-size: 16px;
            font-family: 'Times New Roman';
            letter-spacing: 2px;
        }

        .story ul{
            list-style-type: none; /* Removes default bullets */
            padding-left: 0; /* Removes default padding */
        }
        
        li.story{
            position: relative;
            text-align: center;
        }

        /*Adjust the bullet of timeline*/
        li.story::before {
            content: "•"; /* Unicode character for bullet */
            position: absolute;
            left: 50%; /* Horizontally center the bullet */
            transform: translateX(-50%); /* Adjusts for the bullet's own width */
            top: 25%;  /* Adjust the height of the bullet*/
            font-size: 100px;
            color: #dcab6f;

        }

        /*Adjust the vertical line of timeline*/
        li.story::after {
            content: ""; /* No actual content, just a visual line */
            position: absolute;
            left: 50%; /* Adjust this value to align with the center of your bullet */
            top: 40%; /* Adjust the height of vertical line */
            bottom: 0;
            width: 2px; /* Width of the vertical line */
            height: 100%;
            background-color: #dcab6f; /* Line color */
            z-index: 1; /*layer*/
        }

        li#last::after
        {
            content:none;
        }

        .timeline li:nth-child(odd){
            padding: 0 55% 25px 0;
        }

        .timeline li:nth-child(even){
            padding: 0 0 25px 55%;
        }

        /*Awards*/
        .awards-wrapper{
            min-height: 100vh;
            background: linear-gradient(to left top, #636363, #080808);
        }

        .awards-title h1{
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 55px;
            font-family: mv boli;
            color:#fac031;
            padding: 5%;
        }

        .awards-title span{
            color: #ffffff;
            margin-left: 20px;
            font-family: mv boli;
        }

        .awards-slider{
            display: flex;
            align-items: center;
            justify-content: center;
            padding: 0 27px;
            margin-top: 5%;
        }

        .carousel-button{
            border-radius: 55%; /* Adjust roundness of the button */
            background-color: #ffffff; 
            border: none;
            color: #080808;
            padding: 10px 20px;
            text-align: center;
            text-decoration: none;
            font-size: 30px;
            margin: 4px 15px;
            cursor: pointer;
        }

        /* Darken the button background on hover */
        .carousel-button:hover {
            background-color: #dcab6f; 
        }

        .awards-carousel{
            display: flex;
            grid-auto-flow: column;
            grid-auto-columns: calc(100% / 3) - 12px;
            gap: 16px;
            overflow-x: auto;
            scroll-behavior: smooth; 
            overflow: hidden;
        }

        .awards-card{
            width: 398px;
            height: 250px;
            list-style: none;
            background: #ffffff;
            border-radius: 8px;
            display: flex;
            padding-bottom: 15px;
            align-items: center;
            justify-content: center;
            flex-direction: column;
            cursor: pointer;
            flex: 0 0 auto; /* Prevent cards from shrinking */
        }


        .awards-img img{
            width: 300px;
            height: 140px;
            object-fit: cover;
        }

        .awards-card h2{
            text-align: center;
            font-size: 15px;
            margin: 30px 0 5px;
        }

        .awards-card span{
            text-align: center;
            color: #636363;
        }

        .social-container img:hover
        {
            transform: scale(1.2);
            transition: transform 0.5s ease;
        }
    </style>
    <link rel="stylesheet" href="../style/generalstyle.css">
</head>

<body>
    <?php include('../includes/header.php'); ?>

    <div class="about">
    <section>
        <div class="about_main">
            <div class="image">
               <img src="../image/Foodplate.png">
            </div>

            <div class="about_text">
                <h1><span>About</span>Us</h1>
                <h3>Brand Name <span>Origin</span></h3>
                <p>Welcome to Eat Le Mou, where every dish tells a story and every meal is an invitation to connect. Our name, "sik baau mou," echoes the warmth and hospitality 
                    ingrained in Cantonese culture, where asking "Have you eaten?" is more than just a question — it's an expression of care, community, and the timeless bond 
                    forged over shared meals.
                </p>
            </div>
        </div>
    </section>
    
    <section>
        <div class="wrapper">
            <div class = "mv-container">
                <div class="mission-vision">
                    <img src="../image/mission.png" alt="mission icon">
                    <div class="text">
                        <h2>Mission</h2>
                        <p>At Eat Le Mou, our mission is to serve more than just meals; we strive to create unforgettable dining experiences through unwavering 
                            friendliness, adaptability, and attention to detail.</p>
                        <br>
                        <p>Inspired by the deep-rooted Cantonese tradition of hospitality, we prioritize the needs and preferences of our guests, ensuring that every interaction reflects our commitment to 
                            excellence and the values of our brand.</p>
                    </div>
                </div>

                <div class="mission-vision">
                    <img src="../image/vision.png" alt="vision icon">
                    <div class="text">
                        <h2>Vision</h2>
                        <p>We are dedicated to maintaining the highest culinary standards, understanding that each dish we serve is not only a testament to our craftsmanship 
                            but also a step towards earning our customers' trust and approval. </p>
                        <br>
                        <p>Our goal is to ensure that every guest at Eat Le Mou enjoys a superior dining experience, marked by our proactive service 
                            and the genuine warmth that defines us.</p>
                    </div>  
                </div>
            </div>

            <div class="image">
                <img src="../image/Foodpic.jpeg">
            </div>
        </div>
    </section>

    <section>   
        <div class="chef">
            <h1><span>Golden</span>Chef</h1>

            <div class="box">
                <div class="profile">
                    <div class="image">
                        <img src="../image/chef1.png" alt="image of Chef Wang">
                    </div>
                    <div class="info">
                        <h2 class="name">Chef Wang</h2>
                        <q class="bio">In Chinese cuisine, harmony is key. Balance in flavors, textures, and colors creates a symphony of taste that delights the senses and nourishes the soul.</q>
                    </div>

                    <div class="social-container">
                        <div class="social-media">
                            <a href="https://twitter.com/meishizuojiawg" target="_blank" title="Twitter">
                                <img src="../image/twitter-icon.png" alt="twitter icon">
                            </a>
                            <a href="https://www.youtube.com/@chefwang" target="_blank" title="Youtube">
                                <img src="../image/youtube-icon.png" alt="youtube icon">
                            </a>
                        </div>
                    </div>
                </div>

                <div class="profile">
                    <div class="image">
                        <img src="../image/chef2.jpg" alt="image of Chef Yan">
                    </div>

                    <div class="info">
                        <h2 class="name">Chef Yan</h2>
                        <q class="bio">Cooking is an art, and a good chef is like a painter. Every dish is a canvas waiting to be perfected with passion and precision.</q>
                    </div>

                    <div class="social-container">
                        <div class="social-media">
                            <a href="https://www.facebook.com/chefmartinyan" target="_blank" title="Facebook">
                                <img src="../image/facebook-icon.png" alt="facebook icon">
                            </a>
                            <a href="https://www.instagram.com/chefmartinyan/" target="_blank" title="Instagram">
                                <img src="../image/instagram-icon.png" alt="instagram icon">
                            </a>
                            <a href="https://www.youtube.com/@ChefMartinYan" target="_blank" title="Youtube">
                                <img src="../image/youtube-icon.png" alt="youtube icon">
                            </a>
                        </div>
                    </div>
                </div>

                <div class="profile">
                    <div class="image">
                        <img src="../image/chef3.png" alt="image of Chef Lau">
                    </div>

                    <div class="info">
                        <h2 class="name">Chef Lau</h2>
                        <q class="bio">The secret ingredient in every dish is love. With love as our foundation, we infuse every recipe with care and dedication, transforming simple ingredients into culinary masterpieces.</q>
                    </div>

                    <div class="social-container">
                        <div class="social-media">
                            <a href="https://www.instagram.com/chefvickylau/" target="_blank" title="Instagram">
                                <img src="../image/instagram-icon.png" alt="instagram icon">
                            </a>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </section> 

    <section> 
        <div class="story">
            <h1><span>Our</span>Story</h1>
            <ul class ="timeline">
                <li class="story">
                    <div class ="desc">
                        <img src="../image/outlet1.png">  
                        <br>
                        <p>Eat Le Mou opened its first outlet in Malaysia at IOI City Mall.</p>  
                    </div>
                </li>
                <li class="story">
                    <div class ="desc">
                        <img src="../image/outlet2.png">  
                        <br>
                        <p>Eat Le Mou opened its second outlet at Sunway Piramid, Selangor.</p>  
                    </div>
                </li>
                <li class="story">
                    <div class ="desc">
                        <img src="../image/outlet3.png">  
                        <br>
                        <p>Eat Le Mou opened its first outlet in Negeri Sembilan State - at AEON Serembam.</p>  
                    </div>
                </li>
                <li class="story">
                    <div class ="desc">
                        <img src="../image/outlet4.png">  
                        <br>
                        <p>Eat Le Mou expands its presence to Penang State opening its fourth outlet in Queensbay Mall.</p>  
                    </div>
                </li>
                <li id="last" class="story">
                    <div class ="desc">
                        <img src="../image/outlet5.png">  
                        <br>
                        <p>To date, there are 5 Eat Le Mou restaurants in Malaysia with it's latest at Mid Valley Megamall, Kuala Lumpur.</p>  
                    </div>
                </li>
            </ul>
        </div>
    </section>  

    <section>
        <div class="awards-wrapper">
            <div class="awards-title">
            <h1>Our<span>Recognitions</span></h1>
            </div>

            <div class="awards-slider">
                <button id="left" class="carousel-button prev-button"> < </button>
                <ul class="awards-carousel">
                    <li class="awards-card">
                        <div class="awards-img">
                            <img src="../image/awards1.png" alt="Awards from The New York Times">
                        </div>    
                            <h2>One of Top Ten Gourmet Restaurants in the World</h2>
                            <span>2007</span>
                    </li>
                    <li class="awards-card">
                        <div class="awards-img">
                            <img src="../image/awards5.png" alt="Awards from The New York Times">
                        </div>
                            <h2>Eat Le Mou Sunway Piramid</h2>
                            <span>2010</span>
                    </li>
                    <li class="awards-card">
                        <div class="awards-img">
                            <img src="../image/awards3.png" alt="Awards from The New York Times">
                        </div>    
                            <h2>Second-Best Franchise for Travelers</h2>
                            <span>2013</span>
                    </li>
                    <li class="awards-card">
                        <div class="awards-img">
                            <img src="../image/awards4.png" alt="Awards from The New York Times">
                        </div>    
                            <h2>Ranked sixth in the list of “101 Best Restaurants in Asia”</h2>
                            <span>2013</span>
                    </li>
                    <li class="awards-card">
                        <div class="awards-img">
                            <img src="../image/awards2.png" alt="Awards from The New York Times">
                        </div>    
                            <h2>Top Chinese Restaurant in Kuala Lumpur</h2>
                            <span>2022</span>
                    </li>
                    <li class="awards-card">
                        <div class="awards-img">
                            <img src="../image/awards6.png" alt="Awards from The New York Times">
                        </div>    
                            <h2>Awarded Innovative Restaurant at Malaysia Tourism Awards</h2>
                            <span>2022</span>
                    </li>
                </ul>
                <button id="right" class="carousel-button next-button"> > </button>
            </div>
        </div>
    </section> 
    <?php include('../includes/footer.php'); ?>
    </div>
    
    <script src="about.js"></script>
</body>

</html>