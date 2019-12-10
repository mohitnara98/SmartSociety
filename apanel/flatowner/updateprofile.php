<?php
include('../connection.php');
$valid_extensions = array('jpeg', 'jpg', 'png', 'gif', 'bmp' , 'pdf' , 'doc' , 'ppt','txt'); // valid extensions
$path = 'uploads/'; // upload directory
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

if( $con->query("update flatowner set image='$path' "))
{
    header('Content-Type: application/json');
            echo json_encode('Data Succefully added');
}
?>