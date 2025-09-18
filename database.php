<?php
    $a = $_POST['firstname'];
    $b = $_POST['lastname'];
    $c = $_POST['gender'];
    $d = $_POST['username'];
    $e = $_POST['password'];
    $f = $_POST['number'];

    $con = mysqli_connect("localhost","root","")or die("not connect");
    mysqli_select_db($con,"wedding_portfolio") or die("database not found");
    $s ="insert into customer values('$a','$b','$c','$d','$e',$f)";
    mysqli_query($con,$s) or die("do not insert record");

    mysqli_close($con);
    header("location:login.html");
    ?>