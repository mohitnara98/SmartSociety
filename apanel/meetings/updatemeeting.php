<?php
include('../connection.php');

$title=$_POST['title'];
$type=$_POST['type'];
$details=$_POST['details'];
$date=$_POST['date'];
$srno=$_POST['srno'];
$time=$_POST['time'];


if( $con->query("update meetings set type='$type',title='$title',details='$details',date='$date',time='$time' where srno=$srno "))
{
    header('Content-Type: application/json');
            echo json_encode('Data Succefully added');
}

?>