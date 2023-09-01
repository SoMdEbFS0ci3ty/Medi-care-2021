<?php #toke ami namaboi re.........

include('server.php');
//include('update.php');
if (!isset($_SESSION['username'])) {
  	$_SESSION['msg'] = "You must log in first";
  	header('location: login.php');
  }
  if (isset($_GET['logout'])) {
  	session_destroy();
  	unset($_SESSION['username']);
  	header('location: logout.php');//<a href="login.php">Sign in</a>
  }
?>
<!DOCTYPE HTML>
<html>
<head>
<title>Hospital Admin</title>
<link rel="shortcut icon" href="img/favicon.jpg" type="image/x-icon">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.7.2/animate.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.14.0/css/all.min.css" integrity="sha512-1PKOgIY59xJ8Co8+NE6FZ+LOAZKjy+KY8iq0G4B3CyeY6wYHN3yt9PW0XpSriVlkMXe40PTKnXrLnZ9+fkDaog==" crossorigin="anonymous" />
    <link rel="stylesheet" href="plugins/mixup-icon/style.css">
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    <link rel="stylesheet" href="hadmin.css">
</head>
<body style="background-image: url(img/Health-Tech.jpg);">
  
	<div class="admin">
		<h1>Welcome <b><?php echo"". $_SESSION['username'];?></b></h1>
    <div class="input-group">
<table class="content-table" data-aos="zoom-in" >
  <thead>
    <tr>
      <th>Id No.</th>
      <th>Hospital Name</th>
      <th>Hospital Address</th>
      <th>Phone number</th>
      <th>E-mail</th>
      <th>Current Total Beds</th>
      <th>Current Occupied Beds</th>
      <th>Current Available Beds</th>
      <th>Current Total Oxygen Cylinders</th>
      <th>Current Occupied Oxygen Cylinders</th>
      <th>Current Available Oxygen Cylinders</th>
      <th>Username</th>
      <th>Password</th>
      <th colspan="2">Operations</th>
    </tr>
  </thead>

<?php 

    // $squery= "SELECT * FROM `hospital_info` WHERE `username`='$username'";
    // $query=$db->query($squery);

    // $row=mysqli_num_rows($query);
    // $row=$db->query($query)->fetch_assoc();
    // echo ($row);
	  // if($row!=0){
	  	#while($res=mysqli_fetch_assoc($query))		  
	  	    // echo ("\n" .$row['id']." " .$row['h_name']."<br>");
  	// }
    $U =  $_SESSION['username'];
    $Q = "SELECT * FROM `hospital_info` WHERE `username` = '$U'";
    $data  = mysqli_query($db,$Q);
    $row_num = mysqli_num_rows($data);
    
    if($row_num > 0 )
    {
       while($assoc_data = mysqli_fetch_assoc($data))
      {

        ?>

  <tbody>
    <tr>
      <td><?php echo $assoc_data['id']."<br>";?></td>
      <td><?php echo $assoc_data['h_name']."<br>";?></td>
      <td><?php echo $assoc_data['h_address']."<br>";?></td>      
      <td><?php echo $assoc_data['ph1']."<br>";?></td>
      <td><?php echo $assoc_data['email']."<br>";?></td>
      <td><?php echo $assoc_data['Crt_tbed']."<br>"; ?></td>
      <td><?php echo $assoc_data['Crt_ocbed']."<br>";?></td>
      <td><?php echo $assoc_data['Crt_avlbed']."<br>";?></td>
      <td><?php echo $assoc_data['Crt_to2']."<br>";?></td>
      <td><?php echo $assoc_data['Crt_oco2']."<br>";?></td>
      <td><?php echo $assoc_data['Crt_avlo2']."<br>";?></td>
      <td><?php echo $assoc_data['username']."<br>";?></td>
      <td><?php echo $assoc_data['password']."<br>";?></td>
      <td><a href="update.php?id=<?php echo $assoc_data['id'];?>" onclick="myFunc()" class="text-dark"><i onClick="myFunc()" class="fas fa-diagnoses fa-lg" ></i>EDIT</a></td>
      <td><a href="delete.php?id=<?php echo $assoc_data['id'];?>"class="text-dark"><i onClick="myFunc()"  class="fas fa-trash-alt fa-lg"></i>DELETE</a></td>

    </tr>
    
  </tbody> 
    <?php }
    }
    else { ?>
      <tbody>
    <tr>
      <td colspan="12">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<?php echo "<br>Records Delted :)  <br>";}?></td></tr></tbody>

    
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
  <script>
  AOS.init();
</script>
</table>
</div>		      
      
    <div class="input-group">
      <button type="submit" onclick="myFunc()" class="btn1"  name="logout"><a href="logout.php">Logout</a></button></div>
    </div>
	</div>
  <script>
function myFunc() {
  var alert=confirm("ARE YOU SURE?");
 if(alert){
  return true;
}
else{
  return false;
}
</script>
</body>

</html>