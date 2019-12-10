


<?php
session_start();
include('../connection.php');

$valid_extensions = array('jpeg', 'jpg', 'png', 'gif', 'bmp' , 'pdf' , 'doc' , 'ppt'); // valid extensions
$path = 'uploads/'; // upload directory

if($_SERVER['REQUEST_METHOD'] == 'POST'){
    if($_POST['complaint_type']){
        $complainttype = $_POST['complaint_type'];
    } else{
        header('Content-Type: application/json');
        // echo json_encode('rollno  is required');
        header($_SERVER['SERVER_PROTOCOL'] . ' complaint type error', true, 500);
    }
    if($_POST['details']){
        $details = $_POST['details'];
    } else{
        header('Content-Type: application/json');
	    header($_SERVER['SERVER_PROTOCOL'] . ' details error', true, 500);
    }
   $sender=$_SESSION['user'];
    if($_POST['complainttype'] && $_POST['details'] ){
        if($con->query("insert into `complaint`(`complainttype`,`details`,`sender`) values('$complainttype','$details','$sender')")){
            header('Content-Type: application/json');
            echo json_encode('Data Succefully added');
        }
    }
    

}
else{
    header($_SERVER['SERVER_PROTOCOL'] . ' 500 request error', true, 500); 
}
?>


if(!empty($_POST['name']) || !empty($_POST['email']) || $_FILES['image'])
{
$img = $_FILES['image']['name'];
$tmp = $_FILES['image']['tmp_name'];
// get uploaded file's extension
$ext = strtolower(pathinfo($img, PATHINFO_EXTENSION));
// can upload same image using rand function
$final_image = rand(1000,1000000).$img;
// check's valid format
if(in_array($ext, $valid_extensions)) 
{ 
$path = $path.strtolower($final_image); 
if(move_uploaded_file($tmp,$path)) 
{
echo "<img src='$path' />";
$name = $_POST['name'];
$email = $_POST['email'];
//include database configuration file
include_once 'db.php';
//insert form data in the database
$insert = $db->query("INSERT uploading (name,email,file_name) VALUES ('".$name."','".$email."','".$path."')");
//echo $insert?'ok':'err';
}
} 
else 
{
echo 'invalid';
}
}
?>