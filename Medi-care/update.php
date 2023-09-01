<?php include('connection.php');
include('server.php');
 ?>
<!DOCTYPE html>
<html>
<head>
  <title>UPDATE</title>
  <link rel="shortcut icon" href="img/favicon.jpg" type="image/x-icon">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.7.2/animate.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.14.0/css/all.min.css" integrity="sha512-1PKOgIY59xJ8Co8+NE6FZ+LOAZKjy+KY8iq0G4B3CyeY6wYHN3yt9PW0XpSriVlkMXe40PTKnXrLnZ9+fkDaog==" crossorigin="anonymous" />
    <link rel="stylesheet" href="plugins/mixup-icon/style.css">
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
  <link rel="stylesheet" type="text/css" href="form-content.css">
  
</head>
<body style="background-image:url(img/pic2.jpg); background-size: 100%;">
  <?php
  //Get ID
  $id = $_GET['id'];
  $sql="SELECT * from `hospital_info` where `id`=$id";
  //Fetching records from database
  $result=mysqli_query($db,$sql);
  $row_num = mysqli_num_rows($result);
  if($row_num>0){
  $row=mysqli_fetch_assoc($result);
  $id=$row['id'];
  $h_name=$row['h_name'];
  $h_address=$row['h_address'];
  $ph1= $row['ph1'];
  $email= $row['email'];
  $Crt_tbed=$row['Crt_tbed'];
  $Crt_ocbed=$row['Crt_ocbed'];
  $Crt_avlbed=$row['Crt_avlbed'];
  $Crt_to2=$row['Crt_to2'];
  $Crt_oco2=$row['Crt_oco2'];
  $Crt_avlo2=$row['Crt_avlo2'];
  $username = $row['username'];
  $password = $row['password'];
}
  //UPDATE
if(isset($_POST['upd_usr'])){ 
    $id=$_POST['id'];
    $h_name=$_POST['h_name'];
  $h_address=$_POST['h_address'];
  $ph1= $_POST['ph1'];
  $email= $_POST['email'];
  $Crt_tbed=$_POST['Crt_tbed'];
  $Crt_ocbed=$_POST['Crt_ocbed'];
  $Crt_avlbed=$_POST['Crt_avlbed'];
  $Crt_to2=$_POST['Crt_to2'];
  $Crt_oco2=$_POST['Crt_oco2'];
  $Crt_avlo2=$_POST['Crt_avlo2'];
  $username = $_POST['username'];
  $password = $_POST['password'];
  $password_2 = $_POST['password_2'];

    $Q = "UPDATE  `hospital_info` set `id` = '$id', `h_name`='$h_name',`h_address`='$h_address',`ph1`='$ph1',`email`='$email',`Crt_tbed`='$Crt_tbed',`Crt_ocbed`='$Crt_ocbed',`Crt_avlbed`='$Crt_avlbed',`Crt_to2`='$Crt_to2',`Crt_oco2`='$Crt_oco2',`Crt_avlo2`='$Crt_avlo2',`username`='$username',`password`='$password' where `id` = '$id'";
    $S  = mysqli_query($db,$Q);

if($S){
      echo"UPDATED";
      header('location:h_admin.php');
}
}
    ?>
    <div class="header"  style="background-image: url(img/form.png);background-size: cover;" >
    <h2>UPDATE</h2>
  </div>   
  <div class="content">
    <form method="post" action="update.php">
<div class="input-group" data-aos="fade-right"data-aos-offset="300"data-aos-easing="ease-in-sine">
      <label>Hospital ID</label>
      <input type="number" name="id" size=11 placeholder="Hospital Id" value="<?php echo $id;?>" required></div>
<div class="input-group" data-aos="fade-right"data-aos-offset="300"data-aos-easing="ease-in-sine">
      <label>Hospital Name</label>
      <input type="text" name="h_name" size=11 placeholder="Hospital Name" value="<?php echo $h_name;?>" required></div>
<div class="input-group" data-aos="fade-right"data-aos-offset="300"data-aos-easing="ease-in-sine">
      <label>Hospital Address</label>
      <input type="text" name="h_address" size=11 placeholder="Hospital Address" value="<?php echo $h_address;?>" required></div>   


<div class="input-group" data-aos="fade-right"data-aos-offset="300"data-aos-easing="ease-in-sine">
      <label>Phone Number</label>
      <input type="number" name="ph1" size=11 placeholder="Your Phone number" value="<?php echo $ph1;?>"required></div>

<div class="input-group"data-aos="fade-left" data-aos-anchor="#example-anchor"data-aos-offset="500"data-aos-duration="500">
      <label>E-mail</label>
      <input type="text" name="email" placeholder="Your e-mail id" value="<?php echo $email;?>"required></div>
      
<div class="input-group"data-aos="fade-right"data-aos-offset="300"data-aos-easing="ease-in-sine">
      <label>Current Total Beds</label>
      <input type="number" id="Crt_tbed" name="Crt_tbed" placeholder="Your total number of Beds" value="<?php echo $Crt_tbed;?>"required></div>

<div class="input-group"data-aos="fade-left" data-aos-anchor="#example-anchor"data-aos-offset="500"data-aos-duration="500">
      <label>Current Occupied Beds</label>
      <input type="text" id="Crt_ocbed"name="Crt_ocbed" placeholder="Your number of Beds Cylinders Occupied" value="<?php echo $Crt_ocbed;?>"required></div>
      <button onclick="myFunction()" class="btn">Check</button>
          <div class="input-group"data-aos="fade-right"data-aos-offset="300"data-aos-easing="ease-in-sine">
      <label>Current Available Beds</label>
      <input type="text" id="Crt_avlbed" name="Crt_avlbed" placeholder="Click Check button" value="<?php echo $Crt_avlbed;?>"required></input></div>

<div class="input-group"data-aos="fade-left" data-aos-anchor="#example-anchor"data-aos-offset="500"data-aos-duration="500">
      <label>Current Total Oxygen Cylinders</label>
      <input type="number" id="Crt_to2" name="Crt_to2" placeholder="Your total number of O2 Cylinders Available" value="<?php echo $Crt_to2;?>"required></div>

<div class="input-group"data-aos="fade-right"data-aos-offset="300"data-aos-easing="ease-in-sine">
      <label>Current Occupied Oxygen Cylinders</label>
      <input type="number" id="Crt_oco2" name="Crt_oco2" placeholder="Your number of O2 Cylinders Occupied" value="<?php echo $Crt_oco2;?>"required></div>
      <button onclick="myFunction()" class="btn">Check</button>
<div class="input-group"data-aos="fade-left" data-aos-anchor="#example-anchor"data-aos-offset="500"data-aos-duration="500">
      <label>Current Available Oxygen Cylinders</label>
      <input type="number" id="Crt_avlo2"name="Crt_avlo2" placeholder="Click check button!" value="<?php echo $Crt_avlo2;?>"required></div> 

<div class="input-group"data-aos="fade-right" data-aos-offset="300"data-aos-easing="ease-in-sine">

      <label>Username</label>
      <input type="text" name="username" placeholder="Your Username" value="<?php echo $username;?>"required>
    </div>

<div class="input-group"data-aos="fade-left" data-aos-anchor="#example-anchor"data-aos-offset="500"
     data-aos-duration="500">
      <label>Password</label>
      <input type="text" name="password" placeholder="Your Password" value="<?php echo $password;?>"required>
    </div>
<div class="input-group">
      <label>Confirm password</label>
      <input type="password" placeholder="Confirm password" name="password_2" value="<?php echo $password_2?>"required></div>
<div class="input-group">
      <button type="submit" class="btn" name="upd_usr" >Update</button>
    </div>

   
  </form>
</div>
 <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
 <script>
  AOS.init();
</script>
<!-- Check Button Function-->
<script>
    function myFunction(){
      
       var total = parseInt(document.getElementById("Crt_tbed").value);
    var val2 = parseInt(document.getElementById("Crt_ocbed").value);
    var ans=document.getElementById("Crt_avlbed");
    ans.value=total-val2;
    var total1 = parseInt(document.getElementById("Crt_to2").value);
    var val3 = parseInt(document.getElementById("Crt_oco2").value);
    var ans1=document.getElementById("Crt_avlo2");
  
    ans1.value=total1-val3;    
    }
  </script>

</body>
</html>