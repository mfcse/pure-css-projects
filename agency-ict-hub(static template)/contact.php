<?php
require('logic/create_message.php');

// echo "hello";
 ?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="https://fonts.googleapis.com/css?family=Lato|Patua+One&display=swap" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css2?family=Merienda&family=Poppins:wght@100;300;400&display=swap" rel="stylesheet">
  <script src="https://kit.fontawesome.com/46238e9440.js" crossorigin="anonymous"></script>
  <link rel="stylesheet" href="css/style.css">
  <link rel="stylesheet" href="css/testimonial.css">
  <link rel="stylesheet" href="css/responsive.css">
  <title>Contact Us</title>
</head>
<body>
<header>
    <h2><a href="index.html">ICT HUB</a></h2>
    <nav>
      <li><a href="index.html">Home</a></li>
      <li><a href="about.html">About</a></li>
      <li><a href="contact.php">Contact</a></li>
      <li><a href="contact-messages.php">Client Responses</a></li>
    </nav>
  </header>
  
  <!-- image slider -->
  <section class="image-slider">
    <div class="slideshow-container">

      <div class="mySlides fade">
        <div class="numbertext">1 / 3</div>
        <img src="images/image01.jpg" style="width:100%">
        <div class="text">Lorem ipsum dolor sit amet.</div>
      </div>
      
      <div class="mySlides fade">
        <div class="numbertext">2 / 3</div>
        <img src="images/image02.jpg" style="width:100%">
        <div class="text">Lorem ipsum dolor sit amet.</div>
      </div>
      
      <div class="mySlides fade">
        <div class="numbertext">3 / 3</div>
        <img src="images/image01.jpg" style="width:100%">
        <div class="text">Lorem ipsum dolor sit amet.</div>
      </div>
      
      <a class="prev" onclick="plusSlides(-1)">&#10094;</a>
      <a class="next" onclick="plusSlides(1)">&#10095;</a>
      
      </div>
      <br>
      
      <div style="text-align:center">
        <span class="dot" onclick="currentSlide(1)"></span> 
        <span class="dot" onclick="currentSlide(2)"></span> 
        <span class="dot" onclick="currentSlide(3)"></span> 
      </div>
  </section>
  
  <section class="contact-area" id="contact">
    <h3 class="section-title">Contact</h3>
    <ul class="contact-content">
      <li>
        <i class="fa fa-map-marker"></i>
        <p>247 Westwood Lane</p>
      </li>
      <li>
        <i class="fa fa-phone"></i>
        <p>+88018100000<br>+880171000000</p>
      </li>
      <li>
        <i class="fa fa-envelope"></i>
        <p>info@mail.com<br>hello@web.com</p>
      </li>
    </ul>
  </section>
  <!-- contact form area -->
  <section id="contact-form-area">
    <div class="wrapper">
      <form action="<?php $_SERVER['PHP_SELF']; ?>" method="POST" class="form-area">
        <div class="msg-area">
          <label for="msg">Message</label>
          <textarea id="msg" name="msg"></textarea>
        </div>
        <div class="details-area">
          <label for="fname">First Name</label>
          <input type="text" name="fname" id="fname">

          <label for="lname">Last Name</label>
          <input type="text" name="lname" id="lname">

          <label for="email">Email</label>
          <input type="email" name="email" id="email">
          <button type="submit" name="submit">Submit</button>
        </div>

      </form>
    </div>
  </section>
  
   
<!-- footer section -->
<footer class="footer">
  <div class="l-footer">
    <h1>ICT HUB</h1>
    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Eveniet, nesciunt!</p>
  </div>
  <ul class="r-footer">
    <li>
      <h2>Explore</h2>
        <ul class="footer-box">
          <li><a href="index.html">Home</a></li>
    <li><a href="about.html">About</a></li>
    <li><a href="contact.html">Contact</a></li>
        </ul>
    </li>
    <li class="features">
      <h2>Need Help?</h2>
      <ul class="footer-box h-box">
        <li><a href="#">Lorem</a></li>
        <li><a href="#">Lorem</a></li>
        <li><a href="#">Lorem</a></li>
        <li><a href="#">Lorem</a></li>
      </ul>
    </li>
    <li>
      <h2>Legal</h2>
      <ul class="footer-box">
        <li><a href="#">Privacy Policy</a></li>
        <li><a href="#">Terms</a></li>
        <li><a href="#">Conditions</a></li>
      </ul>
    </li>
  </ul>
  <div class="b-footer">
    <p>All rights reserved &copy; ICTHUB 2020. Content is available under  licenses.</p>
  </div>
  
</footer>



  <script src='plugin-frameworks/jquery-3.2.1.min.js'></script>
    <script src='http://cdn.jsdelivr.net/jquery.slick/1.6.0/slick.min.js'></script>
    <script src="http://malsup.github.com/jquery.cycle2.js"></script>
      <script  src="js/function.js"></script>
</body>
</html>