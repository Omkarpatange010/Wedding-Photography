<?php

$a = $_POST['username'];
$b = $_POST['password'];

$con = mysqli_connect("localhost","root","") or die("do not connect");
mysqli_select_db($con,"wedding_portfolio") or die("Database Not Exists");
$s = "select * from customer where username='$a' and password='$b'";
$p ="insert into login values('$a','$b')";
mysqli_query($con,$p) or die("do not insert record");
$t = mysqli_query($con,$s) or die("Invalid User");
if(mysqli_fetch_row($t))
{
    header("location:home.html");
}
else
{
    echo "<h1>Invalid USer </h1>";
}
?>