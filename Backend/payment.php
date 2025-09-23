<?php
    $a = $_POST['name'];
    $b = $_POST['number'];
    $c = $_POST['months'];
    $d = $_POST['year'];

    $con = mysqli_connect("localhost","root","")or die("not connect");
    mysqli_select_db($con,"wedding_portfolio") or die("database not found");
    $s ="insert into payment_details values('$a','$b','$c',$d)";
    mysqli_query($con,$s) or die("do not insert record");

    mysqli_close($con);
    header("location:successPage.html");
    ?>