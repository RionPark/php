<?php
$id = $_GET["id"];
$pwd = $_GET["pwd"];

session_start();
$_SESSION["id"] = $id;
$_SESSION["pwd"] = $pwd;
header("Location:/index.php");
?>