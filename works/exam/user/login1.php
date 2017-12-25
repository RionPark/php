<?php
$id = $_GET["id"];
$pwd = $_GET["pwd"];


foreach($_GET as $k => $v) {
    echo $k."<br>";
    echo $v."<br>";
}
?>
<?="니가 입력한 아이디 : ".$id?><br>
<?="니가 입력한 비밀번호 : ".$pwd?>

