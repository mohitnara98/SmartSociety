<?php
include('../connection.php');

$name=$_POST['name'];
$mobilenumber=$_POST['mobilenumber'];
$flatnumber=$_POST['flatnumber'];
$password=$_POST['password'];
$email=$_POST['email'];
$memberid=$_POST['memberid'];


if( $con->query("update flatowner set name='$name',mobilenumber='$mobilenumber',flatnumber='$flatnumber',password='$password',email='$email' where srno=$memberid "))
{
    header('Content-Type: application/json');
            echo json_encode('Data Succefully added');
}

?>