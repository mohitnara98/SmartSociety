<?php
include('../connection.php');

$result="";
$number ="";
$i="";
$numberss =array();
$wingname=$_POST['wingname'];
// print_r( $wingname);
$flatnumbers=$_POST['flatnumbers'];
// print_r($flatnumbers);
// $flatnumbers=explode(",",$flatnumbers);
$phonenumber=$_POST['phone'];
// echo $phonenumber;
// print_r ($flatnumbers);
$flatnumberlength=sizeof($flatnumbers);
for($i=0;$i<$flatnumberlength;$i++)
{
    $wing=$wingname[$i];
    $place=$flatnumbers[$i];
    $result = mysqli_query($con,"select mobilenumber from flatowner where wingname='$wing' and flatnumber = $place");
    
        while($row = mysqli_fetch_assoc($result)){
            $number = $row['mobilenumber'];

        }

        array_push($numberss,$number);
}

        // print_r($numberss);
        $numberconverted=implode(',',$numberss);
        echo $numberconverted;
 $numberconverted=urlencode($numberconverted);
 $visitorname=$_POST['name'];
 echo $visitorname;
 $purpose=$_POST['type'];
 echo $purpose;
$purpose=urlencode($purpose);
$url="http://sms.static-codes.com/vendorsms/pushsms.aspx?user=smartsociety&password=smartsociety1234&msisdn=$numberconverted&sid=SMTSOC&msg=$visitorname%20(%20$purpose%20)%20coming%20at%20your%20place&fl=0&gwid=2";
$curl=curl_init($url);
curl_setopt($curl,CURLOPT_HTTPHEADER,array('Content-Length:0'));
curl_setopt($curl,CURLOPT_HEADER,false);
curl_setopt($curl,CURLOPT_RETURNTRANSFER,true);
curl_setopt($curl,CURLOPT_POST,TRUE);
$result123=curl_exec($curl);
 ?>