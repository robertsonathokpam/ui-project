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
$connection1=new mysqli("localhost","root","","bootstrap","3306"); //for local server connection
$sql_result=mysqli_query($connection1,"SELECT * from database2 where owner=$_SESSION[userid] ");
while( $dbrow = mysqli_fetch_assoc($sql_result) ) { //whenever the dbrow is empty stop the execution 
    echo
     "<div class='own-card'>
        <div>$dbrow[name]</div>
        <div>$dbrow[price]</div>
        <div>$dbrow[detail]</div>
        <div class='pdting'><img src='$dbrow[impath]'></div>
        <div>
           <a href='#'><button>edit</button></a> 
        </div>
        <div>
        <button onclick='deletepdt($dbrow[pid])'>delete<button>
        </div>
    </div>";
}   
?>
<html>
    <body>
     <script>
        function deletepdt(pid){
             res=confirm('Do you want to go delete?');
        if(res){
            window.location.href='delete.php?pid=${pid}';
        }
    }

     </script>
     </body>
</html>