
<?php
include('../connection.php');

$valid_extensions = array('jpeg', 'jpg', 'png', 'gif', 'bmp' , 'pdf' , 'doc' , 'ppt','txt'); // valid extensions
$path = 'uploads/'; // upload directory


    if($_POST['names']){
        $names = $_POST['names'];
        // echo $names;
    } else{
        header('Content-Type: application/json');
       
        header($_SERVER['SERVER_PROTOCOL'] . ' names  error', true, 500);
    }
    if($_POST['mobilenumber']){
        $mobilenumber = $_POST['mobilenumber'];
        // echo $mobilenumber;
    } else{
        header('Content-Type: application/json');
	    header($_SERVER['SERVER_PROTOCOL'] . ' mobilenumber error', true, 500);
    }
    if($_POST['serviceprovidertype']){
        $serviceprovidertype = $_POST['serviceprovidertype'];
        // echo $serviceprovidertype;
    } else{
        header('Content-Type: application/json');
	    header($_SERVER['SERVER_PROTOCOL'] . ' serviceprovidertype error', true, 500);
    }
   
    if($_POST['freetimeslot']){
        $freetimeslot = $_POST['freetimeslot'];
        // echo $freetimeslot;
    } else{
        header('Content-Type: application/json');
	    header($_SERVER['SERVER_PROTOCOL'] . ' freetimeslot error', true, 500);
    }
        
if($_POST['base64image'])
{

define('UPLOAD_DIR', 'uploads/');
$img = $_POST['base64image'];
$img = str_replace('data:image/jpeg;base64,', '', $img);
$img = str_replace(' ', '+', $img);
$data = base64_decode($img);
$file = UPLOAD_DIR . uniqid() . '.png';
$success = file_put_contents($file, $data);
}
 
        if($con->query("insert into `serviceprovider`(`name`,`phonenumber`,`type`,`freetimeslot`,`photo`) values('$names','$mobilenumber','$serviceprovidertype','$freetimeslot','$file')")){
            header('Content-Type: application/json');
            echo json_encode('Data Succefully added');
        }
    
    else{
        header($_SERVER['SERVER_PROTOCOL'] . ' 500 request error', true, 500); 
    } 
?>