<?php
include('../connection.php');
$phonenumber=$_POST['phonenumber'];
$finalData=array();
$finalResponse = array();
$res=mysqli_query($con, "SELECT wingname,flatnumber FROM serviceprovidernormalize WHERE phonenumber='$phonenumber' ");

if(mysqli_num_rows($res) > 0){
 
while($row=mysqli_fetch_assoc($res)){
    array_push($finalResponse,$row);
}
}
array_push($finalData,$finalResponse);

$arraytwo=array();
$res1=mysqli_query($con, "SELECT name,phonenumber,type,freetimeslot,photo FROM serviceprovider WHERE phonenumber='$phonenumber' ");
if(mysqli_num_rows($res1) > 0){
 
while($row1=mysqli_fetch_assoc($res1)){
    array_push($arraytwo,$row1);
}
}
array_push($finalData,$arraytwo);

Header('Content-Type: application/json; charset=UTF8');
echo json_encode($finalData);
header($_SERVER['SERVER_PROTOCOL'] . ' 200 Ok', true, 200);
header($_SERVER['SERVER_PROTOCOL'] . ' 200 Ok', true, 200);


?>

