<?php
include('../connection.php');

if($_SERVER['REQUEST_METHOD'] == 'POST'){
    
    if($_POST['passwords']){
        $passwords = $_POST['passwords'];
    } else{
        header('Content-Type: application/json');
	    header($_SERVER['SERVER_PROTOCOL'] . ' 500 Bhai name no enter karna parega', true, 500);
    }
    if($_POST['names']){
        $names = $_POST['names'];
    } else{
        header('Content-Type: application/json');
	    echo json_encode('class  is required');
    }
    if($_POST['dateofbirth']){
        $dateofbirth = $_POST['dateofbirth'];
    } else{
        header('Content-Type: application/json');
        // echo json_encode('rollno  is required');
        header($_SERVER['SERVER_PROTOCOL'] . ' 500 Bhai roll no enter karna parega', true, 500);
    }
    if($_POST['mobilenumber']){
        $mobilenumber = $_POST['mobilenumber'];
    } else{
        header('Content-Type: application/json');
	    header($_SERVER['SERVER_PROTOCOL'] . ' 500 Bhai name no enter karna parega', true, 500);
    }
    if($_POST['aadharnumber']){
        $aadharnumber = $_POST['aadharnumber'];
    } else{
        header('Content-Type: application/json');
	    echo json_encode('class  is required');
    }
    if($_POST['flatnumber']){
        $flatnumber = $_POST['flatnumber'];
    } else{
        header('Content-Type: application/json');
	    header($_SERVER['SERVER_PROTOCOL'] . ' 500 Bhai name no enter karna parega', true, 500);
    }
    if($_POST['emailid']){
        $emailid = $_POST['emailid'];
    } else{
        header('Content-Type: application/json');
	    echo json_encode('class  is required');
    }if($_POST['maintenance']){
        $maintenance = $_POST['maintenance'];
    } else{
        header('Content-Type: application/json');
        // echo json_encode('rollno  is required');
        header($_SERVER['SERVER_PROTOCOL'] . ' 500 Bhai roll no enter karna parega', true, 500);
    }
    if($_POST['committeemember']){
        $committeemember = $_POST['committeemember'];
    } else{
        header('Content-Type: application/json');
	    header($_SERVER['SERVER_PROTOCOL'] . ' 500 Bhai name no enter karna parega', true, 500);
    }
    if($_POST['parkingcharges']){
        $parkingcharges = $_POST['parkingcharges'];
    } else{
        header('Content-Type: application/json');
	    echo json_encode('class  is required');
    }
    if($_POST['roles']){
        $roles = $_POST['roles'];
    } else{
        header('Content-Type: application/json');
	    echo json_encode('roles  is required');
    }
  
        if($con->query("insert into `flatowner`(`password`,`name`,`dateofbirth`,`mobilenumber`,`aadharnumber`,`flatnumber`,`email`,`maintenance`,`committeemember`,`parkingcharges`,`roles`) values('$passwords','$names','$dateofbirth',$mobilenumber,$aadharnumber,$flatnumber,'$emailid',$maintenance,'$committeemember',$parkingcharges,'$roles')")){
            header('Content-Type: application/json');
            echo json_encode('Data Succefully added');
        }
    
}
else{
    header($_SERVER['SERVER_PROTOCOL'] . ' 500 error from php file', true, 500); 
}
?>