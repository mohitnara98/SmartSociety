<?php
include('../connection.php');

$generalmaintenance=$_POST['generalmaintenance'];
$parking=$_POST['parking'];
$lift=$_POST['lift'];
$sinkingfund=$_POST['sinkingfund'];
$other=$_POST['other'];
$latedate=$_POST['latedate'];
$penalty=$_POST['penalty'];
$srno=$_POST['srno'];



if( $con->query("update maintenance set generalmaintenance='$generalmaintenance',parking='$parking',sinkingfund='$sinkingfund',lift='$lift',latedate='$latedate',others='$other',penalty='$penalty' where srno=$srno "))
{
    header('Content-Type: application/json');
            echo json_encode('Data Succefully added');
}

?>