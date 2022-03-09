<?php
if(isset($_POST["btn_submit"])){
    $means =$_POST["means"];
    $TravellersName=$_POST["TravellersName"];
    $TelephoneNumber =$_POST["TelephoneNumber"];
    $PlaceToVist =$_POST["PlaceToVist"];
    $HotelToBook =$_POST["HotelToBook"];
    $Date =$_POST["Date"];
    $Time =$_POST["Time"];
    $host ="localhost";
    $dbUsername ="root";
    $dbPassword="";
    $dbname ="viewtravel";
    $conn =new mysqli($host,$dbUsername,$dbPassword,$dbname);
    if (mysqli_connect_error()){
        die('Connect Error('.mysqli_connect_error().')'.mysqli_connect_error());

    }
    else{
        $insertQuery="INSERT INTO `travellers`(`id`, `means`, `TravellersName`, `TelephoneNumber`, `PlaceToVisit`, `HotelToBook`, `Date`, `Time`)
 VALUES (null,'$means','$TravellersName','$TelephoneNumber','$PlaceToVist','$HotelToBook','$Date','$Time')";
    }
    require_once "db_connection.php";
    $save=mysqli_query($connection,$insertQuery);
    if(isset($save)){

        echo "<script>alert('user registered successfully')</script>";

    }
}
