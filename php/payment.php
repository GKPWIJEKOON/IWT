<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Payment</title>

    <!--link- style sheets-->
<link rel="stylesheet" href="../css/payment.css">

    

<link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css">
<br /><br /><br /><br />
<style> 
body{
	background-image: url("../images/payment1.jpg");
	background-size: cover;
	background-repeat: no-repeat;
	height: 100%;
}
</style>
</head>
<body>
    <!--header section starts-->
<header>
    <div id="menu-bar" class="fas fa-bars"></div>
    <td width="500" height="150"><p align="left"><img src="../Img/logo.png" width="100" height="50" alt="logo"></p></td>

    <nav class="navbar">
        <a href="../index.html">Home</a>
        <a href="./about us.html">About us</a>
        <div class="dropdown">
            <button class="dropbtn">services
                <i class="fa fa-caret-down"></i>
            </button>  
            <div class="dropdown-content">
                
                <li type="none"><h1>Customer committment</h1></li>
                <a href="./customer service  plan.html">Customer service plan</a>
                
                <li type="none"><h1>Special Assistance</h1></li>
               
                <a href="./medical-information.html">medical Information</a>
                <a href="./Online Mobile checking.html">Telemedicine</a>
                <a href="./Healthcheckup.html">Health Check_up</a>
                <a href="./Dietplan.html">Diet Plan</a>
    
    
    
            </div></div>
        
    <div class="dropdown">
        <button class="dropbtn">payment
            <i class="fa fa-caret-down"></i>
        </button>  
        <div class="dropdown-content">
       
            <li type="none"> <h1>Payment Option</h1></li>
            <a href="../html/payment.html">Online and offline payment option</a>
            <a href="../html/voucher.html">Confirm Your Payment</a>
           
        </div>
    </div>

        <a href="../html/Contact us.html">Contact Us</a>
        <a href="../html/feedback.html">Feedback</a>
    </nav>



    <div class="icons">
        <i class="fas fa-search" id ="search-btn"></i>
        <i class="fas fa-user" id ="login-btn"></i>
        
    </div>
       <form action=""class="search-bar-container">
        <input type="search" id="search-bar" placeholder="search here">
        <label for="search-bar" class="fas fa-search"></label>
       </form> 
        
</header>
<!--header section ends-->
<br /><br /><br /><br />
<?php

// Process the form submission
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Retrieve form data
    $Full_name = $_POST["fullname"];
    $Email = $_POST["email"];
    $address = $_POST["Address"];
    $city = $_POST["city"]; 
    $state = $_POST["state"];
    $zip_code = $_POST["zipcode"];
    $owner_name = $_POST["ownername"];
    $card_no = $_POST["cardno"];
    $month = $_POST["month"];
    $year = $_POST["year"];
    $cvv = $_POST["cvv"];
    

   
    // Database connection parameters
    $servername = "localhost";
    $username = "root";
    $db_password = "";
    $dbname = "diet_and_health";

    // Create a new connection
    $conn = new mysqli($servername, $username, $db_password, $dbname);

    // Check the connection
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    } 
    else {
        $stmt = $conn->prepare("INSERT INTO payment_details(fullName, email, Address, city, state, zipcode, ownername, cardno, month, year, cvv) 
        VALUES ('$Full_name', '$Email','$address', '$city', '$state', '$zip_code', '$owner_name', '$card_no', '$month', '$year','$cvv')");
       
        $stmt->execute();
        echo "<h1>Payment Successfully Done</h1>";
        echo "<a href='../html/voucher.html'>set the voucher</a>";
        $stmt->close();
    }

    // Close the database connection
    $conn->close();
}
?>

   
<br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br />
    <!--footer section start-->
    <section class="footer"> 

        <div class="box-container">

            <div class="box">
                <h3>About us</h3>
                <a href="./about us.html">About us</a>
                <a href="#">Our community</a>
                <a href="#">Careers</a>
            </div>
            <div class="box">
                <h3>Help</h3>
                <a href="./Contact us.html">24 hours contact center</a>
                <a href="#">FAQs</a>
            </div>
            <div class="box">
                <h3>Terms and Conditions</h3>
                <a href="#">Online Banking Teams of use</a>
                <a href="#">Notice for Travel Agents</a>
            </div>
            <div id="social-links" class="box">
                <h3>Follow us</h3>
              
                    <a href="#"><i class="fab fa-facebook-f"></i></a>
                    <a href="#"><i class="fab fa-instagram" aria-hidden="true"></i></a>
                    <a href="#"><i class="fab fa-twitter" aria-hidden="true"></i></a>
                    
                
            </div>
        </div>
        <h1 class="credit"><span>@ 2023 All Rights Reseverd </span></h1>
     </section>


<!--footer section end-->









<!--link js files-->
<script src="../js/payment.js"></script>

</body>
</html>