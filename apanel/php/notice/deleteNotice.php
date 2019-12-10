<?php
include('../connection/connection.php');

if($_SERVER['REQUEST_METHOD'] == 'POST'){
    if($_POST['srno']){
        $srno = $_POST['srno'];
    } else{
        header('Content-Type: application/json');
        header($_SERVER['SERVER_PROTOCOL'] . ' 500 srno should not be empty', true, 500);
    }

    if($_POST['srno']){
        if($con->query("delete from `notice` where srno =".$srno)){
            header('Content-Type: application/json');
            echo json_encode('delete from `notice` where srno ="'.$srno);
        }
    }
    
}
else{
    header($_SERVER['SERVER_PROTOCOL'] . ' 500 request should be post request', true, 500); 
}
?>