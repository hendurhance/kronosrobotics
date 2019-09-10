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
    <a href="#"><img class="navbar-brand" src="http://localhost/kronos/assets/img/kronos.png" alt=""></a>
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
                   <a class="nav-link" href="contact.php">Contact</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link active" href="cart.php"><i class="fas fa-shopping-cart"></i> Cart<span class="sr-only">(current)</span></a>
               </li>
            </ul>
         </div>
</nav>

<!-- CART SYSTEM -->

<section id="cart">
  <div class="container">
    <div class="row">
   <div class="col-lg-8">
     <div class="cart-div">
       <div>
         <p class="product-p">Product</p>
         <hr class="cart-line">
       </div>
       <div class="row">
       <div class="col-lg-4">
       <div class="cart-box">
         <div class="product">
          <img src="http://localhost/kronos/assets/img/product1.jpg" alt="" class="product-img">
         </div>
        <div class="inner-cart">
          <p class="product-name">Telebot Robot</p>
          <p class="product-details">Product Details</p>
          <hr class="cart-line">
          <label for="">Size</label>
          <select name="product_size" class="form-control">
            <option>S</option>
            <option>M</option>
            <option>L</option>
            </select>
            <label for="">Color</label>
            <div class="color-option">
            <input type="radio" value="Red">Red
            <input type="radio" value="Blue">Blue
            <input type="radio" value="Red">Black
            </div>
          <label for="">Prize</label>
          <input type="number" value="1">
          <p class="product-prize">$299.99</p>
          <button class="btn btn-primary">Add to cart</button>
        </div>
       </div>
      </div>
      <!-- PRODUCT 2 -->
      <div class="col-lg-4">
       <div class="cart-box">
         <div class="product">
          <img src="http://localhost/kronos/assets/img/product1.jpg" alt="" class="product-img">
         </div>
        <div class="inner-cart">
          <p class="product-name">Telebot Robot</p>
          <p class="product-details">Product Details</p>
          <hr class="cart-line">
          <label for="">Size</label>
          <select name="product_size" class="form-control">
            <option>S</option>
            <option>M</option>
            <option>L</option>
            </select>
            <label for="">Color</label>
            <div class="color-option">
            <input type="radio" value="Red">Red
            <input type="radio" value="Blue">Blue
            <input type="radio" value="Red">Black
            </div>
          <label for="">Prize</label>
          <input type="number" value="1">
          <p class="product-prize">$299.99</p>
          <button class="btn btn-primary">Add to cart</button>
        </div>
       </div>
      </div>
      <!-- PRODUCT 3 -->
      <div class="col-lg-4">
       <div class="cart-box">
         <div class="product">
          <img src="http://localhost/kronos/assets/img/product1.jpg" alt="" class="product-img">
         </div>
        <div class="inner-cart">
          <p class="product-name">Telebot Robot</p>
          <p class="product-details">Product Details</p>
          <hr class="cart-line">
          <label for="">Size</label>
          <select name="product_size" class="form-control">
            <option>S</option>
            <option>M</option>
            <option>L</option>
            </select>
            <label for="">Color</label>
            <div class="color-option">
            <input type="radio" value="Red">Red
            <input type="radio" value="Blue">Blue
            <input type="radio" value="Red">Black
            </div>
          <label for="">Prize</label>
          <input type="number" value="1">
          <p class="product-prize">$299.99</p>
          <button class="btn btn-primary">Add to cart</button>
        </div>
       </div>
      </div>
       </div>
     </div>
   </div>
   <div class="col-lg-4">
     <div class="cart-div">
     <div>
       <p class="product-p">Shopping Cart <span class="cart-badge">1</span></p>
       <hr class="cart-line">
       <p class="cart-output text-center">Cart is empty!</p>
       <p class="cart-output text-center">Choose your products</p>
       <div class="payment-div">
       <p class="text-right">Subtotal: $0.00</p>
       <div class="pay-div">
       <button class="btn btn-warning">PAY</button>
       </div>
       </div>
     </div>
    </div>
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
          <li><a class="footer-a" href="about.php">About</a></li>
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

<script src="assets/js/jquery.smartCart.js"></script>
<script src="assets/js/wow.js"></script>
<script type="text/javascript">
        $(document).ready(function(){
            // Initialize Smart Cart    	
            $('#smartcart').smartCart({
                                submitSettings: {
                                    submitType: 'paypal' // form, paypal, ajax
                                },
                                toolbarSettings: {
                                    checkoutButtonStyle: 'paypal' // default, paypal, image
                                }
                            });
		});
    </script>
<script src="assets/js/bootstrap.min.js"></script>
<script src="assets/js/jquery-3.4.1.min.js"></script>
<script src="assets/js/jquery.slim.min.js"></script>
<script src="assets/js/bootstrap.bundle.min.js"></script>
</body>
</html>