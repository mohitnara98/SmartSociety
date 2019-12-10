
<?php
session_start();
include('../connection.php');

$valid_extensions = array('jpeg', 'jpg', 'png', 'gif', 'bmp' , 'pdf' , 'doc' , 'ppt','txt'); // valid extensions
$path = 'uploads/'; // upload directory

if($_SERVER['REQUEST_METHOD'] == 'POST'){
    if($_POST['complaint_type']){
        $complainttype = $_POST['complaint_type'];
    } else{
        header('Content-Type: application/json');
        // echo json_encode('rollno  is required');
        header($_SERVER['SERVER_PROTOCOL'] . ' complaint type error', true, 500);
    }
    if($_POST['complaint_details']){
        $details = $_POST['complaint_details'];
    } else{
        header('Content-Type: application/json');
	    header($_SERVER['SERVER_PROTOCOL'] . ' details error', true, 500);
    }
    
if($_FILES['complaint_image'])
{
$img = $_FILES['complaint_image']['name'];
$tmp = $_FILES['complaint_image']['tmp_name'];
 
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
$datess = date("d/m/Y"); 
   $sender=$_SESSION['user'];
    if($_POST['complaint_type'] && $_POST['complaint_details'] ){
        if($con->query("insert into `complaint`(`complainttype`,`date`,`details`,`sender`,`image`) values('$complainttype','$datess','$details','$sender','$path')")){
            header('Content-Type: application/json');
            echo json_encode('Data Succefully added');
        }
    }
    

}
else{
    header($_SERVER['SERVER_PROTOCOL'] . ' 500 request error', true, 500); 
} 
?>