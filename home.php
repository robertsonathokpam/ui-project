<html>
<head>
    <style>
.own-card{
background-color: bisque;
height: 300px;
width: 300px;
display: inline-block;
vertical-align: top;
margin: 10px;
padding: 10px;
}
img{
    width:100px;  
}
    </style>
</head>
</html>

<?php
include 'authguard.php';
include 'menu.html';
$connection1=new mysqli("localhost","root","","bootstrap",3306);//connection with database named bootstrap 
$sql_result=mysqli_query($connection1,"SELECT * FROM `database2` JOIN bootstrap on database2.owner=bootstrap.userid");
while( $dbrow = mysqli_fetch_assoc($sql_result) ) { //whenever the dbrow is empty stop the execution 
    echo
     "<div class='own-card'>

        <div>$dbrow[pid]</div>
        <div>$dbrow[name]</div>
        <div>$dbrow[price]</div>
        <div>$dbrow[detail]</div>
        <div class='pdting'><img src='$dbrow[impath]'></div>
        <div>$dbrow[username]</div>
        <div><a href='addcart.php?pid=$dbrow[pid]'><button>add to cart</button></a></div>
    </div>";
}   
?>
