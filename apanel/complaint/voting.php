
<?php
include('../connection.php');

session_start();
$alreadyLikes = '';
if($_SERVER['REQUEST_METHOD'] == 'POST'){
    if($_POST['type'] == 1){
$result = $con->query("select * from `complaint` where srno=".$_POST['srno']." limit 1");
if($result->num_rows > 0){
    while($row = $result->fetch_assoc()){
        $alreadyLikes = $row['likes'];
        $like = explode(',',$row['likes']);
    }
    if(sizeof($like) == 1){
        $response = $con->query("update `complaint` set likes = '".$_SESSION['user'].",' where srno=".$_POST['srno']);
        if($response){
            Header('Content-Type: application/json; charset=UTF8');
            echo json_encode('Liked');
            header($_SERVER['SERVER_PROTOCOL'] . ' 200 Ok', true, 200);    
        }
    }
    else{
        $checkForAlreadyLike = false;
        foreach($like as $person){
            if($person == $_SESSION['user']){
                Header('Content-Type: application/json; charset=UTF8');
                echo json_encode('You have already liked this');
                header($_SERVER['SERVER_PROTOCOL'] . ' 200 Ok', true, 200);
                $checkForAlreadyLike = true;
                break;
            }
        }
        if(!$checkForAlreadyLike){
            $response = $con->query("update `complaint` set likes = '".$alreadyLikes.$_SESSION['user'].",' where srno=".$_POST['srno']);
            if($response){
                Header('Content-Type: application/json; charset=UTF8');
                echo json_encode('Liked');
                header($_SERVER['SERVER_PROTOCOL'] . ' 200 Ok', true, 200);    
            }
        }
    }
        
}
    }



    if($_POST['type'] == 2){
        $result = $con->query("select * from `complaint` where srno=".$_POST['srno']." limit 1");
        if($result->num_rows > 0){
            while($row = $result->fetch_assoc()){
                $alreadyDisLikes = $row['dislikes'];
                $disLike = explode(',',$row['dislikes']);
            }
            if(sizeof($disLike) == 1){
                $response = $con->query("update `complaint` set dislikes = '".$_SESSION['user'].",' where srno=".$_POST['srno']);
                if($response){
                    Header('Content-Type: application/json; charset=UTF8');
                    echo json_encode('DisLiked');
                    header($_SERVER['SERVER_PROTOCOL'] . ' 200 Ok', true, 200);    
                }
            }
            else{
                $checkForAlreadyDisLike = false;
                foreach($disLike as $person){
                    if($person == $_SESSION['user']){
                        Header('Content-Type: application/json; charset=UTF8');
                        echo json_encode('You have already dis liked this');
                        header($_SERVER['SERVER_PROTOCOL'] . ' 200 Ok', true, 200);
                        $checkForAlreadyDisLike = true;
                        break;
                    }
                }
                if(!$checkForAlreadyDisLike){
                    $response = $con->query("update `complaint` set dislikes = '".$alreadyDisLikes.$_SESSION['user'].",' where srno=".$_POST['srno']);
                    if($response){
                        Header('Content-Type: application/json; charset=UTF8');
                        echo json_encode('DisLiked');
                        header($_SERVER['SERVER_PROTOCOL'] . ' 200 Ok', true, 200);    
                    }
                }
            }
                
        }
            }




}
?>