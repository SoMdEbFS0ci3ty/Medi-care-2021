<!DOCTYPE html>
<html>
<head>
<link rel="shortcut icon" href="img/favicon.jpg" type="image/x-icon">
	<meta charset="utf-8">
	<title>Medi-Care</title>
	  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.7.2/animate.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.14.0/css/all.min.css" integrity="sha512-1PKOgIY59xJ8Co8+NE6FZ+LOAZKjy+KY8iq0G4B3CyeY6wYHN3yt9PW0XpSriVlkMXe40PTKnXrLnZ9+fkDaog==" crossorigin="anonymous" />
    <link rel="stylesheet" href="plugins/mixup-icon/style.css">
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
   <link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" />
	<link rel="stylesheet" href="style2.css">
</head>

<body>
  <div class="box-area">
    <header>
      <div class="wrapper">
        <div class="logo">
          <a href="#">MediCare</a>
        </div>
        <nav>
          <a href="index.php">Home</a> <a href="#">About</a> <a href="#">Services</a> <a href="cartindex.html">Medi-cart</a> <a href="#">Contact-us</a>
        </nav>
      </div>
    </header>



  <div class="container-fluid p-0">
    <div id="carousel" class="carousel slide hero-slides" data-ride="carousel">
      <ol class="carousel-indicators">
        <li class="active" data-target="#carousel" data-slide-to="0"></li>
        <li data-target="#carousel" data-slide-to="1"></li>
        
      </ol>
      <div class="carousel-inner" role="listbox">
        <div class="carousel-item active bed">
          <div class="container h-100 d-md-block">
            <div class="row align-items-center h-100">
              <div class="col-12 col-md-9 col-lg-7 col-xl-6">
                <div class="caption animated fadeIn">
                  <h2 class="animated fadeInLeft">Bed Availability</h2>
                  <p class="animated fadeInRight">Check your nearest bed avaliablity</p>
                  <a class="animated fadeInUp btn delicious-btn" href="#check-heading">Check availability</a>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="carousel-item vacc">
          <div class="container h-100 d-md-block">
            <div class="row align-items-center h-100">
              <div class="col-12 col-md-9 col-lg-7 col-xl-6">
                <div class="caption animated fadeIn">
                  <h2 class="animated fadeInLeft">Bed Availability</h2>
                  <p class="animated fadeInRight">Book hospital beds from the best hospital near you.</p>
                  <a class="animated fadeInUp btn delicious-btn" href="#demo-heading">Covid bed Status</a>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>

      <a class="carousel-control-prev" href="#carousel" role="button" data-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="sr-only">Previous</span>
      </a>
      <a class="carousel-control-next" href="#carousel" role="button" data-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="sr-only">Next</span>
      </a>
    </div>
</div>


<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
<script type="text/javascript" scr="https://cdnjs.cloudflare.com/ajax/libs/animateCSS/1.2.2/jquery.animatecss.min.js"></script>


<section class="check" data-aos="fade-up">
  
  <div class="c-heading" style="text-align:center;">
    <div id="check-heading">
  <h1>Ch<font color="4a90e2">eck avail</font>ability </h1>
<p> Check Oxygen Cylinder Availability At Hospitals Near You </p>
  </div>
</div>
<script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>

  <script>
  AOS.init();
</script>
</section> 
<table  data-aos="fade-up" >
  <style type="text/css">
    table {
     border-collapse: collapse;
  margin-left: auto;
  margin-right: auto;
  font-size: 0.9em;
  min-width: 400px;
  border-radius: 5px 5px 0 0;
  overflow: hidden;
  box-shadow: 0 0 20px rgba(0, 0, 0, 0.15);

}
th {

  background-color: #4a90e2;
  color: #ffffff;
  text-align: left;
  font-weight: bold;
}
td {
  padding: 12px 15px;
  text-align: center;
}

th {
  padding: 12px 15px;
  text-align: center;
}

tr {
  border-bottom: 1px solid #dddddd;
}
 tr:nth-of-type(even) {
  background-color: #f3f3f3;
}
tr:last-of-type {
  border-bottom: 4px solid #4a90e2;
}

</style>

    <tr>
    <!-- <th>Serial No.</th>-->
      <th>Hospital Name</th>
      <th>Hospital Phone Number</th>
       <th>Hospital address</th>
        <th>Total bed available</th>
         <th>Occupied beds</th>
          <th>Available beds</th>
         </tr>


        
      </div>

<!-- php database for checking bedavailability ---->


         <?php
          $conn = mysqli_connect ("localhost","root","","medi_care");
          if ($conn-> connect_error)
          {
            die("Connection failed:". $conn-> connect_error);
          }
$sql= "SELECT id, h_name,ph1, h_address, Crt_tbed, Crt_ocbed, Crt_avlbed from hospital_info";
$result = $conn-> query($sql);
if ($result-> num_rows > 0)
{
  while ($row=$result-> fetch_assoc() ) {
echo  "</td><td>". $row["h_name"] ."</td><td>". $row["ph1"] ."</td><td>" .$row["h_address"] . "</td><td>". $row["Crt_tbed"]. "</td><td>".
$row["Crt_ocbed"] ."</td><td>". $row["Crt_avlbed"] ."</td></tr>";
}
  

  echo "</table>";
}
else {
  echo "0 result";
}

$conn-> close();

?>
<script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>

  <script>
  AOS.init();
</script>
</section> 


<center>
<section class="services" data-aos="fade-up">
  <!--heading---------------->
  <div class="s-heading"><br><br><br>
  <h1> <font color="#4a90e2">Bed </font>Availability </h1><br>
  <p>Book hospital beds from the best hospital near you</p><br><br>
  </div>
  </center>
<script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>

  <script>
  AOS.init();
</script>
</section>
  <div class="container">
    <div class="title"><h2 style="text-align: center;">Covid Bed Status</h2></div>
    <form action="#">
      <div class="user-details">
        <div class="input-box">
          <span class="details">Name</span>
          <input type="text" placeholder="Name of the Hospital">
        </div>
        <div class="input-box">
          <span class="details">Address</span>
          <input type="text" placeholder="Address of the Hospital">
        </div>
        <div class="input-box">
          <span class="details">Contact Person</span>
          <input type="text" placeholder="Name of the Person">
        </div>
        <div class="input-box">
          <span class="details">Contact NO</span>
          <input type="text" placeholder="Hospital Contact NO">
        </div>
        <div class="input-box">
          <span class="details">Total Bed</span>
          <input type="text" placeholder="Number of bed">
        </div>
        <div class="input-box">
          <span class="details">Vacant Bed</span>
          <input type="text" placeholder="Number of bed">
        </div>
      </div>
      <div class="beds-details">
        <input type="radio" name="beds" id="dot-1">
        <input type="radio" name="beds" id="dot-2">
        <input type="radio" name="beds" id="dot-3">
        <span class="beds-title">Beds</span>
        <div class="category">
          <label for="dot-1">
            <span class="dot one"></span>
            <span class="beds">HDU</span>
          </label>
          <label for="dot-2">
            <span class="dot two"></span>
            <span class="beds"> WARD</span>
          </label>
          <label for="dot-3">
            <span class="dot three"></span>
            <span class="beds">ICU</span>
          </label>
        </div>
      </div>
      <div class="button">
        <input type="submit" value="Book">
      </div>
    </form>
  </div>
  <footer class="footer" data-aos="fade-up">
     <div class="container">
      <div class="row">
        <div class="footer-col">
          <h4>Medi-Care</h4>
          <ul>
            <li><a href="#">about us</a></li>
            <li><a href="index.php">our services</a></li>
            <li><a href="#">privacy policy</a></li>
            <li><a href="login.php">Login As Hopital Authority</a></li>
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
            <li><a href="cartindex.html">Medicines</a></li>
            <li><a href="cartindex.html">Medical Equipments</a></li>
            <li><a href="cartindex.html">Medical Supplies</a></li>
     
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
  
</body>
</table>
</div>

</html>












