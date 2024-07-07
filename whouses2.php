<!DOCTYPE html>
<html lang="en">
<head>
  <title>Warehouses</title>
  <meta charset="utf-8">
   <link rel="stylesheet" type="text/css" href="table.css">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
  <!--Favicon-->
  <link href="data: image/x-icon;base64,AAABAAEAEBAQAAEABAAoAQAAFgAAACgAAAAQAAAAIAAAAAEABAAAAAAAgAAAAAAAAAAAAAAAEAAAAAAAAAAAAAAA/4QAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAEREREREREREQAAAAAAAAARAAAAAAAAABEAAAAAAAAAEQAAAAAAAAARAAAAAAAAABEAAAAAAAAAEQAAAAAAAAARAAAAAAAAABERERERERERERAAAAAAAAEQEQAAAAAAEQABEQAAABEQAAABEQAREAAAAAABERAAAAAAAAARAAAAAAAAAAf/4AAH++AAB8PgAAez4AAHo+AAB7/gAAfD4AAH/+AAAAAAAAP/wAAJ/5AADH4wAA8Y8AAPw/AAD+fwAA" rel="icon" type="image/x-icon">
<body>

<nav class="navbar navbar-inverse">
  <div class="container-fluid">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>                        
      </button>
      <a class="navbar-brand" href="#">Godon</a>
    </div>
    <div class="collapse navbar-collapse" id="myNavbar">
      <ul class="nav navbar-nav">
        <li class="active"><a href="home.php">Home</a></li>
        <li class="dropdown">
          <a class="dropdown-toggle" data-toggle="dropdown" href="#">Warehouses <span class="caret"></span></a>
          <ul class="dropdown-menu">
            <li><a href="whouses.php">Warehouses</a></li>
            <li><a href="rating.php">Rating</a></li>
          </ul>
        </li>

        <li><a href="owner.php">Warehouse Owners</a></li>
        <li class="dropdown">
          <a class="dropdown-toggle" data-toggle="dropdown" href="#">Business Owners<span class="caret"></span></a>
          <ul class="dropdown-menu">
            <li><a href="tenant.php">Businesses</a></li>
            <li><a href="members.php">Business Signatories</a></li>
          </ul></li>
        <li><a href="booking.php">Booking</a></li>
        
      </ul>
      <ul class="nav navbar-nav navbar-right">

         <li><a href="#"><span class="glyphicon glyphicon-user"></span>Hi <?php session_start();echo $_SESSION['uname'];?></a>
         </li>
        <li><a href="index.html"><span class="glyphicon glyphicon-user"></span> Sign Out</a></li>
      </ul>
    </div>
  </div>
</nav>

 &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <a href="whouses.php" class='btn btn-primary'>Hide Ratings</a><br><br>
<div class="container">
  <table border="1" id="customers">
    <tr>
    <th>Warehouse ID</th>
      <th>Warehouse Owner ID</th>
      <th>Dimensions(sqft)</th>
      <th>Address</th>
      <th>County</th>
      <th>Town</th>
      <th>Country</th>
      <th>Description</th>
      <th>Warehouse Owner Rating</th>
      <th>Picture of the warehouse</th>
      <th>Business Owners Rating</th>
      <th>Comments</th>
    </tr>
<?php
include("connection.php");
$query="select * from house h join rating r on h.id=r.id ";
$data=mysqli_query($conn,$query);
while($result=mysqli_fetch_assoc($data))
{
 echo "<tr><td>".$result['id']."</td><td>".$result['owner_id']."</td><td>".$result['no_of_rooms']."</td><td> ".$result['address']."</td><td>";
echo  $result['city']."</td><td>".$result['state']."</td><td>".$result['country']."</td><td> ".$result['description']."</td><td>".$result['rate']."</td><td>";
echo '<img src="data:pics/jpeg;base64,'.base64_encode( $result['pics'] ).'"/>';
echo "</td><td>".$result['rating']."</td><td>".$result['comment'];
echo "</td></tr>";
}
echo "</table>";
?>
</div>
</body>
</html>
