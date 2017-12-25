<?php
include_once './common/header.php';
include_once './conf/dbcon.php';
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="author" content="red">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <title>index.html</title>
</head>
<script>
    
</script>
<body>
    환영한다 이녀석!! <?=$_SESSION['id']?><br>
    <a href="/user/logout.php">로그아웃</a>
</body>
</html>