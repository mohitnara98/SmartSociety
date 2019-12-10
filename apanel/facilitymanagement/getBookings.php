<?php
include('../connection.php');
session_start();

if($_SERVER['REQUEST_METHOD'] == 'GET'){
$result = $con->query("select * from `facilitymanagement` order by srno desc");
if($result->num_rows > 0){
    $finalResponse = array();
    while($row = $result->fetch_assoc()){
        array_push($finalResponse,$row);
    }
    $finalData = array();
    array_push($finalData,$finalResponse);
    array_push($finalData,$_SESSION['permission']);
        Header('Content-Type: application/json; charset=UTF8');
        echo json_encode($finalData);
        header($_SERVER['SERVER_PROTOCOL'] . ' 200 Ok', true, 200);
}
}
?>