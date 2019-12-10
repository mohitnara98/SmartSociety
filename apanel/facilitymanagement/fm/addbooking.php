<?php
include('../connection.php');


if($_SERVER['REQUEST_METHOD'] == 'POST'){
    if($_POST['name']){
        $name = $_POST['name'];
    } else{
        header('Content-Type: application/json');
        // echo json_encode('rollno  is required');
        header($_SERVER['SERVER_PROTOCOL'] . ' 500 Bhai roll no enter karna parega', true, 500);
    }
    if($_POST['flatnumber']){
        $flatnumber = $_POST['flatnumber'];
    } else{
        header('Content-Type: application/json');
	    header($_SERVER['SERVER_PROTOCOL'] . ' 500 Bhai name no enter karna parega', true, 500);
    }
    if($_POST['email']){
        $email = $_POST['email'];
    } else{
        header('Content-Type: application/json');
	    echo json_encode('enddate  is required');
    }
    if($_POST['date']){
        $date = $_POST['date'];
    } else{
        header('Content-Type: application/json');
	    echo json_encode('details  is required');
    }
    if($_POST['time']){
       
        $time = $_POST['time'];
    } else{
        header('Content-Type: application/json');
	    echo json_encode('title  is required');
    }
    if($_POST['venue']){
       
        $venue = $_POST['venue'];
    } else{
        header('Content-Type: application/json');
	    echo json_encode('title  is required');
    }
    if($_POST['detail']){
       
        $detail = $_POST['detail'];
    } else{
        header('Content-Type: application/json');
	    echo json_encode('title  is required');
    }
 
    
        if($con->query("insert into `facilitymanagement`(`name`,`flatnumber`,`email`,`date`,`time`,`venue`,`detail`) values('$name','$flatnumber','$email','$date','$time','$venue','$detail')")){
            header('Content-Type: application/json');
            echo json_encode('Data Succefully added');
        }
    
    

}
else{
    header($_SERVER['SERVER_PROTOCOL'] . ' Some error has occured', true, 500); 
}
?>