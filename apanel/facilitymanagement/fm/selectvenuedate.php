<?php

include('../connection.php');
$venue=$_POST['venue'];
// echo $venue;
$res=mysqli_query($con, "SELECT date FROM facilitymanagement where venue ='$venue' ");
if(mysqli_num_rows($res) > 0){
    $finalResponse = array();
while($row=mysqli_fetch_assoc($res)){
    array_push($finalResponse,$row);
}
Header('Content-Type: application/json; charset=UTF8');
echo json_encode($finalResponse);
header($_SERVER['SERVER_PROTOCOL'] . ' 200 Ok', true, 200);
}

?>


