<?php
include_once "../common/header.php";
include_once "../conf/dbcon.php";

$db = new DBCon();
$con = $db->getConnection();

$sql = "select * from user_info";

try{
    $stmt = $con->prepare($sql);
    $stmt->execute();
    $con = null;
}catch(PDOException $exception){
    echo json_encode(array("error"=>$exception->getMessage()));
    exit;
}
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="author" content="red">
    <title>login.html</title>
</head>
<script src="/js/jquery-3.2.1.min.js"></script>
<script src="/js/bootstrap.min.js"></script>
<link rel="stylesheet" href="/css/bootstrap.min.css"/>
<link rel="stylesheet" href="/css/bootstrap-grid.min.css"/>
<link rel="stylesheet" href="/css/bootstrap-reboot.min.css"/>
<body>
    <br>
    <div class="container">
        <table class="table">
            <thead class="thead-dark">
                <tr>
                    <th scope="col">번호</th>
                    <th scope="col">이름</th>
                    <th scope="col">아이디</th>
                    <th scope="col">비밀번호</th>
                    <th scope="col">나이</th>
                </tr>
            </thead>
            <tbody>
<?php
    while ($row = $stmt->fetch(PDO::FETCH_ASSOC)){
        extract($row);
?>
                <tr>
                    <th scope="row"><?=$uino?></th>
                    <td><?=$uiname?></td>
                    <td><?=$uiid?></td>
                    <td><?=$uipwd?></td>
                    <td><?=$uiage?></td>
                </tr>
<?php
    }
?>
            </tbody>
        </table>
    </div>
</body>
</html>
