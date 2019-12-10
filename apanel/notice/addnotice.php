<?php
include('../connection.php');
$valid_extensions = array('jpeg', 'jpg', 'png', 'gif', 'bmp' , 'pdf' , 'doc' , 'ppt','txt'); // valid extensions
$path = 'uploads/'; // upload directory


if($_SERVER['REQUEST_METHOD'] == 'POST'){
    if($_POST['noticetype']){
        $noticetype = $_POST['noticetype'];
    } else{
        header('Content-Type: application/json');
        // echo json_encode('rollno  is required');
        header($_SERVER['SERVER_PROTOCOL'] . ' 500 notice type error', true, 500);
    }
    if($_POST['startdate']){
        $startdate = $_POST['startdate'];
    } else{
        header('Content-Type: application/json');
	    header($_SERVER['SERVER_PROTOCOL'] . ' 500 date error', true, 500);
    }
    if($_POST['enddate']){
        $enddate = $_POST['enddate'];
    } else{
        header('Content-Type: application/json');
	    echo json_encode('end date error');
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

if($_FILES['attachment'])
{
$img = $_FILES['attachment']['name'];
$tmp = $_FILES['attachment']['tmp_name'];
 
// get uploaded file's extension
$ext = strtolower(pathinfo($img, PATHINFO_EXTENSION));
 
// can upload same image using rand function
$final_image = rand(1000,1000000).$img;
 
// check's valid format
if(in_array($ext, $valid_extensions)) 
{ 
$path = $path.strtolower($final_image); 
move_uploaded_file($tmp,$path);
} 
else{
    header('Content-Type: application/json');
	    header($_SERVER['SERVER_PROTOCOL'] . ' file error', true, 500);
}
}
    if($_POST['noticetype'] && $_POST['startdate'] && $_POST['enddate'] && $_POST['details'] && $_POST['title']){
        if($con->query("insert into `notice`(`noticetype`,`startdate`,`enddate`,`title`,`details`,`attachment`) values('$noticetype','$startdate','$enddate','$title','$details','$path')")){
            header('Content-Type: application/json');
            echo json_encode('Data Succefully added');
        }
    }
    

}
else{
    header($_SERVER['SERVER_PROTOCOL'] . ' 500 Bhai aise thodi hota hai apko post requ', true, 500); 
}
?>