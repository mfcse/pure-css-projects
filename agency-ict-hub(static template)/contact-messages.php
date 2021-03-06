<?php
require('logic/read_message.php');


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
  <link rel="stylesheet" href="css/contact-message.css">
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
      <li><a href="contact.html">Contact</a></li>
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
  <!-- contact message section -->
  <section id="contact-messages">
    <div class="container">
      <h3 class="section-title">Our Client Responses</h3>
    <table id="customers">
      <tr>
        <th>Name</th>
        <th>Email</th>
        <th>Message</th>
      </tr>


      <?php
        foreach ($posts as $key) {
         ?> 
        <tr>
        <td><?php echo $key['firstname']." ".$key['lastname']?></td>
        <td><?php echo $key['email']?></td>
        <td><?php echo $key['message']?></td>

     </tr>
<?php }
      ?>
      

<!-- 
      <tr>
        <td>Berglunds snabbköp</td>
        <td>Christina Berglund</td>
        <td>Lorem ipsum dolor sit amet consectetur adipisicing elit. Perspiciatis, officia.</td>
      </tr>
      <tr>
        <td>Centro comercial Moctezuma</td>
        <td>Francisco Chang</td>
        <td>Lorem ipsum dolor sit amet consectetur adipisicing elit. Perspiciatis, officia.</td>
      </tr>
      <tr>
        <td>Ernst Handel</td>
        <td>Roland Mendel</td>
        <td>Lorem ipsum dolor sit amet consectetur adipisicing elit. Perspiciatis, officia.</td>
      </tr>
      <tr>
        <td>Island Trading</td>
        <td>Helen Bennett</td>
        <td>Lorem ipsum dolor sit amet consectetur adipisicing elit. Perspiciatis, officia.</td>
      </tr>
      <tr>
        <td>Königlich Essen</td>
        <td>Philip Cramer</td>
        <td>Lorem ipsum dolor sit amet consectetur adipisicing elit. Perspiciatis, officia.</td>
      </tr>
      <tr>
        <td>Laughing Bacchus Winecellars</td>
        <td>Yoshi Tannamuri</td>
        <td>Lorem ipsum dolor sit amet consectetur adipisicing elit. Perspiciatis, officia.</td>
      </tr>
      <tr>
        <td>Magazzini Alimentari Riuniti</td>
        <td>Giovanni Rovelli</td>
        <td>Lorem ipsum dolor sit amet consectetur adipisicing elit. Perspiciatis, officia.</td>
      </tr>
      <tr>
        <td>North/South</td>
        <td>Simon Crowther</td>
        <td>Lorem ipsum dolor sit amet consectetur adipisicing elit. Perspiciatis, officia.</td>
      </tr>
      <tr>
        <td>Paris spécialités</td>
        <td>Marie Bertrand</td>
        <td>Lorem ipsum dolor sit amet consectetur adipisicing elit. Perspiciatis, officia.</td>
      </tr> -->
    </table>
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