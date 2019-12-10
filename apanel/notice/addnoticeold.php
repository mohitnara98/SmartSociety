<?php
include('../connection.php');


if($_SERVER['REQUEST_METHOD'] == 'POST'){
    if($_POST['noticetype']){
        $noticetype = $_POST['noticetype'];
    } else{
        header('Content-Type: application/json');
        // echo json_encode('rollno  is required');
        header($_SERVER['SERVER_PROTOCOL'] . ' 500 Bhai roll no enter karna parega', true, 500);
    }
    if($_POST['startdate']){
        $startdate = $_POST['startdate'];
    } else{
        header('Content-Type: application/json');
	    header($_SERVER['SERVER_PROTOCOL'] . ' 500 Bhai name no enter karna parega', true, 500);
    }
    if($_POST['enddate']){
        $enddate = $_POST['enddate'];
    } else{
        header('Content-Type: application/json');
	    echo json_encode('enddate  is required');
    }
    if($_POST['details']){
        $details = $_POST['details'];
    } else{
        header('Content-Type: application/json');
	    echo json_encode('details  is required');
    }
    if($_POST['title']){
        $title = $_POST['title'];
    } else{
        header('Content-Type: application/json');
	    echo json_encode('title  is required');
    }
    if($_POST['noticetype'] && $_POST['startdate'] && $_POST['enddate'] && $_POST['details'] && $_POST['title']){
        if($con->query("insert into `notice`(`noticetype`,`startdate`,`enddate`,`title`,`details`) values('$noticetype','$startdate','$enddate','$title','$details')")){
            header('Content-Type: application/json');
            echo json_encode('Data Succefully added');
        }
    }
    

}
else{
    header($_SERVER['SERVER_PROTOCOL'] . ' 500 Bhai aise thodi hota hai apko post requ', true, 500); 
}
?>