<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>voters</title>
    <link rel="stylesheet" href="Assests/style.css">
    <link rel="stylesheet" href="Assests/bootstrap/css/bootstrap.css">
    <link rel="stylesheet" href="Assests/bootstrap/css/bootstrap-grid.css">
    <link rel="stylesheet" href="Assests/bootstrap/css/bootstrap-reboot.css">
    <script src="Assests/bootstrap/js/bootstrap.bundle.js"></script>
    <script src="Assests/bootstrap/js/jquery-3.4.0.js"></script>
    <script src="Assests/bootstrap/js/popper.min.js"></script>


</head>
<body>
<a href="ad"></a>
<h1 class="text-info text-center">Travellers Who Have Booked</h1>
<table class="table table-dark table-hover">
    <tr>
        <th>Id</th>
        <th>Means</th>
        <th>Travellers Name</th>
        <th> Telephone Number</th>
        <th>Place To Vist</th>
        <th>Hotel To Book</th>
        <th>Date</th>
        <th>Time</th>

    </tr>
    <?php
    require_once "db_connection.php";
    $selectQuery="SELECT * FROM travellers";
    $Travellers=mysqli_query($connection,$selectQuery);
    $user=$Travellers;
    foreach($user as $traveller){

        $means=$traveller["means"];
        $TravellersName=$traveller["TravellersName"];
        $TelephoneNumber=$traveller["TelephoneNumber"];
        $PlaceToVisit=$traveller["PlaceToVisit"];
        $HotelToBook=$traveller["HotelToBook"];
        $Date=$traveller["Date"];
        $Time=$traveller["Time"];
        $travellersId =$traveller["id"];
$id=$traveller["id"];
        echo " <tr>
   <td>$id</td>
 <td> $means</td>
 <td> $TravellersName</td>
 <td>$TelephoneNumber</td>
 <td>$PlaceToVisit</td>
  <td>$HotelToBook</td>
 <td>$Date</td>
  <td>$Time</td>
 
      </tr>";
    }
    ?>

</table>
</body>
</html>



