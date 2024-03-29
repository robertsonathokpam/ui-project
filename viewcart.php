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
//$connection1=new mysqli("localhost","root","","bootstrap",3306);//connection with database named bootstrap 
$connection1=new mysqli("localhost","root","","bootstrap",3306);//
$sql_result=mysqli_query($connection1,"SELECT * from cart join database2 on cart.pid=database2.pid where userid=$_SESSION[userid] ");
while( $dbrow = mysqli_fetch_assoc($sql_result) ) { //whenever the dbrow is empty stop the execution 
    echo
     "<div class='own-card'>
        <div>$dbrow[name]</div>
        <div>$dbrow[price]</div>
        <div>$dbrow[detail]</div>
        <div class='pdting'><img src='$dbrow[impath]'></div>
        <div><button onclick='deletecart($dbrow[cartid])' >Delete from cart</button></div>
    </div>";
} 
echo "<div class='m-3'>
<form method='POST' action='placeholder.php' class='w-50'>
<h3>placeholder</h3>
<textarea class='form-control' name='address' placeholder='enter delivery address'></textarea>
<button class='p-3' btn btn-primary '>place order $total Rs </button>
</form>
</div>"  
?>
<html>
    <body>
     <script>
        function deletecart(cartid){
             res=confirm('Do you want to go delete?');
        if(res){
            window.location.href='delete.php?cartid=${cartid}';
        }
    }

     </script>
     </body>
</html>
