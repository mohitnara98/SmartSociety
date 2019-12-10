<?php
include('../connection.php');

if($_POST['names']){
    $names = $_POST['names'];
    
} else{
    header('Content-Type: application/json');
    // echo json_encode('rollno  is required');
    header($_SERVER['SERVER_PROTOCOL'] . ' 500 names', true, 500);
}
if($_POST['output']){
    $output = $_POST['output'];
    
} else{
    header('Content-Type: application/json');
    header($_SERVER['SERVER_PROTOCOL'] . ' 500 output', true, 500);
}
if($_POST['permit']){
    $permit = $_POST['permit'];
    
} else{
    header('Content-Type: application/json');
    header($_SERVER['SERVER_PROTOCOL'] . ' 500 permit', true, 500);
}
if($con->query("insert into `assignroles`(`name`,`role`,`permission`) values('$names','$output','$permit')")){
    header('Content-Type: application/json');
    echo json_encode('Data Succefully added');
}
?>