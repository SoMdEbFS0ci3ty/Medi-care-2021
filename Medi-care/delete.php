<?php 
include('connection.php');
if(isset($_GET['id']))
{

	$id=$_GET['id'];
	$sql="DELETE from `hospital_info` where id=$id ";
	$result=mysqli_query($db,$sql);
	if($result){
		echo "Deleted Successfully";
	header('location: h_admin.php');
}

else{
	die(mysqli_error($db));
}
}
?>
