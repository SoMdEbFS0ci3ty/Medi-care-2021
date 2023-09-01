<?php $db = mysqli_connect('localhost', 'root', '', 'medi_care');
if(!$db)
{
  die("Connection failed :" . mysqli_connect_error());
}
else
{ ?>
   <script>
  alert('Connection Successfull');
</script><?php }


