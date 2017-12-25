<?php
session_start();
if(!isset($_SESSION['id']) || !isset($_SESSION['pwd'])) {
    //echo "<meta http-equiv='refresh' content='0;url=/user/login.html'>";
    header ("Location:/user/login.html");
	exit;
}
?>