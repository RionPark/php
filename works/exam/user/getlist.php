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
    $rows = array();

    while ($row = $stmt->fetch(PDO::FETCH_ASSOC)){
        $rows[] = $row;
    }
    echo json_encode($rows);
?>