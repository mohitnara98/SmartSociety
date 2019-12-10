
<?php
include('../connection.php');

$flatnumber=$_POST['flatnumber'];
$year=$_POST['year'];
$month=$_POST['month'];
$wingname=$_POST['wingname'];

$result = $con->query("select * from `maintenancedetails` where wingname='$wingname' and flatnumber='$flatnumber' and year='$year' and month='$month' ");
if($result->num_rows > 0){
    $finalResponse = array();
    while($row = $result->fetch_assoc()){
        array_push($finalResponse,$row);
    }
        Header('Content-Type: application/json; charset=UTF8');
        echo json_encode($finalResponse);
        header($_SERVER['SERVER_PROTOCOL'] . ' 200 Ok', true, 200);
}

?>