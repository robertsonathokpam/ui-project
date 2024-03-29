<?php
include 'authguard.php';
$pid=$_GET['pid'];
$connection1=new mysqli("localhost","root","","bootstrap",3306);//
$sql_status=mysqli_query($connection1,"INSERT into  cart(userid,pid)values('$_SESSION[userid]','$pid')");
if($sql_status){
    header("location:home.php");
}
else{
    echo mysqli_error($connection1);
}
?>