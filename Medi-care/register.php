<?php include('server.php');
include('connection.php');?>
<!DOCTYPE html>
<html>
<head>
  <title>Registration</title>
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.7.2/animate.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.14.0/css/all.min.css" integrity="sha512-1PKOgIY59xJ8Co8+NE6FZ+LOAZKjy+KY8iq0G4B3CyeY6wYHN3yt9PW0XpSriVlkMXe40PTKnXrLnZ9+fkDaog==" crossorigin="anonymous" />
    <link rel="stylesheet" href="plugins/mixup-icon/style.css">
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
  <link href="form-content.css" rel="stylesheet">
</head>
<body style="background-image: url(img/reg.jpg);-webkit-background-size: cover;
  -moz-background-size: cover;
  -o-background-size: cover;  
  background-size: cover;
">
  <div class="back">
  <div class="header"  style="background-image: url(img/form.png);background-size: cover;" >
  	<h2>Register as Hospital Authority</h2>
  </div>
	<section  data-aos="fade-up">
    <div class="content">
  <form method="post" action="register.php">
  <?php include('errors.php');?>
    <div class="input-group" data-aos="fade-right"data-aos-offset="300"data-aos-easing="ease-in-sine">
      <label>Hospital/Organisation name</label>
      <input type="text" name="h_name" placeholder="Enter Your Organisation Name " value="<?php echo $h_name;?>"required></div>
      <div class="input-group" data-aos="fade-left" data-aos-anchor="#example-anchor"data-aos-offset="500"
     data-aos-duration="500">
      <label>Address</label>
      <input type="text" name ="h_address"placeholder="Enter Your Address" value="<?php echo $h_address;?>" required></input></div>


      <div class="input-group" data-aos="fade-right"data-aos-offset="300"data-aos-easing="ease-in-sine">
      <label>Phone Number</label>
      <input type="number" name="ph1" size=11 placeholder="Enter your number" value="<?php echo $ph1;?>"required></div>

    <div class="input-group"data-aos="fade-left" data-aos-anchor="#example-anchor"data-aos-offset="500"data-aos-duration="500">
      <label>E-mail</label>
      <input type="text" name="email" placeholder="Enter your e-mail id" value="<?php echo $email;?>"required></div>
      
    <div class="input-group"data-aos="fade-right"data-aos-offset="300"data-aos-easing="ease-in-sine">
      <label>Current Total Beds</label>
      <input type="number" id="Crt_tbed" name="Crt_tbed" placeholder="Enter the total number of Beds" value="<?php echo $Crt_tbed;?>"required></div>

    <div class="input-group"data-aos="fade-left" data-aos-anchor="#example-anchor"data-aos-offset="500"data-aos-duration="500">
      <label>Current Occupied Beds</label>
      <input type="text" id="Crt_ocbed"name="Crt_ocbed" placeholder="Enter the number of Beds Cylinders Occupied" value="<?php echo $Crt_ocbed;?>"required></div>
      <button onclick="myFunction()" class="btn">Check</button>
          <div class="input-group"data-aos="fade-right"data-aos-offset="300"data-aos-easing="ease-in-sine">
      <label>Current Available Beds</label>
      <input type="text" id="Crt_avlbed" name="Crt_avlbed" placeholder="Click Check button" value="<?php echo $Crt_avlbed?>"></input></div>

        <div class="input-group"data-aos="fade-left" data-aos-anchor="#example-anchor"data-aos-offset="500"data-aos-duration="500">
      <label>Current Total Oxygen Cylinders</label>
      <input type="number" id="Crt_to2" name="Crt_to2" placeholder="Enter the total number of O2 Cylinders Available" value="<?php echo $Crt_to2;?>"required></div>

        <div class="input-group"data-aos="fade-right"data-aos-offset="300"data-aos-easing="ease-in-sine">
      <label>Current Occupied Oxygen Cylinders</label>
      <input type="number" id="Crt_oco2" name="Crt_oco2" placeholder="Enter the number of O2 Cylinders Occupied" value="<?php echo $Crt_oco2;?>"required></div>
      <button onclick="myFunction()" class="btn">Check</button>
        <div class="input-group"data-aos="fade-left" data-aos-anchor="#example-anchor"data-aos-offset="500"data-aos-duration="500">
      <label>Current Available Oxygen Cylinders</label>
      <input type="number" id="Crt_avlo2"name="Crt_avlo2" placeholder="Click check button!" value="<?php echo $Crt_avlo2;?>"></div>     
      <div class="input-group"data-aos="fade-right"data-aos-offset="300"data-aos-easing="ease-in-sine">
  	  <label>Username</label>
  	  <input type="text" placeholder="Enter Username" name="username" value="<?php echo $username; ?>"required></div> 	  
    
  	<div class="input-group"data-aos="fade-left" data-aos-anchor="#example-anchor"data-aos-offset="500"data-aos-duration="500">
  	  <label>Password</label>
  	  <input type="password" placeholder="Enter password" name="password" required >
</div>
  	<div class="input-group">
  	  <label>Confirm password</label>
  	  <input type="password" placeholder="Confirm password" name="password_2" required></div>
    
  	<div class="input-group">
  	  <button type="submit" class="btn" name="reg_user">Register</button>
  	</div>
  	<p>
  		Already a member? <a href="login.php">Sign in</a>
  	</p>
  </form>
</div>
</section>

  <script>
    function myFunction(){
      
       var total = parseInt(document.getElementById("Crt_tbed").value);
    var val2 = parseInt(document.getElementById("Crt_ocbed").value);
    var ans=document.getElementById("Crt_avlbed");
    if(total>=val2){
    ans.value=total-val2;    
  } 
    var total1 = parseInt(document.getElementById("Crt_to2").value);
    var val3 = parseInt(document.getElementById("Crt_oco2").value);
    var ans1=document.getElementById("Crt_avlo2");
  if(total1>=val3){
    
    ans1.value=total1-val3;
  }
     
    }
  </script>
 <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
  <script>
  AOS.init();
</script>
</div>
</body>
</html>