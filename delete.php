<?php
$cartid=$_GET['cartid'];
echo "received cartid=$cartid ";
$connection1=new mysqli("localhost","root","","bootstrap",3306);//
$sql_result=mysqli_query($connection1,"DELETE FROM cart WHERE cartid=$cartid ");
if ($sql_result) {
    header("location:viewcart.php");
    } else{
        echo "Error deleting record";
        echo mysqli_error($connection1); // to see the error in case
    }
?>
