<?php
include_once "../conf/dbcon.php";
header("Content-Type: application/json");

$db = new DBCon();
$con = $db->getConnection();

$id = $_GET["id"];
$pwd = $_GET["pwd"];

$sql = "select * from user_info where uiid=:id";

try{
    $stmt = $con->prepare($sql);
    $stmt->bindParam(":id",$id);
    $stmt->execute();
    $con = null;
}catch(PDOException $exception){
    echo json_encode(array("error"=>$exception->getMessage()));
    exit;
}
$num = $stmt->rowCount();
if($num==1){
    while ($row = $stmt->fetch(PDO::FETCH_ASSOC)){
        extract($row);
        if($pwd == $uipwd){
            session_start();
            $_SESSION["user"] = $row;
            $result = true;
            $msg = "로그인이 성공하셨습니다.";
            $url = "/index.php";
        }else{
            $msg = "비밀번호 틀림";
        }
    }
}else{
    $msg =  "아이디 틀림";
}
echo json_encode(array("msg"=>$msg,"url"=>$url));
exit;
//header("Location:/index.php");
?>