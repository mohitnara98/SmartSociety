<?php
include('../connection.php');
$valid_extensions = array('jpeg', 'jpg', 'png', 'gif', 'bmp' , 'pdf' , 'doc' , 'ppt','txt'); // valid extensions
$path = 'uploads/'; // upload directory
if($_SERVER['REQUEST_METHOD'] == 'POST'){
    
    if($_POST['passwords']){
        $passwords = $_POST['passwords'];
    } else{
        header('Content-Type: application/json');
	    header($_SERVER['SERVER_PROTOCOL'] . ' password error', true, 500);
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
        header($_SERVER['SERVER_PROTOCOL'] . ' date of birth error', true, 500);
    }
    if($_POST['mobilenumber']){
        $mobilenumber = $_POST['mobilenumber'];
    } else{
        header('Content-Type: application/json');
	    header($_SERVER['SERVER_PROTOCOL'] . ' mobile number is requiered', true, 500);
    }
   
    if($_POST['wingname']){
        $wingname = $_POST['wingname'];
    } else{
        header('Content-Type: application/json');
	    echo json_encode('wing name  is required');
    }
    if($_POST['flatnumber']){
        $flatnumber = $_POST['flatnumber'];
    } else{
        header('Content-Type: application/json');
	    header($_SERVER['SERVER_PROTOCOL'] . 'flatnumber error', true, 500);
    }
    if($_POST['emailid']){
        $emailid = $_POST['emailid'];
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

    if($_FILES['flatownerimage'])
{
$img = $_FILES['flatownerimage']['name'];
$tmp = $_FILES['flatownerimage']['tmp_name'];
 
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
  
        if($con->query("insert into `flatowner`(`password`,`name`,`dateofbirth`,`mobilenumber`,`wingname`,`flatnumber`,`email`,`roles`,`image`) values('$passwords','$names','$dateofbirth',$mobilenumber,'$wingname',$flatnumber,'$emailid','$roles','$path')")){
            header('Content-Type: application/json');
            echo json_encode('Data Succefully added');
        }
        else{
            header('Content-Type: application/json');
            header($_SERVER['SERVER_PROTOCOL'] . 'mail already exist', true, 500); 
    
        }
    
}
else{
    header($_SERVER['SERVER_PROTOCOL'] . ' 500 error from php file', true, 500); 
}
?>