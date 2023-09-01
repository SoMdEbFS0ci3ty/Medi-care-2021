<?php
if (isset($_GET['logout'])) {
  	session_destroy();
  	unset($_SESSION['username']);
  	//<a href="login.php">Sign in</a>
  }?>
<!DOCTYPE HTML>
<html>
<title>LOGOUT</title>
<head>
	<link rel="shortcut icon" href="img/favicon.jpg" type="image/x-icon">
<meta charset="utf-8">
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.7.2/animate.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.14.0/css/all.min.css" integrity="sha512-1PKOgIY59xJ8Co8+NE6FZ+LOAZKjy+KY8iq0G4B3CyeY6wYHN3yt9PW0XpSriVlkMXe40PTKnXrLnZ9+fkDaog==" crossorigin="anonymous" />
    <link rel="stylesheet" href="plugins/mixup-icon/style.css">
    <!--<link rel="stylesheet" href="form-content.css">-->
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
</head>
<body> <style>
@import url('https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,200&display=swap');
*{
  margin: 0;
  padding: 0;
  font-family: 'Poppins', sans-serif;
}
body {
	font-size: 120%;
  background: linear-gradient(black, honeydew);
  background-image: url('img/pic1.jpg');
  background-size: 100% auto;}
  .th{
  	color: black;
  	text-align: right;
  	margin: 150px;
  	padding: 20px;
  }
  .y{
  	color: red;
  	margin: 50px;
  	padding: 20px;
  }
  .c{
  	color: forestgreen;
  	margin: 50px;
  	padding: 20px;
  }
</style>
	
		<center><div class="y">Your Session is Successfully Unset <br><br><br></div>
		<div class="c"> <a href="index.php">Click Here To Redirect to HOME PAGE OF MEDI-CARE</a></div></center><br><br>
		<div class="th">Thank You For Your Precious Time</div>
	</body>
	</html>