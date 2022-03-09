
<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "viewtravel";

try {
    $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
    // set the PDO error mode to exception
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    $sql = "UPDATE `travellers` SET `id`='1',`means`=$_GET[],`TravellersName`='$_GET TravellersName',`TelephoneNumber`='$_GET TelephoneNumber',`PlaceToVisit`='$_GET PlaceToVisit',`HotelToBook`='$_GET HotelToBook',`Date`='$_GET Date',`Time`='$_GET Time' WHERE id=1";

    // Prepare statement
    $stmt = $conn->prepare($sql);

    // execute the query
    $stmt->execute();

    // echo a message to say the UPDATE succeeded
    echo $stmt->rowCount() . " records UPDATED successfully";
} catch(PDOException $e) {
    echo $sql . "<br>" . $e->getMessage();
}

$conn = null;
?>
