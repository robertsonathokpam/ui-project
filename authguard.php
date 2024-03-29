<?php
session_start();
if(!isset($_SESSION['login_status'])){
    echo 'invalid entry without signup';
}
if($_SESSION['login_status']==false){ //if one didn't enter the neccessary details
    echo 'unauthorised entry, error 403:invalid';
    die;
}
if($_SESSION['usertype']!='vendor'){
    echo 'invalid entry';
    die;
    }
    echo
    "<div class='d-flex justify-content-between'> 
        
        <div>".$_SESSION['userid']."</div>
        <div>".$_SESSION['username']."</div>
        <div>
        <a href='../acmegradeproject1/vendor/logout.php'>logout</a>
        </div>
        
    </div>";
?>