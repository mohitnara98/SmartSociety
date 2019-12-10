
<?php
include('../connection.php');

$valid_extensions = array('jpeg', 'jpg', 'png', 'gif', 'bmp' , 'pdf' , 'doc' , 'ppt','txt'); // valid extensions
$path = 'uploads/'; // upload directory

if ($_POST['wingname']){
    $wingname=$_POST['wingname'];
    $wingnames=explode(",",$wingname);
    // echo $wingnames[0];

}

    if($_POST['msg']){
        $msg = $_POST['msg'];
        $msgg=explode(",",$msg);
    $len=sizeof($msgg);

    // echo $msgg[0];
    } else{
        header('Content-Type: application/json');
        header($_SERVER['SERVER_PROTOCOL'] . ' names  error', true, 500);
    }
    if($_POST['mobilenumber']){
        $mobilenumber = $_POST['mobilenumber'];
    
    } else{
        header('Content-Type: application/json');
        header($_SERVER['SERVER_PROTOCOL'] . ' names  error', true, 500);
    }
    
    for($i=0;$i<$len;$i++)
    {
        $flatnumber=$msgg[$i];
        $wingname=$wingnames[$i];
        $con->query("insert into `serviceprovidernormalize`(`phonenumber`,`wingname`,`flatnumber`) values('$mobilenumber','$wingname','$flatnumber')");

    }

//         if($con->query("insert into `notice`(`noticetype`,`startdate`,`enddate`,`title`,`details`) values('$noticetype','$startdate','$enddate','$title','$details')")){
//             header('Content-Type: application/json');
//             echo json_encode('Data Succefully added');
//         }
    
    


// else{
//     header($_SERVER['SERVER_PROTOCOL'] . ' 500 Bhai aise thodi hota hai apko post requ', true, 500); 
// }

?>