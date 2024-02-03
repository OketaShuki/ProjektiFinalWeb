<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" href="register.css">
</head>
<body>
    <header class="headerContainer">
        <div class="logoand">
            <a href="index.html"> 
                <img src="images/logop.png" alt="Logo">
            </a>
        </div>
        <div class="paragrafet">
            <a href="index.php">Home</a>
            <a href="explore.php">Explore</a>
            <a href="specialoffers.php">Special offers</a>
            <a href="register.php">Register</a>
            <a href="contactus.php">Contact us</a>
            <a href="login.php">Login</a>
        </div>
        <div class="social">
            <a href="https://www.facebook.com/"><img src="images/facebook.png" alt="Facebook"></a>
            <a href="https://www.instagram.com/"><img src="images/instagram.png" alt="Instagram"></a>
            <a href="https://www.linkedin.com/"><img src="images/linkedin.png" alt="LinkedIn"></a>
        </div>
    </header>
    <main class="loginmain">
        <div class="container">
            <div class="link-container">
                <a href="#" onclick="changeForm(1)">Register</a>
            </div>
                <div style="padding-left:35%">
                    <form action="<?php echo $_SERVER['PHP_SELF'] ?>" method="post">

                        <input type="text" name="name" placeholder="name..."> <br><br>
                        <input type="text" name="surname" placeholder="surname..."> <br><br>
                        <input type="text" name="username" placeholder="username..."><br><br>
                        <input type="text" name="password" placeholder="password..."><br><br>


                    <input type="submit" name="registerBtn" value="register"><br><br>
                    </form>
                    <?php include_once 'registerController.php';?>
                </div>
      
        </div>
    </main>
    <footer>
        <div class="footer-div">
            <div class="travel-footer">
                <h3 class="travel-titulli">ODESTINATIONS</h3>
                <p>Discover our stunning beachfront apartments, <br>each offering breathtaking views of the ocean. <br>Our accommodations range from cozy studios <br> to spacious three-bedroom units, <br>catering to various preferences. </p>
            </div>
            <div class="footer-nav">
                <h3 class="nav-titulli">Pages</h3>
                <div class="nav-elements">
                    <a href="index.php"><p >Home</p></a>
                    <a href="explore.php"><p>Explore</p></a>
                    <a href="specialoffers.php"><p>Special Offers</p></a>
                    <a href="register.php"><p>Register</p></a>
                    <a href="contactus.php"><p>Contact Us</p></a>
                    <a href="logout.php"><p>Log Out</p></a>
                </div>
            </div>
            <div class="footer-contact">
                <h3 class="nav-titulli">Contact</h3>
                <p>Kosove, Prishtine</p>
                <p>Lagja NR, Str, 10000</p>
                <div class="fcontact-a">
                    <a href="tel:5554280940">+ 123 4567 89</a>
                    <a href="mailto:info@yoursite.com">info@yoursite.com</a>
                </div>
            </div>
        </div>
        <h5 class="footer-content">ODESTINATIONS All rights reserved</h5>
    </footer>
    <script src="login.js"></script>
</body>
</html>