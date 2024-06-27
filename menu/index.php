<!DOCTYPE html>
<html>
    <head>
    <title>
        Eat Le Mou Restaurant Company
    </title>
    <link rel="stylesheet" type="text/css" href="../style/generalstyle.css">
    <style>
    body, #name
    {
        background-color: #f1f5f9;
        margin: 5px;
        font-family: Arial, sans-serif;
        max-width: 1500px;
        max-height:500px;
    }

    a
    {
        margin: 5px;
        font-family: Arial, sans-serif;
        color: #FFFFFF;
    }

    .menu-container
    {
        width: 78vw;
        height: 300vh;
        display: flex;
        flex-wrap: wrap;
        justify-content: space-between;
        max-width: 1400px;
        color:black;
        margin-top: 15%; /* Move container to bottom */
        margin-left: 10%; /* Move container to right */
        font-family: "Times New Roman", Times, serif;
        text-align: justify;
    }

    .item{
        width: calc(33.33% - 20px);
        border:1px solid #ccc;
        box-sizing: border-box;
        background-color: #f9f9f9;
        padding: 30px;
        border-radius: 2vw;
        max-width: 1500px;
        margin-bottom: 5vh;
        box-shadow: 0 2px 4px rgba(0,0,0,1);
        margin-right: 20px; /* Add this line to set the gap between pictures */
    }

    .item img 
    {
        height: 50vh;
        width: 21vw;
        border-radius: 20px;
        margin-bottom: 15px;
    }

    .item h3 
    {
        margin: 10px 0;
        font-size: 1.5vw;
    }

    #name
    {
        padding-top: 25px;
        font-size: 45px;
        font-family: Optima;
        text-align: middle;
    }

    #login
    {
        right: 50px; /* Adjust the distance from the right as needed */
    }

    #about
    {
        right: 680px;
    }

    #event
    {
        right: 480px;
    }

    #contact
    {
        right: 250px;
    }

    img#Beverages,img#Chicken,img#Congee,img#DaChaow,img#Desserts,img#Others,img#Pork,img#Seafood,img#Soup{
        width: 20vw;
        height: 40vh;
    }

    #name {
        padding-top: 25px;
        font-size: 45px;
        font-family: Optima;
        text-align: middle;
    }

    a:hover {
        color: #F3AD1E;
    }

    #logo 
    {
        position: absolute;
        top: 0px; /* Adjust the distance from the top as needed */
        right: 2px; /* Adjust the distance from the right as needed */
        width: 200px; /* Set the width of your logo */
        height: auto; /* Maintain aspect ratio */
    }

    #cart
    {
        position: flex;
        right: 10px; 
        width: 16vw; 
        height: auto; 
    } 

    /*for table in sidebar only below*/
    .menusidebar {
        height: 45%;
        width: 18%;
        position: fixed;
        left: 0.5vw;
        bottom: 1.5vh;
        border-radius: 10px;
        border: 1px solid #ccc;
        margin-right:10vw;
        right: 0;
        background-color: #ffffff;
        padding-top: 30px;
        z-index: 1;
    }

    .menusidebar h2{
        position: fixed;
        top: 54vh;
        left: 4.5vw;
        border-radius: 10px;
        color: #354c6b;
        font-family: "Times New Roman", Times, serif;
    }

    .menusidebar table{
        border-collapse: collapse;
    }

    .menusidebar th{
        background-color: #354c6b;
        color: #FAFAFA;
        padding: 10px;
        border: 1px solid #ccc;
        font-family: "Times New Roman", Times, serif;
    }

    .menusidebar tr td{
        color: black;
        padding: 10px;
        border: 1px solid #ccc;
        font-family: "Times New Roman", Times, serif;
        max-width: 200px;
        font-size: 14px;
        word-wrap: break-word;
    }

    .dishname
    {
        width: 100%;
        height: 8vh;
    }

    .description
    {
        width: 100%;
        height: 20vh;
    }

    .price
    {
        padding-bottom: 0;
        width: 100%;
        height: 5vh;
    }

    #payBtn:hover{
        background-color:#ffcf78;
    }
    
    .navigation{
        height: 10vh;
        width: 80vw;
        top: 15%;
        right:10.5%;
        position: fixed;
        color: white;
        /* background-color: #f1f5f9; */
        /* float: top; */
        display: flex;
        /* flex-direction: column; */
        justify-content: flex-end; 
        align-items: center;
        font-size: 1vw;
    }

    img.option
    {
        width:60px;
        height: 40px;
    }
    
    #end
    {
        background-color: #ED981D;
        display: flex;
        align-items: center;
        justify-content: center;
        height: 50px; /* Set a specific height for the #end element */
        width: 100%; /* Set the width to cover the entire viewport */
        position: fixed; /* Fixed position to keep it at the bottom */
        left: 0;
        bottom: 0; /* Align to the bottom of the viewport */
    }

    .category-link {
        width: 9vw;
        height: 5vh;
        padding: 11px; /* Add padding for better spacing */
        background-color: #801F17; /* Add background color */
        border: 1px solid #ccc; /* Add border for better visibility */
        border-radius: 5px; /* Add border radius for rounded corners */
        color: #ffffff; /* Set link color */
        display: inline-block; /* Display as inline block */
        text-align: center; /* Center text */
        text-transform: uppercase; /* Uppercase text */
        text-decoration:none; /* Remove underline */
        font-family: "Times New Roman", Times, serif;
    }

    .dishes{
        width: 20vw;
        height: 40vh;
    }

    .cart-scroll
    {
        max-height:35vh;
        overflow-x:hidden;
        overflow-y:auto;
        width: 17.5vw;
        height: auto;
        text-align: justify;
        margin-bottom:10px;
    }
</style>
</head>
<body>
    <?php include '../includes/header.php'; ?>
    <div class="navigation">
        <?php
        //Database configuration
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

        // Query to select all categories
        $sql = "SELECT DISTINCT category FROM menu";
        $result = $conn->query($sql);

        // Check if there are any categories
        if ($result->num_rows > 0) {
            // Output data of each row
            while($row = $result->fetch_assoc()) {
                // Display the category as a navigation link
                // Using JavaScript to filter items based on selected category
                echo "<a href='javascript:void(0)' class='category-link' data-category='" . $row['category'] . "'>" . $row['category'] . "</a>";
            }
        } 
        else {
            echo "0 results";
        }
        ?>
    </div>
    
    <div class="menu-container">
        <?php
        // Query to select all dishes
        $sql = "SELECT * FROM menu";
        $result = $conn->query($sql);

        // Check if there are any dishes
        if ($result->num_rows > 0) {
            // Output data of each row
            while($row = $result->fetch_assoc()) {
                // Display the dish information
                echo "<div class='item' data-category='" . $row['category'] . "'>";
                // Display the image for the corresponding food based on food ID
                echo "<img class='dishes' src='../admin/" . $row['image'] . "' alt='" . $row['foodname'] . "'>";
                echo "<div class='dishname'><h3>" . $row['foodname'] . "</h3></div>";
                echo "<div class='description'><p>" . $row['description'] . "</p></div>";
                echo "<p>Price: RM" . $row['price'] . "</p>";
                echo "<form method='post' action=''>";
                echo "<input type='hidden' name='f_id' value='" . $row['f_id'] . "'>";
                echo "</form>";
                echo "</div>";
            }
        } else {
            echo "0 results";
        }
        ?>
    </div>

    <script>
        // JavaScript to filter items based on selected category
        document.querySelectorAll('.category-link').forEach(link => {
            link.addEventListener('click', function() {
                const category = this.getAttribute('data-category');
                document.querySelectorAll('.item').forEach(item => {
                    if (item.getAttribute('data-category') === category) {
                        item.style.display = 'block';
                    } else {
                        item.style.display = 'none';
                    }
                });
            });
        });
    </script>
</body>
</html>