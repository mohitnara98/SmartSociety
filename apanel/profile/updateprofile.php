<?php
include('../connection.php');

$name=$_POST['name'];
$email=$_POST['email'];
$mobilenumber=$_POST['mobilenumber'];
$password=$_POST['password'];




if( $con->query("update flatowner set name='$name',email='$email',mobilenumber='$mobilenumber',password='$password' where email='$email' "))
{
    header('Content-Type: application/json');
            echo json_encode('Data Succefully added');
}

?>