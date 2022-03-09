<?php
session_start();

$con =mysqli_connect('localhost','root','');
if(isset($_POST['usertable']))
mysqli_select_db($con,'userreg');
$username=$_POST['username'];
$pass =$_POST['password'];{
$username=mysqli_real_escape_string($db, $_POST['username']);
$password=mysqli_real_escape_string($db, $_POST['password']);
}
$s ="select * from usertable where name='$name'";
$result =mysqli_query($con,$s);
$num=mysqli_num_rows($result);
if($num==1) {
echo "username Already Taken";

}else{
$reg ="insert into usertable(name,password) values('$name','$pass')";
mysqli_query($con,$reg);
echo "Registration Successful";
}