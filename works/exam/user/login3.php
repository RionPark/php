<?php
include_once '../conf/dbcon.php';

$db = new DBCon();
$con = $db->getConnection();

$id = $_GET["id"];
$pwd = $_GET["pwd"];

$sql = "select uipwd from user_info where uiid=:id";

try{
    $stmt = $con->prepare($sql);
    $stmt->bindParam(':id',$id);
    $stmt->execute();
}catch(PDOException $exception){
    echo "Connection error: " . $exception->getMessage();
    exit;
}
$num = $stmt->rowCount();

echo $num;
if($num==1){
    while ($row = $stmt->fetch(PDO::FETCH_ASSOC)){
        extract($row);
        if($pwd == $uipwd){
            echo '로긴 성공';
        }else{
            echo '비밀번호 틀림';
        }
    }
}else{
    echo '아이디 틀림';
}
exit;
session_start();
$_SESSION["id"] = $id;
$_SESSION["pwd"] = $pwd;
//header("Location:/index.php");
?>