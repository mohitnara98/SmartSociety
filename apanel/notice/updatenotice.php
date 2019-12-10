<?php
include('../connection.php');

$title=$_POST['title'];
$type=$_POST['type'];
$details=$_POST['details'];
$enddate=$_POST['enddate'];
$srno=$_POST['srno'];


if( $con->query("update notice set noticetype='$type',title='$title',details='$details',enddate='$enddate' where srno=$srno "))
{
    header('Content-Type: application/json');
            echo json_encode('Data Succefully added');
}

?>