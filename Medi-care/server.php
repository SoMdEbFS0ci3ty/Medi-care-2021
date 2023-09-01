<?php
session_start(); 
$h_name="";
$h_address="";
$ph1="";
$email="";
$Crt_tbed="";
$Crt_ocbed="";
$Crt_avlbed="";
$Crt_to2="";
$Crt_oco2="";
$Crt_avlo2="";
$username="";
$password ="";
$password_2 ="";
$errors = array(); 
include('connection.php');
//REGISTER
if (isset($_POST['reg_user'])) 
{
  // receive all input values from the form
  $h_name=mysqli_real_escape_string($db, $_POST['h_name']);
  $h_address=mysqli_real_escape_string($db, $_POST['h_address']);
  $ph1=mysqli_real_escape_string($db, $_POST['ph1']);
  $email=mysqli_real_escape_string($db, $_POST['email']);
  $Crt_tbed=mysqli_real_escape_string($db, $_POST['Crt_tbed']);
  $Crt_ocbed=mysqli_real_escape_string($db, $_POST['Crt_ocbed']);
  $Crt_avlbed=mysqli_real_escape_string($db, $_POST['Crt_avlbed']);
  $Crt_to2=mysqli_real_escape_string($db, $_POST['Crt_to2']);
  $Crt_oco2=mysqli_real_escape_string($db, $_POST['Crt_oco2']);
  $Crt_avlo2=mysqli_real_escape_string($db, $_POST['Crt_avlo2']);
  $username = mysqli_real_escape_string($db, $_POST['username']);
  $password = mysqli_real_escape_string($db, $_POST['password']);
  $password_2 = mysqli_real_escape_string($db, $_POST['password_2']);
  if($password!=$password_2){  array_push($errors,"Passwords unmatched!");
}



  $user_check_query = "SELECT * FROM hospital_info WHERE username='$username' OR email='$email' LIMIT 1";
  $result = mysqli_query($db, $user_check_query);
  $user = mysqli_fetch_assoc($result);
  
  if ($user) { // if user exists
    if ($user['username'] === $username) {
      array_push($errors, "Username already exists");
    }

    if ($user['email'] === $email) {
      array_push($errors, "email already exists");
    }    
  }

  // Finally, register user if there are no errors in the form
  if (count($errors) == 0) 
    {
      $query = "INSERT INTO hospital_info(h_name,h_address,ph1,email,Crt_tbed,Crt_ocbed,Crt_avlbed,Crt_to2,Crt_oco2,Crt_avlo2,username,password)VALUES('$h_name','$h_address','$ph1','$email','$Crt_tbed','$Crt_ocbed','$Crt_avlbed','$Crt_to2','$Crt_oco2','$Crt_avlo2','$username','$password')"; 
     mysqli_query($db, $query); 
     header('location: login.php'); 
        }

}

//LOGIN
if (isset($_POST['login_user'])) {
  $username = mysqli_real_escape_string($db, $_POST['username']);
  $password = mysqli_real_escape_string($db, $_POST['password']);
  if (count($errors) == 0) {
    //$password = md5($password);
    $query = "SELECT * FROM hospital_info WHERE username='$username' AND password='$password'";
    $results = mysqli_query($db, $query);
    if (mysqli_num_rows($results) == 1) {
      $_SESSION['username'] = $username;
      $_SESSION['success'] = "You are now logged in";
      header('location: h_admin.php');
    }else {
      array_push($errors, "Wrong username/password combination");
    }
  }
}
?>