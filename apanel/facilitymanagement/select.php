<?php
session_start();
include('../connection.php');
$sender=$_SESSION['user'];
if($_SERVER['REQUEST_METHOD'] == 'GET'){
$res=mysqli_query($con, "SELECT * FROM flatowner WHERE email='$sender' ");
if(mysqli_num_rows($res) > 0){
    $finalResponse = array();
while($row=mysqli_fetch_assoc($res)){
    array_push($finalResponse,$row);
}
$finalData=array();
$response2 = array();
array_push($finalData,$finalResponse);
$res2=mysqli_query($con, "SELECT * FROM facilitymanagement where date>=curdate() ");
while($row2=mysqli_fetch_assoc($res2)){
    array_push($response2,$row2);
}

array_push($finalData,$response2);
Header('Content-Type: application/json; charset=UTF8');
echo json_encode($finalData);
header($_SERVER['SERVER_PROTOCOL'] . ' 200 Ok', true, 200);
header($_SERVER['SERVER_PROTOCOL'] . ' 200 Ok', true, 200);
}
}
?>

