<!DOCTYPE html>
<html lang="en">
<head>
  <title>Godon</title>
  <meta charset="utf-8">
 <meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" type="text/css" href="style1.css">
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
          <a class="dropdown-toggle" data-toggle="dropdown" href="#">Business Owners <span class="caret"></span></a>
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
  
<div class="container" style="margin-top:5px ">
<h3><b>Welcome <?php 
 echo $_SESSION['uname'];
 ?></b><br><br></h3>
 <div class="row">
  <div class="col-lg-3">
 <div class="card colo-md-4" style="width:250px" >
  <img class="card-img-top" src="img/whouse 1.jpg" alt="Card image" width="250px;" height="190px;">
  <div class="card-body"><center>
    <h4 class="card-title"><b>Warehouses</b></h4><br>
    <p class="card-text">This page contains the details of all Warehouses.</p><br>
    <a href="whouses.php" class="btn btn-primary">See Details</a></center><br>
  </div>
</div>
<br>
</div>
  <div class="col-lg-3">
<div class="card colo-md-4" style="width:250px">
  <img class="card-img-top" src="img/whouse owner.jpg" alt="Card image" width="250px;" height="190px;">
  <div class="card-body"><center>
      <h4 class="card-title"><b>Warehouse Owners</b></h4><br>
    <p class="card-text">This page contains the details of all Warehouses Owners.</p><br>
    <a href="owner.php" class="btn btn-primary">See Details</a></center><br>
  </div>
</div>
<br>
</div>
  <div class="col-lg-3">
<div class="card colo-md-4" style="width:250px">
  <img class="card-img-top" src="img/bowners.jpg" alt="Card image" width="250px;" height="190px;">
  <div class="card-body">
    <center><h4 class="card-title"><b>Businesses</b></h4><br>
    <p class="card-text">This page contains the details of all Businesses.</p><br>
    <a href="tenant.php" class="btn btn-primary">See Details</a></center><br>
  </div>
</div>
<br>

</div>

 <div class="col-lg-3" >
 <div class="card colo-md-4" style="width:250px" >
  <img class="card-img-top" src="img/home4.png" alt="Card image" width="250px;" height="190px;">
  <div class="card-body"><center>
    <h4 class="card-title"><b>Bookings</b></h4><br>
    <p class="card-text">This page contains the details of all Bookings.</p><br>
    <a href="booking.php" class="btn btn-primary">See Details</a></center><br>
  </div>
</div>
<br>
</div>

</div>

</div>
</body>
</html>
