
<?php
include('../connection.php');
session_start();
$flatowner=$_SESSION['user'];
if($_SERVER['REQUEST_METHOD'] == 'GET'){
$result = $con->query("select * FROM `visitors` WHERE wingname=(select wingname from flatowner where email='$flatowner') and place=(SELECT flatnumber FROM flatowner where email='$flatowner')");
if($result->num_rows > 0){
    $finalResponse = array();
    while($row = $result->fetch_assoc()){
        array_push($finalResponse,$row);
    }
        Header('Content-Type: application/json; charset=UTF8');
        echo json_encode($finalResponse);
        // header($_SERVER['SERVER_PROTOCOL'] . ' 200 Ok', true, 200);
}
}
?>