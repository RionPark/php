<?php
include_once './common/header.php';
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="author" content="red">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <title>index.html</title>
</head>
<body>
    환영한다 이녀석!! <?=$_SESSION['user']['uiname']?><br>
    환영한다 이녀석!! <?=$user['uiname']?><br>
    <a href="/datatype.php">datatype</a><br>
    <a href="/extract.php">extract</a><br>
    <a href="/user/list1.php">유저리스트1</a><br>
    <a href="/user/list2.php">유저리스트2</a><br>
    <a href="/user/logout.php">로그아웃</a>
</body>
</html>