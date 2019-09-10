<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Khronos</title>
    <link rel="stylesheet" href="assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/css/style.css">
    <link rel="stylesheet" href="assets/css/animate.css">
    <link rel="stylesheet" href="assets/css/responsive.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.2/css/all.css" />
</head>
<body>

  <nav class="navbar navbar-expand-lg navbar-light fixed-top">
    <a href="#"><img class="navbar-brand" src="assets/img/kronos.png" alt=""></a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
          <i class="fas fa-bars nav-icon"></i>
      </button>
         <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav ml-auto">
               <li class="nav-item">
                 <a class="nav-link" href="index.php">Home</a>
               </li>
               <li class="nav-item">
                 <a class="nav-link" href="about.php">About</a>
               </li>
               <li class="nav-item">
                 <a class="nav-link" href="service.php">Services</a>
               </li>
               <li class="nav-item">
                   <a class="nav-link active" href="contact.php">Contact <span class="sr-only">(current)</span></a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="cart.php"><i class="fas fa-shopping-cart"></i></a>
               </li>
            </ul>
         </div>
</nav>


<!-- Breadcrumb -->

<section id="breadcrumb">
    <div class="container">
    <h1 class="breadcrumb-h1 text-center">Contact</h1>
    </div>
</section>

<div class="contact-detail">
  <div class="container">
    <div class="row">
      <div class="col-md-4"> 
        <div class="">
          <h4><i class="fa fa-home"></i> Address:</h4>
          <p class="desc">No. 5a, Pinnock Beach Estate, Jakande Lekki, Lagos</p>
        </div>
      </div>
      <div class="col-md-4"> 
        <div class="">
          <h4><i class="fa fa-phone"></i> Phones:</h4>
          <p class="desc">(+234) 9091646111</p>
        </div>
      </div>
      <div class="col-md-4"> 
        <div class="">
          <h4><i class="fa fa-envelope"></i> E-mail:</h4>
          <p class="desc">info@kronos.com</p>
        </div>
      </div>
    </div>
  </div>
</div>




 <section id="contact">
  <div class="container">      
    <div class="row">
      <div class="col-md-7">
        <iframe src="https://maps.google.com/maps?q=lekki%20phase%201&t=&z=13&ie=UTF8&iwloc=&output=embed" width="100%" height="315" frameborder="0" style="border:0" allowfullscreen></iframe>
      </div>

      <div class="col-md-5">
          <h4><strong>Get in Touch</strong></h4>
        <form action="http://localhost/kronos/contact.php" method="POST">
          <div class="form-group">
        <?php
        
        if (isset($_POST["button"])) {
            $name = $_POST["name"];
            $email = $_POST["email"];
            $subject = $_POST["subject"];
            $message = $_POST["message"];
            $to = "afriviral.gmail.com";
            $header = "From:" . $email . "\r\n";
            
            if (empty($name) OR empty($email) OR empty($subject) OR empty($message)) {
              echo '<div class="error-msg">Email sending failed...</div>';
            }else {
              mail($to, $header, $subject, $message);
              echo '<div class="success-msg"Email successfully sent...</div>';
            }
            
           
        }
        
        ?>
          </div>
          <div class="form-group">
            <input type="text" class="form-control" name="name" value="" placeholder="Name">
          </div>
          <div class="form-group">
            <input type="text" class="form-control" name="subject" value="" placeholder="Subject">
          </div>
          <div class="form-group">
            <input type="email" class="form-control" name="email" value="" placeholder="Email">
          </div>
          <div class="form-group">
            <textarea class="form-control" name="message" rows="3" placeholder="Message"></textarea>
          </div>
          <button class="btn btn-default" type="submit" name="button">
              <span class="fa fa-paper-plane" aria-hidden="true"></span> Submit
          </button>
        </form>
      </div>
    </div>
  </div>
</section>



<footer class="footer">
  <div class="container">
    <div class="row">
      <div class="col-lg-3">
          <h5 class="footer-h5">About Us</h5>
          <p class="footer-p">Kronos provides high-quality robots,that help customers thrive in the manufacturing industry by offering effective robotic solutions to support their automation needs.</p>
          <div class="footer-social wow fadeInUp" data-wow-delay="0.4s">
            <a class="footer-fa" href="#"><i class="fab fa-facebook-square"></i></a>
            <a class="footer-fa" href="#"><i class="fab fa-twitter"></i></a>
            <a class="footer-fa" href="#"><i class="fab fa-instagram"></i></a>
            <a class="footer-fa" href="#"><i class="fab fa-linkedin"></i></a>
        </div>
      </div>
      <div class="col-lg-3">
        <h5 class="footer-h5">Quick Links</h5>
        <ul class="footer-ul">
          <li><a class="footer-a" href="index.php">Home</a></li>
          <li><a class="footer-a" href="about.php"php>About</a></li>
          <li><a class="footer-a" href="services.php">Services</a></li>
          <li><a class="footer-a" href="cart.php">Cart</a></li>
        </ul>
      </div>
      <div class="col-lg-3">
        <h5 class="footer-h5">Privacy &amp; TOS</h5>
        <ul class="footer-ul">
          <li><a class="footer-a" href="#">Privacy Policy</a></li>
          <li><a class="footer-a" href="#">Terms of Service</a></li>
          <li><a class="footer-a" href="#">Payment Policy</a></li>
        </ul>
      </div>
      <div class="col-lg-3">
        <h5 class="footer-h5">Contact Us</h5>
        <p class="contact-p">5a Pinnock, Jakande, Lagos</p>
        <p class="contact-p">+234 (0)909164611</p>
        <p class="contact-p">support@kronos.com</p>
      </div>
    </div>
  </div>
  <hr>
  <p class="copyright text-center"><strong>Copyright 2019 Kronos</strong></p>
</footer>

<script src="assets/js/main.js"></script>
<script src="assets/js/wow.js"></script>
<script> new WOW().init(); </script>
<script src="assets/js/bootstrap.min.js"></script>
<script src="assets/js/jquery-3.4.1.min.js"></script>
<script src="assets/js/jquery.slim.min.js"></script>
<script src="assets/js/bootstrap.bundle.min.js"></script>
</body>
</html>