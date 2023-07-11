<!DOCTYPE html>
<html>
  <head>
    <link rel="stylesheet" href="CSS/universal.css">
    <title>Contact Us</title>
    <META NAME="robots" CONTENT="noindex">
  </head>
<body>
  <header class="main-header">
    <div id="identifier">
      <a href="index.html">
        <img id="logo-mainNav" src="./Assets/logo 2.png" alt="">
      </a>
    </div>
    <nav>
      <ul>
        <li><a href = "index.html">Home</a></li>
        <li><a href = "portfolio.html">Portfolio</a></li>
        <li><a href = "contact.html" class="currentPage">Contact</a></li>
        <li><a href = "about.html">About</a></li>
        <div class="mainNav-dropdownList">
             <li><a href = "about.html">Services</a></li>
             <div class="mainNav-dropdownItems">
                <a href="services/custom homes.html">Custom Homes</a> <br>
                <a href="Services/remodeling.html">Remodels</a><br>
                <a href="services/additions.html">Additions</a><br>
                <a href="services/ADU.html">ADUs</a>
            </div>
        </div>
      </ul>
    </nav>
  </header>

<section class="container">
Thank you! Your message has been sent and will be responded to as soon as possible.
<br>
<a href="index.html">Return to homepage</a>
</section>


<?php 
#This script handles form data.
#Needs security against spam tho.
#Before deployment we also need form validation.
$name = $_POST['name'];
$email = $_POST['email'];
$project = $_POST['project'];
$message = $_POST['message'];
    
$to = "getallphase@gmail.com";
$intro = "$name has a question about $project,  his/her email address is $email";

mail($to, $name, $message, $intro);
?>    

<footer class="mobileNav-bar hide-desktop">
    <ul>
     <li><a href="index.html">Home</a></li>
     <li><a href="portfolio.html">Portfolio</a></li>
     <li><a href="contact.html">Contact</a></li>
     <li><a href="about.html">About</a></li>
    </ul>
</footer>

      
<footer class="pageFooter hide">
  <nav class="footer-flexbox">
    <ul class="footer-module">
      <li><a href = "index.html">- Home</a></li>
      <li><a href = "portfolio.html">- Portfolio</a></li>
      <li><a href = "contact.html">- Contact</a></li>
      <li><a href = "about.html">- About</a></li>
    </ul>
    <ul class="footer-module">
      <li id="facebook"><a href="https://www.facebook.com/getallphase/" target="_blank"><img src="./Assets/Facebook.png" alt="Facebook"></a></li>
      <li id="instagram"><a href="https://www.instagram.com/all_phase_vanc_wa/" target="_blank"><img src="./Assets/Instagram.png" alt="instagram"></a></li>
    </ul>
  </nav>
  <p>
    &copy; This website is legal property of W2 Construction, LLC (tradename All Phase).
  </p>
</footer>
    
</body>
</html>
