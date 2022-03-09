<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8"/>
    <title>Login</title>
    <link rel="stylesheet" href="style.css"/>
    <link rel="stylesheet" href="Assests/bootstrap/css/bootstrap.css">
    <link rel="stylesheet" href="Assests/bootstrap/css/bootstrap-grid.css">
    <link rel="stylesheet" href="Assests/bootstrap/css/bootstrap-reboot.css">
    <script src="Assests/bootstrap/js/bootstrap.bundle.js"></script>
    <script src="Assests/bootstrap/js/jquery-3.4.0.js"></script>
    <script src="Assests/bootstrap/js/popper.min.js"></script>
</head>
<body class="bg-primary ">
<h1 class="table-dark  text-center">Welcome to The Login Form</h1>
<?php
require('db.php');
session_start();
// When form submitted, check and create user session.
if (isset($_POST['username'])) {
    $username = stripslashes($_REQUEST['username']);    // removes backslashes
    $username = mysqli_real_escape_string($con, $username);
    $password = stripslashes($_REQUEST['password']);
    $password = mysqli_real_escape_string($con, $password);
    // Check user is exist in the database
    $query    = "SELECT * FROM `usertable` WHERE username='$username' AND password='$password'";
    $result = mysqli_query($con, $query) or die(mysql_error());
    $rows = mysqli_num_rows($result);
    if ($rows == 1) {
        $_SESSION['username'] = $username;
        // Redirect to user dashboard page
        header("Location: dashboard.php");
    } else {
        echo "<div class='form'>
                  <h3>Incorrect Username/password.</h3><br/>
                  <p class='link'>Click here to <a href='LOGIN%20HERE.php'>Login</a> again.</p>
                  </div>";
    }
} else {
    ?>
    <form class="form text-center bg-success m-5 " method="post" name="login">
        <h1 class="login-title">Login</h1>
        <input type="text" class="login-input " name="username" placeholder="Username" autofocus="true"/><br><br><br>
        <input type="password" class="login-input" name="password" placeholder="Password"/><br><br><br>
        <input type="submit" value="Login" name="submit" class="login-button"/><br><br><br>
        <p class="link"><a href="Register.php">New Registration</a></p>
    </form>
    <?php
}
?>
</body>
</html>