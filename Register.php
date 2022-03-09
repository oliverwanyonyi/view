
<!DOCTYPE html>
<html>
<head>
    <title>Register Here</title>
    <link rel="stylesheet" href="Assests/bootstrap/css/bootstrap.css">
    <link rel="stylesheet" href="Assests/bootstrap/css/bootstrap-grid.css">
    <link rel="stylesheet" href="Assests/bootstrap/css/bootstrap-reboot.css">
    <script src="Assests/bootstrap/js/bootstrap.bundle.js"></script>
    <script src="Assests/bootstrap/js/jquery-3.4.0.js"></script>
    <script src="Assests/bootstrap/js/popper.min.js"></script>
</head>
<body class="bg-primary">
<?php
require('db.php');
// When form submitted, insert values into the database.
if (isset($_REQUEST['username'])) {
    // removes backslashes
    $username = stripslashes($_REQUEST['username']);
    //escapes special characters in a string
    $username = mysqli_real_escape_string($con, $username);
    $email    = stripslashes($_REQUEST['email']);
    $email    = mysqli_real_escape_string($con, $email);
    $password = stripslashes($_REQUEST['password']);
    $password = mysqli_real_escape_string($con, $password);
    $create_datetime = date("Y-m-d H:i:s");
    $query    = "INSERT INTO `usertable`(`id`, `username`, `email`, `password`, `create_datetime`) VALUES ('null','$username','$email','$password','$create_datetime')";
    $result   = mysqli_query($con, $query);
    if ($result) {
        echo "<div class='form'>
                  <h3>You are registered successfully.</h3><br/>
                  <p class='link'>Click here to <a href='LOGIN%20HERE.php'>Login</a></p>
                  </div>";
    } else {
        echo "<div class='form'>
                  <h3>Required fields are missing.</h3><br/>
                  <p class='link'>Click here to <a href='Register.php'>registration</a> again.</p>
                  </div>";
    }
} else {
    ?>
    <form class="form text-center bg-info m-5  w-auto " action="" method="post">
        <h1 class="login-title table-dark">Registration</h1><br><br><br>
        <input type="text" class="login-input " name="username" placeholder="Username" required /><br><br><br>
        <input type="text" class="login-input" name="email" placeholder="Email Adress"><br><br><br>
        <input type="password" class="login-input" name="password" placeholder="Password"><br><br><br>
        <input type="submit" name="submit" value="Register" class="login-button">
        <p class="link table-dark"><a href="LOGIN%20HERE.php">Click to Login</a></p>
    </form>
    <?php
}
?>
</body>
</html>

