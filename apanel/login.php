
<?php
$conn = mysqli_connect("localhost","root","","smartsociety");
if(!$conn){
echo "error";  
}
$checkForError= false;
 $sql="select roles,email,password from flatowner";
 $result = $conn->query($sql);
 if(isset($_POST) && isset($_POST['email'])){
 if ($result->num_rows > 0) {
  while($row = $result->fetch_assoc()) {
      if($_POST['email']==$row["email"] && $_POST['password']==$row["password"]){
        session_start();
        $_SESSION['user']=$_POST['email'];
        $roles = $row['roles'];
        $sql1 = "select * from assignroles where `name` = '$roles' limit 1";
        $result1 = $conn->query($sql1);
        //print_r($sql1);
        if($result1->num_rows > 0){
          while($row1 = $result1->fetch_assoc()){
          //  print_r($row1);
            $_SESSION['roles'] = $row1['role'];
            $_SESSION['permission'] = $row1['permission'];
          }
        }
        // $_SESSION['roles']=$row['roles'];
        // $_SESSION['permission']=$row['permissions'];
        
          echo "<script>location.href='admin.php?url=dashboard'</script>";
      }
      else{
        $checkForError = true;
        // echo "<script>alert('login failed')</script>";
      }   
  }
}
} 
?> 
<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  
  <title>  Log in | Smart Society </title>
  <link rel="shortcut icon" type="image/ico" href="images/shortcut.ico" >
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
  <!-- <link rel="stylesheet" href="plugins/iCheck/square/blue.css"> -->
</head>
<body class="hold-transition login-page" style="background-image:url('images/login_bg.jpg');width:100%;  background-repeat: no-repeat; background-position: center;height:100vh;">
<div class="login-box" >
  
  <!-- /.login-logo -->

  <div class="login-box-body" style="text-align: center; border-radius: 5px; background-color:#E8E8EA" >
  <div>
  <img src="images/logo_my.png" style="text-align: center; max-width: 180px; height:100px;border-radius:2em;">
  <br>
    </div>
    
    <div class="login-title">

    <h3 ><b >Log In</b></h3>
    <?php    
    if($checkForError){
    echo '<h5 style="color:red" >Wrong Username or Password</h5>';
    }
    ?>
    
</div>
    <form action="login.php" method="post" autocomplete="off">
      <div class="form-group has-feedback">
      <label class="control-label" style="margin-right:225px;">Email Id <span class="form-required" title="This field is required.">*</span></label>
        <input type="email" name="email" class="form-control" >
        <span class="glyphicon glyphicon-envelope form-control-feedback"></span>
      </div>
      
      <div class="form-group has-feedback">
      <label class="control-label"  style="margin-right:225px;">Password <span class="form-required" title="This field is required.">*</span></label>
        <input type="password" name="password" class="form-control" >
        <span class="glyphicon glyphicon-lock form-control-feedback"></span>
      </div>
      <div class="row">
          <div class="col-xs-1 offset">
        <!-- /.col -->
        <div class="col-xs-6">
          <button type="submit" class="btn btn-success " style="background-color:#29343f; margin-right:222px;"><span class="glyphicon glyphicon-log-in"></span> SignIn</button>
          </div>
        <button type="button" class="btn btn-info btn-sm" data-toggle="modal" data-target="#help"style="margin-left:270px; background-color:#29343f;">?</button>
        <!-- /.col -->
      </div>
      </div>
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
<!-- <script src="plugins/iCheck/icheck.min.js"></script>
<script>
  $(function () {
    $('input').iCheck({
      checkboxClass: 'icheckbox_square-blue',
      radioClass: 'iradio_square-blue',
      increaseArea: '20%' /* optional */
    });
  });
</script> -->
   
</body>
</html>
