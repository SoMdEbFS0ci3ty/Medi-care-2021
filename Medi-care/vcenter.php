<html>
<head>
  <title>Vaccination Center</title>
  <style>
    body{
      background-color:ghostwhite;
    }
    table,th,td{
      border: 2px solid black;
      width: 1100px;
      background-color: lemonchiffon;
    }
    .btn{
      width: 30%;
      height: 5%;
      font-size: 22px;
      padding: 0px;
    }
  </style>

</head>
<body>
  <center>
    <h1>Search Your nearby Vaccination Centers in Your District</h1>

    <div class="container">
      <h1>7 Districts Added till now</h1>
      <h2>User Will Search By District Ids Described below :-</h2>
      <table>
        <tr>
          
          <th><h3>District ID</h3></th>
          </tr><br>
        <tr>
            <td>1.Alipurduar</td>
            <td>2.Bankura </td>
            <td>3.Cooch Behar</td>
            <td>4.Darjeeling</td>
            <td>5.Kalimpong</td>
            <td>6.Nadia</td>
            <td>7.North 24 Parganas</td>
          </tr>
        </table><br><br><br>
      <form action="" method="POST">
        <input type="text" name="District" class="btn" placeholder="Enter your district">
        <input type="submit" name="search" class="btn" value="search your district">
      </form>
      <table>
        <tr>
          <th>SlNo</th>
          <th>District</th>
          <th>NameofCVCSite</th>
          <th>NameofCVCManager</th>
          <th>MobileNoofCVCManager</th>
          <th>Address</th>
          <th>Typeofvaccine</th>
        </tr><br>

      <?php
      $connection = mysqli_connect("localhost","root","");
      $db = mysqli_select_db($connection,'medi_care');

      if(isset($_POST['search']))
      {
        $District = $_POST['District'];

        $query = "SELECT * FROM `vc` where District='$District'";
        $query_run = mysqli_query($connection,$query);

        while($row = mysqli_fetch_array($query_run))
        {
          ?>
          <tr>
            <td> <?php echo $row['SlNo'] ?></td>
            <td> <?php echo $row['District'] ?></td>
            <td> <?php echo $row['NameofCVCSite'] ?></td>
            <td> <?php echo $row['NameofCVCManager'] ?></td>
            <td> <?php echo $row['MobileNoofCVCManager'] ?></td>
            <td> <?php echo $row['Address'] ?></td>
            <td> <?php echo $row['Typeofvaccine'] ?></td>
          </tr>

          <?php
        }
      }
      ?>
      </table>
    </div>
  </center>

</body>
</html>