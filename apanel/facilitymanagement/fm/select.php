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
Header('Content-Type: application/json; charset=UTF8');
echo json_encode($finalResponse);
header($_SERVER['SERVER_PROTOCOL'] . ' 200 Ok', true, 200);
header($_SERVER['SERVER_PROTOCOL'] . ' 200 Ok', true, 200);
}
}
?>

