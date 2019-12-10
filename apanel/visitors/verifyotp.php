<?php
include('../connection.php');
require"PHPMailer-5.2-stable/PHPMailerAutoload.php";
$mail = new PHPMailer;
$userotp=$_POST['otpp'];
$result = mysqli_query($con,"select image,visitorname,visitorphonenumber,wingname,place,purpose,otp FROM visitors ORDER BY srno DESC LIMIT 1");
while($row = mysqli_fetch_assoc($result)){
    $number = $row['otp'];
    $purpose=$row['purpose'];
    $image=$row['image'];

    $visitorname=$row['visitorname'];
$place=$row['place'];
$wingname=$row['wingname'];
}
$visitorphonenumber=$row['visitorphonenumber'];



if($number==$userotp){
$result1 = mysqli_query($con,"select email,mobilenumber from flatowner where wingname='$wingname' AND flatnumber=$place");
while($row1 = mysqli_fetch_assoc($result1)){
             $visitnumber = $row1['mobilenumber'];
             $email=$row1['email'];
             $emailpurpose=$purpose;
           $purpose=urlencode($purpose);

    $url="http://sms.static-codes.com/vendorsms/pushsms.aspx?user=smartsociety&password=smartsociety1234&msisdn=$visitnumber&sid=SMTSOC&msg=$visitorname%20is%20coming%20at%20your%20home%20for%20$purpose&fl=0&gwid=2";
    $curl=curl_init($url);
    curl_setopt($curl,CURLOPT_HTTPHEADER,array('Content-Length:0'));
    curl_setopt($curl,CURLOPT_HEADER,false);
    curl_setopt($curl,CURLOPT_RETURNTRANSFER,true);
    curl_setopt($curl,CURLOPT_POST,TRUE);
    $result123=curl_exec($curl);
    $mail->isSMTP();                                      // Set mailer to use SMTP
    $mail->Host = 'smtp.gmail.com';  // Specify main and backup SMTP servers
    $mail->SMTPAuth = true;                               // Enable SMTP authentication
    $mail->Username = 'aaokabhihavelipe99@gmail.com';                 // SMTP username
    $mail->Password = 'aaokabhihavelipe@99';                           // SMTP password
    $mail->SMTPSecure = 'tls';                            // Enable TLS encryption, `ssl` also accepted
    $mail->Port = 587;                                    // TCP port to connect to
    
    $mail->setFrom('aaokabhihavelipe99@gmail.com', 'Smart Society');
    
    $mail->addAddress($email);               // Name is optional
    
    
    $mail->addAttachment($image);         // Add attachments
    
    $mail->isHTML(true);                                  // Set email format to HTML
    
    $mail->Subject = 'visitor is coming';
    $mail->Body    = $visitorname.' is coming at your home for '.$emailpurpose;
    
    
    if(!$mail->send()) {
        echo 'Message could not be sent.';
        echo 'Mailer Error: ' . $mail->ErrorInfo;
    } else {
        echo 'Message has been sent';
    }

}
}
else{
    header('Content-Type: application/json');
    header($_SERVER['SERVER_PROTOCOL'] . ' otp incorrect', true, 500);
    
}
?>