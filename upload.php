<?php
session_start();
print_r($_POST);
echo "<br>";
print_r($_FILES['pdting']);
$source=$_FILES["pdting"]["tmp_name"];  // source of the file
$dest="../shared images/".$_FILES[ "pdting" ] ["name"];   // destination of the file
echo '<br>';
echo $dest;  
move_uploaded_file($source,$dest) ; 
$connection1=new mysqli("localhost","root","","bootstrap",3306);
$status=mysqli_query($connection1,"INSERT INTO database2(name,price,detail,impath,owner)values('$_POST[name]',$_POST[price],'$_POST[detail]','$dest',$_SESSION[userid])");
if($status){
    echo "product uploaded successfully";
}else{
    echo mysqli_error($connection1);
}
?>
