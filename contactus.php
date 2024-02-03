<!DOCTYPE html>
<html>
    <head>
        <title>Contact Us</title>
        <link rel="stylesheet" href="contactus.css">
    </head>

    <body>
        <header class="headerContainer">
            <div class="logoand">
                <a href="index.php"> 
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
        
        <main>
            <div class="contacttext">
                <h2>
                    Don't be shy, send a message!
                </h2>
                <br>
                <p>
                    Contact one of our agents for more detailed information:
                </p>
            </div>
            <form id="myForm" class="contactus" onsubmit="return validateForm()">
                <p class="contactp">Contact Us</p>
                <br>
                <div class="login">
                    <input type="text" placeholder="Name" class="input" id="name">
                    <input type="email" placeholder="Email" class="input" id="email">
                </div>
        
                <div class="subject">
                    <input type="text" placeholder="Title" class="input" id="title">
                </div>
        
                <div class="msg">
                    <textarea class="area" placeholder="Message" id="message"></textarea>
                </div>
        
                <div>
                    <button type="submit" class="btn">Send message</button>
                </div>
            </form>
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
        <script src="contactus.js"></script>
    </body>
</html>