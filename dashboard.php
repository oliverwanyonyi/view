<?php
session_start();
//include auth_session.php file on all user panel pages
include("About.php");
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>Dashboard - Client area</title>
    <link rel="stylesheet" href="style.css" />
</head>
<body>
<div class="form popover align-top table-info">

    <p>Hey
    <p>You are now at Travellers About page.</p>
    <p><a href="logout.php">Logout</a></p>
</div>
</body>
</html>
