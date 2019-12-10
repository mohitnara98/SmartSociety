
<?php
include('../connection.php');


if($_SERVER['REQUEST_METHOD'] == 'GET'){
$result = $con->query("select count(complainttype) as numberofcomplaints , complainttype from `complaint` group by complainttype order by numberofcomplaints desc");
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
// echo date("Y-m-d");
// SELECT COUNT(srno), intime
// FROM visitors
// where  datevisited="2019-03-20"
// GROUP BY intime;
//
// $date = '16:36'; 
// echo date('h:i', strtotime($date));
?>