<?php
$pid=$_GET['pid'];
echo "received pid=$pid ";
$connection1=new mysqli("localhost","root","","bootstrap",3306);//
$sql_result=mysqli_query($connection1,"DELETE FROM database2 WHERE pid=$pid ");
if ($sql_result) {
    header("location:view.php");
    } else{
        echo "Error deleting record";
        echo mysqli_error($connection1); // to see the error in case
    }
?>
