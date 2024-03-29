<?php
$addr=$POST['address'];
$total=$POST['total'];
include "authguard.php";
include "connection.php";
$sql_status=mysqli_query($conn,"INSERT INTO  orders(username,userid,address,total_amount)values('$_SESSION[username]',$_SESSION[userid],'$addr',$total)");

?>
