<?php
include('../connection.php');
if($_SERVER['REQUEST_METHOD'] == 'GET'){

$finalData=array();
$res2=mysqli_query($con, "SELECT * FROM facilitymanagement where date>=curdate() ");
while($row2=mysqli_fetch_assoc($res2)){
    array_push($finalData,$row2);
}
Header('Content-Type: application/json; charset=UTF8');
echo json_encode($finalData);
header($_SERVER['SERVER_PROTOCOL'] . ' 200 Ok', true, 200);
header($_SERVER['SERVER_PROTOCOL'] . ' 200 Ok', true, 200);
}

?>

