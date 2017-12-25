<?php
session_start();
if(!isset($_SESSION['user'])) {
    //echo "<meta http-equiv='refresh' content='0;url=/user/login.html'>";
    header ("Location:/user/login1.html");
	exit;
}
$user = $_SESSION['user'];
// foreach($user as $key=> $value){
//     echo $key." : ";
//     echo $value."<br>";
// }
?>