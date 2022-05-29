<html>
    <head>
        <link rel="stylesheet" type="text/css" href="LandingPage.css">
        <title>
            Island Gas Ordering System
        </title>
    </head>
<body>
<!-- Navigation bar -->
<nav class="navigation-bar">
    <div class="logo">
        <img src="island-logo.png" id="island-logo" alt="island-logo">
        <img src="island-logo1.png" id="island-logo1" alt="island-logo1">
        <img src="island-logo2.png" id="island-logo2" alt="island-logo2">
    </div>
    <ul>
        <li><a class="active" href="UserHomeRevised.php">Home</a></li>
        <li><a href="#">Product</a></li>
        <li><a href="#">Cart</a></li>
        <li><a href="#">Profile</a></li> <b>|</b>
        <?php 
            session_start();
            if($_SESSION['username']){
                echo "Welcome " .$_SESSION["username"];
            }else{
	            header("location:CustomerLoginRevised.php");
            }
        ?>
        <li><a href="logout.php">Logout</a></li>
    </ul>
</nav>
<br><br><br><br>
<div class="main-body">
<!-- Content -->
<div class="content">
    <h1>Presyong sulit! <br> Maraming gamit!</h1>
    <a href="#"><button>Order</button></a>
</div>

<!-- bg img -->
<div class="bg-img">
    <img src="bg-gas.png">
</div>

<!-- Footer -->
<footer class ="footer">
    <div class ="container">
        <div class ="row">
            <div class ="footer-col">
                <h4>Island Gas</h4>
                <ul>
                    <li><a href="Footer/CopyRights/index.html">Copyright</a></li>
                    <li><a href="Footer/PrivacyPolicy/index.html">Privacy Policies</a></li>
                    <li><a href="Footer/Terms and Conditions/index.html"> Terms and condition</a></li>
                    <li><a href="contactUs.php">Contact</a></li>
                    <li><a href="feedback.php">feedback</a></li>
                </ul>
            </div>
            <div class="footer-col">
                <h4>FAQ</h4>
                <ul>
                    <li><a href="Footer/FAQ/index.html">FAQ</a></li>
                    <li><a href="Footer/Branches/Island Gas Branches.html">Branches</a></li>
                    <li><a href="Footer/Service Area/Service Area.html">Service Area</a></li>
                    <li><a href="Footer/Payment Methods/index2.html">Payment Options</a></li>
                </ul>
            </div>
            <div class ="footer-col">
                <h4>about us</h4>
                <ul>
                    <li><a href="Footer/OurStory/index.html">Our Story</a></li>
                    <li><a href="Footer/Mission Vision/mv.html">Mission Vision</a></li>
                    <li><a href="Footer/Business/BusinessLicenses.html">Business</a></li>
          
                </ul>
            </div>
            <div class ="footer-col">
                <h4>Follow Us</h4>
                    <div class ="social-links">
                        <a href ="https://www.facebook.com/ISLANDGAS/"><i class="fab fa-facebook-f"></i></a>
                        <a href ="https://l.facebook.com/l.php?u=https%3A%2F%2Ftwitter.com%2Fgas_island%3Ft%3DwyYyWMwJLlFDSsAfEmYPGw%26s%3D07%26fbclid%3DIwAR2MpvlPoYeN8MCnPuFUFiTYQrBcYfUMxQ3wU2INJtCdy1UYUNl0TOwZpUI&h=AT2MYtMV-nDTGL9KqYoBO7EUhCP-_ruP5JPP09ru7m_y5izGM2j7o15WQDl7dtquY07VbDNB7hSFoG-thjQwIQrVSda4Afr-jNsYfmz5GEPbwC3WuAcjmM7yclqmCv4ayirk5w "><i class="fab fa-twitter"></i></a>
                        <a href ="https://www.instagram.com/p/CWSz2WlJ_ty/?utm_medium=copy_link&fbclid=IwAR0CU3RAwxB1_-JRopr2LnQd4otuz14y_z-duwiY_spcghaAZhD5aSeLkYg "><i class="fab fa-instagram"></i></a>
                    </div>
            </div>
        </div>
    </div>
</footer>
</div>
</body>
</html>