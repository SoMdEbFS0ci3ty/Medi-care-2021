<?php include('server.php') ?>
<!DOCTYPE html>
<html>
<head>
  <link rel="shortcut icon" href="img/favicon.jpg" type="image/x-icon">
  <title>Login</title>
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.7.2/animate.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.14.0/css/all.min.css" integrity="sha512-1PKOgIY59xJ8Co8+NE6FZ+LOAZKjy+KY8iq0G4B3CyeY6wYHN3yt9PW0XpSriVlkMXe40PTKnXrLnZ9+fkDaog==" crossorigin="anonymous" />
    <link rel="stylesheet" href="plugins/mixup-icon/style.css">
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
  <link rel="stylesheet" type="text/css" href="form-content.css">
  <!--<link rel="stylesheet" type="text/css" href="style.css">-->
</head>
<body style="background-image: url(img/pic3.jpeg);  -webkit-background-size: cover;
  -moz-background-size: cover;
  -o-background-size: cover;
  background-size: cover;">
  
 <section id="backl">
    <div class="header"  style="background-image: url(img/form.png);background-size: cover;" >
    <h2>Login as Hospital Authority</h2>
  </div>   
  <div class="content">
    <form method="post" action="login.php"> 

    <?php include('errors.php'); ?> 

    <div class="input-group"data-aos="fade-right" data-aos-offset="300"data-aos-easing="ease-in-sine">

      <label>Username</label>
      <input type="text" name="username" placeholder="Enter Username"required>
    </div>
   
    <div class="input-group"data-aos="fade-left" data-aos-anchor="#example-anchor"data-aos-offset="500"
     data-aos-duration="500">
      <label>Password</label>
      <input type="password" name="password" placeholder="Enter Password" required>
    </div>

    <div class="input-group">
      <button type="submit" class="btn" name="login_user" href="h_admin.php">Login</button>
    </div>

    <p>
      Not yet a member? <a href="register.php">Sign up</a>
    </p>
  </form>
</div>
 <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
 <script>
  AOS.init();
</script>
<!--
 <footer class="footer" data-aos="fade-up">
     <div class="container">
      <div class="row">
        <div class="footer-col">
          <h4>Medi-Care</h4>
          <ul>
            <li><a href="#">about us</a></li>
            <li><a href="#">our services</a></li>
            <li><a href="#">privacy policy</a></li>
            <li><a href="#">affiliate program</a></li>
          </ul>
        </div>
        <div class="footer-col">
          <h4>get help</h4>
          <ul>
            <li><a href="#">FAQ</a></li>
            <li><a href="#">shipping</a></li>
            <li><a href="#">returns</a></li>
            <li><a href="#">order status</a></li>
            <li><a href="#">payment options</a></li>
          </ul>
        </div>
        <div class="footer-col">
          <h4>Medi-Cart</h4>
          <ul>
            <li><a href="#">Medicines</a></li>
            <li><a href="#">Medical Equipments</a></li>
            <li><a href="#">Medical Supplies</a></li>
     
          </ul>
        </div>
        <div class="footer-col">
          <h4>follow us</h4>
          <div class="social-links">
            <a href="#"><i class="fab fa-facebook-f"></i></a>
            <a href="#"><i class="fab fa-twitter"></i></a>
            <a href="#"><i class="fab fa-instagram"></i></a>
            <a href="#"><i class="fab fa-linkedin-in"></i></a>
          </div>
        </div>
      </div>
     </div>
  </footer>
</section>-->
</div>
 </section>

</body>
</html>