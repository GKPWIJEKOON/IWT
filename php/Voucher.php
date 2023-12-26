<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>confirm your details Diet plan & health check_up system </title>

    <!--link- style sheets-->
<link rel="stylesheet" href="../css/voucher.css">

<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css">
<link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css">


</head>
<body>
    <!--header section starts-->
    <header>
        <div id="menu-bar" class="fas fa-bars"></div>
        <td width="500" height="150"><p align="left"><img src="Img/logo.png" width="100" height="50" alt="logo"></p></td>
    
        <nav class="navbar">
            <a href="../index.html">Home</a>
            <a href="./about us.html">About us</a>
            <div class="dropdown">
                <button class="dropbtn">services
                    <i class="fa fa-caret-down"></i>
                </button>  
                <div class="dropdown-content">
                    
                    <li type="none"><h1>Customer committment</h1></li>
                    <a href="../customer service  plan.html">Customer service plan</a>
                    
                    <li type="none"><h1>Special Assistance</h1></li>
                   
                    <a href="./medical-information.html">medical Information</a>
                    
        
        
        
                </div></div>
            
        <div class="dropdown">
            <button class="dropbtn">payment
                <i class="fa fa-caret-down"></i>
            </button>  
            <div class="dropdown-content">
           
                <li type="none"> <h1>Payment Option</h1></li>
                <a href="../html/payment.html">Online and offline payment option</a>
                <a href="../html/voucher.html">Redeem your travel voucher</a>
               
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


<br /><br /><br /><br /><br /><br /><br /><br />
<?php

// Process the form submission
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Retrieve form data
    $Name = $_POST["Name"];
    $VNumber = $_POST["VNumber"];
    $Email = $_POST["Email"];
    $Plan = $_POST["Plan"];
    $Reason = $_POST["Reason"];
    $Date = $_POST["Date"];
    $Phone_Number = $_POST["Phone_Number"];
    $Payment_Type = $_POST["Payment_Type"];


   
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
        $stmt = $conn->prepare("INSERT INTO Voucher (Name, VNumber, Email, Plan, Reason, Date, Phone_Number, Payment_Type ) VALUES ('$Name', '$VNumber', '$Email','$Plan', '$Reason', '$Date', '$Phone_Number', '$Payment_Type' )");
        
        $stmt->execute();

        



        echo "<h1> Successfully Done</h1>";
        echo "<a href='../html/login.html'>Login Account </a>";
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
                <a href="#">About us</a>
                <a href="#">Our community</a>
                <a href="#">Careers</a>
            </div>
            <div class="box">
                <h3>Help</h3>
                <a href="#">24 hours contact center</a>
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
<script src="../js/voucher.js"></script>

</body>
</html>
