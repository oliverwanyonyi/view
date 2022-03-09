<?php
if(isset($_POST["btn_update"])){
    $updatedTravellersMeans =$_POST["TravellersMeans"];
    $updatedTravellersName =$_POST["TravellersName"];
    $updatedTelephoneNumber =$_POST["TelephoneNumber"];
    $updatedPlaceToVisit =$_POST["PlaceToVist"];
    $updatedHotelToBook =$_POST["HotelToBook"];
    $updatedDate =$_POST["Date"];
    $updatedTime =$_POST["Time"];
    require_once "db_connection.php";
    $updateQuery="UPDATE `travellers` SET `id`='1',`means`='updatedTravellersMeans',`TravellersName`='updatedTravellersName',`TelephoneNumber`='updatedTelephoneNumber',`PlaceToVisit`='updatedPlaceToVisit',`HotelToBook`='updatedHotelToBook',`Date`='updatedDate',`Time`='updatedTime' WHERE 1";
}

