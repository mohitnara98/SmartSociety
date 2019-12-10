<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>Smart Society | Log in</title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
  <!-- Bootstrap 3.3.7 -->
  <link rel="stylesheet" href="bower_components/bootstrap/dist/css/bootstrap.min.css">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="bower_components/font-awesome/css/font-awesome.min.css">
  <!-- Ionicons -->
  <link rel="stylesheet" href="bower_components/Ionicons/css/ionicons.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="dist/css/AdminLTE.min.css">
  <!-- iCheck -->
  <link rel="stylesheet" href="plugins/iCheck/square/blue.css">
</head>
<body class="hold-transition login-page" style="background-image:url('images/login_bg.jpg');width:100%;   width: 100%; float:left; background-repeat: no-repeat; background-position: center;  background-size: cover;height:100vh;">
<div class="login-box" >
  
  <!-- /.login-logo -->

  <div class="login-box-body" style="text-align: center; border-radius: 5px; background-color:rgba(255, 255, 255, 0.9);" >
  <div>
  <img src="images/logo_my.png" style="text-align: center; max-width: 180px; height:100px;border-radius:2em;">
  </div>
   <div class="login-title">
    <h3><b>Log In</b></h3>    </div>
    
    <div>
    <!-- <p  style="font-family: Montserrat-Bold;"><b>Sign in to Smart Society</b></p> -->
</div>
    <form action="login.php" method="post">
 
      <div class="form-group has-feedback">
        
        <input type="email" name="email" class="form-control" placeholder="Email"style="border-radius: 25px">
        <span class="glyphicon glyphicon-envelope form-control-feedback"></span>
      </div>
      <div class="form-group has-feedback">
        <input type="password" name="password" class="form-control" placeholder="Password" style="border-radius: 25px">
        <span class="glyphicon glyphicon-lock form-control-feedback"></span>
      </div>
      <div class="row">
          <div class="col-xs-1 offset"></div>
        <!-- /.col -->
        <div class="col-xs-12">
          <button type="submit" class="btn btn-primary form-submit icon-before" style=" background-color:#29343f;   border-color: #33414e;"><span class="icon glyphicon glyphicon-log-in" aria-hidden="true"></span> Log In</button>
          <br/>
        <button type="button" class="btn btn-info btn-sm" data-toggle="modal" data-target="#help"style="margin-left:270px; background-color:#29343f; border-radius:100px;">?</button>
        <!-- /.col -->
      </div>
      <div style="position: absolute; top: px; right: 50pxx; bottom: 30px; left: 0;">
      <div id="help" class="modal fade" role="dialog">
        <div class="modal-dialog">
           <!-- Modal content-->
            <div class="modal-content" >
              <div class="modal-header">
              <h5 class="modal-title">Help</h5>
              <hr style="background-color:black">
              <button type="button" class="close" data-dismiss="modal">&times;</button>
       <p>Smart Society website is for registered citizens all citizens would have received user Id and Password on their registerd email
       if you are a citizen of smart society and haven't received the EmailId and Password, please contact secretary or society office</p>
      </div>


      <!--<div class="modal-body">-->
       <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
</div>
</div>
    </form>
  </div>
  <!-- /.login-box-body -->
</div>
<!-- /.login-box -->

<!-- jQuery 3 -->
<script src="bower_components/jquery/dist/jquery.min.js"></script>
<!-- Bootstrap 3.3.7 -->
<script src="bower_components/bootstrap/dist/js/bootstrap.min.js"></script>
<!-- iCheck -->
<script src="plugins/iCheck/icheck.min.js"></script>
<script>
  // $(function () {
  //   $('input').iCheck({
  //     checkboxClass: 'icheckbox_square-blue',
  //     radioClass: 'iradio_square-blue',
  //     increaseArea: '20%' /* optional */
  //   });
  // });
</script>
<?php
if ($_SERVER["REQUEST_METHOD"] == "POST"){
$conn = mysqli_connect("localhost","root","","smartsociety");
if(!$conn){
echo "error";  
}
 $sql="select emailid,passwords from flatowner";
 $result = $conn->query($sql);
 if(isset($_POST)){
 if ($result->num_rows > 0) {
  while($row = $result->fetch_assoc()) {
      if($_POST['email']==$row["emailid"] && $_POST['password']==$row["passwords"]){
        session_start();
        $_SESSION['user']=$_POST['email'];
          echo "<script>location.href='admin.php'</script>";
      } 
      else{
        echo"error";
      }  
  }
}
} 
}
?>    
</body>
</html>
