<?php
session_start();//this is necessary to prevent the cleint from entering the web page written only using the url ie without aceesing the password and the username this provide more security to the page
$username=$_POST['username'];
$upass = $_POST['upass'];



$_SESSION['login_status']=false;

$connection=new mysqli( "localhost","root", "", "bootstrap",3306);//connect to database
$sqlresult=mysqli_query($connection,"SELECT * from bootstrap where username ='$username' AND password='$upass'");
// echo mysqli_num_rows( $sqlresult);  //return the no of row of the data you enter 
$no_of_rows=mysqli_num_rows($sqlresult);   //checking if the entered details are correct or
if($no_of_rows==0){
    echo "Invalid cridentials";
    die;//stop the execution
}
    $dbrow=mysqli_fetch_assoc($sqlresult);
    echo "login success";
    $_SESSION['login_status']=true;//after entering the requires details one can access it 
    
    $_SESSION['usertype']=$dbrow['usertype'];//assign user type in session variable so that we can use this information for further
    $_SESSION['username']=$dbrow['username'];//storing user name  in session variable for further use.
   $_SESSION['userid']=$dbrow['userid'];//store the user id in session so that we
   //can identify which user is login in

    if($dbrow['usertype']=='vendor'){
           header( 'location:../acmegradeproject1/vendor/home.php'); 
    }
if($dbrow['usertype']=='customer') {
    header("location:../acmegradeproject1/customer/home.php");
}
?>