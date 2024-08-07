<!DOCTYPE html>
<html lang="en">

<head>
  <title>Booking</title>
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
            <a class="dropdown-toggle" data-toggle="dropdown" href="#">Business Owners <span class="caret"></span></a>
            <ul class="dropdown-menu">
              <li><a href="tenant.php">Businesses</a></li>
              <li><a href="members.php">Business Signatories</a></li>
            </ul>
          </li>
          <li><a href="booking.php">Booking</a></li>

        </ul>
        <ul class="nav navbar-nav navbar-right">

          <li><a href="#"><span class="glyphicon glyphicon-user"></span>Hi <?php session_start();
                                                                            echo $_SESSION['uname']; ?></a>
          </li>
          <li><a href="index.html"><span class="glyphicon glyphicon-user"></span> Sign Out</a></li>
        </ul>
      </div>
    </div>
  </nav>


  <div class="container">
    <a href="dobooking.html" class='btn btn-primary'>Book House</a>
    <br><br>
    <table border="1" id="customers">
      <tr>
        <th>Business ID</th>
        <th>Warehouse ID</th>
        <th>Booking Date</th>
        <th>Period (weeks)</th>
        <th>Price (Kshs)</th>
        <th>Agreement (PDF,Word only) </th>
      </tr>
      <?php
      include("connection.php");
      $query = "select * from booking";
      $data = mysqli_query($conn, $query);
      while ($result = mysqli_fetch_assoc($data)) {
        echo "<tr><td>" . $result['t_id'] . "</td><td>" . $result['h_id'] . "</td><td>" . $result['booking_date'] . "</td><td>" . $result['period'] . "</td><td>" . $result['price'] . "</td><td>";
        echo "<a href='v.php" . "tid=" . $result['t_id'] . "&hid=" . $result['h_id'] . "'>View File</a>";
        echo "</td></tr>";


        /*<td><?php echo $row['file_location']; ?></td>
						<td><a href="download.php?file=<?php echo urlencode($row['file_location']); ?>">Download</a></td>*/
      }
      echo "</table>";
      ?>
  </div>
</body>

</html>