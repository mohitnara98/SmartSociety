<?php
include('../connection.php');
$valid_extensions = array('jpeg', 'jpg', 'png', 'gif', 'bmp' , 'pdf' , 'doc' , 'ppt','txt'); // valid extensions
$path = 'uploads/'; // upload directory


if($_SERVER['REQUEST_METHOD'] == 'POST'){
    if($_POST['visitorname']){
        $visitorname = $_POST['visitorname'];
    } else{
        header('Content-Type: application/json');
        // echo json_encode('rollno  is required');
        header($_SERVER['SERVER_PROTOCOL'] . ' Visitor name not found', true, 500);
    }
    if($_POST['visitorphonenumber']){
        $visitorphonenumber = $_POST['visitorphonenumber'];
    } else{
        header('Content-Type: application/json');
	    header($_SERVER['SERVER_PROTOCOL'] . ' visitor phone number not found', true, 500);
    }
    if($_POST['wingname']){
        $wingname = $_POST['wingname'];
    } else{
        header('Content-Type: application/json');
	    echo json_encode('wingname  error');
    }
    if($_POST['place']){
        $place = $_POST['place'];
    } else{
        header('Content-Type: application/json');
	    echo json_encode('place  error');
    }
    if($_POST['purpose']){
        $purpose = $_POST['purpose'];
    } else{
        header('Content-Type: application/json');
	    echo json_encode('purpose  error');
    }
    if($_POST['datevisited']){
        $datevisited = $_POST['datevisited'];
    } else{
        header('Content-Type: application/json');
	    echo json_encode('datevisited  error');
    }
    if($_POST['intime']){
        $intime = $_POST['intime'];
        // echo $intime;
    } else{
        header('Content-Type: application/json');
	    echo json_encode('intime error');
    }
    if($_POST['vehiclenumber']){
        $vehiclenumber = $_POST['vehiclenumber'];
    } else{
        header('Content-Type: application/json');
	    echo json_encode('vehiclenumber error');
    }
    if($_POST['gatenumber']){
        $gatenumber = $_POST['gatenumber'];
    } else{
        header('Content-Type: application/json');
	    echo json_encode('gatenumber error');
    }
   
    if($_POST['noofpersons']){
        $noofpersons = $_POST['noofpersons'];
    } else{
        header('Content-Type: application/json');
	    echo json_encode('noofpersons error');
    }
    $otp=rand(10000,99999);
       
if($_POST['base64image'])
{

define('UPLOAD_DIR', 'uploads/');
$img = $_POST['base64image'];
$img = str_replace('data:image/jpeg;base64,', '', $img);
$img = str_replace(' ', '+', $img);
$data = base64_decode($img);
$file = UPLOAD_DIR . uniqid() . '.png';
$success = file_put_contents($file, $data);


// $img = $_FILES['base64image']['name'];
// $tmp = $_FILES['base64image']['tmp_name'];
 
// // get uploaded file's extension
// $ext = strtolower(pathinfo($img, PATHINFO_EXTENSION));
 
// // can upload same image using rand function
// $final_image = rand(1000,1000000).$img;
 
// // check's valid format
// if(in_array($ext, $valid_extensions)) 
// { 
// $path = $path.strtolower($final_image); 
// move_uploaded_file($tmp,$path);
// } 
// else{
//     header('Content-Type: application/json');
// 	    header($_SERVER['SERVER_PROTOCOL'] . ' file error', true, 500);
// }
}
 
    
        if($con->query("insert into `visitors`(`image`,`visitorname`,`visitorphonenumber`,`wingname`,`place`,`purpose`,`datevisited`,`intime`,`gatenumber`,`vehiclenumber`,`noofpersons`,`otp`) values('$file','$visitorname','$visitorphonenumber','$wingname','$place','$purpose','$datevisited','$intime','$gatenumber','$vehiclenumber','$noofpersons','$otp')")){
           
        // $result = mysqli_query($con,"select * from flatowner where flatnumber = $place");
        //    if(mysqli_num_rows($result) > 0){
        //     while($row = mysqli_fetch_assoc($result)){
                // $number = $row['mobilenumber'];
                $purpose=urlencode($purpose);
              $url="http://sms.static-codes.com/vendorsms/pushsms.aspx?user=smartsociety&password=smartsociety1234&msisdn=$visitorphonenumber&sid=SMTSOC&msg=$visitorname%20your%20OTP%20is%20$otp&fl=0&gwid=2";
                $curl=curl_init($url);
                curl_setopt($curl,CURLOPT_HTTPHEADER,array('Content-Length:0'));
                curl_setopt($curl,CURLOPT_HEADER,false);
                curl_setopt($curl,CURLOPT_RETURNTRANSFER,true);
                curl_setopt($curl,CURLOPT_POST,TRUE);
                $result123=curl_exec($curl);
                // echo $url;
        //     }
        //     }

            header('Content-Type: application/json');
            echo json_encode('Data Succefully added');
        }
        else{
            header($_SERVER['SERVER_PROTOCOL'] . ' 500 Post Request Failure', true, 500); 
        }
    

}


    
?>




               