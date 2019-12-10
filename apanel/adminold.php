<?php
session_start();
if(!isset($_SESSION['user'])){
    echo"<script>location.href='login.php'</script>";
}

?>
<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title> Smart Society</title>
  <link rel="icon" type="image/ico" href="images/icon.png" />

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
  <!-- AdminLTE Skins. Choose a skin from the css/skins
       folder instead of downloading all of them to reduce the load. -->
  <link rel="stylesheet" href="dist/css/skins/_all-skins.min.css">

  <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
  <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
  <!--[if lt IE 9]>
  <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
  <![endif]-->

  <!-- Google Font -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,300italic,400italic,600italic">
  
  <script src="js/alert.js" type="text/javascript"></script>
  






<link rel="stylesheet" href="https://cdn.datatables.net/1.10.16/css/jquery.dataTables.min.css"/>
<link rel="stylesheet" href="https://cdn.datatables.net/buttons/1.5.1/css/buttons.dataTables.min.css"/>
<link rel="stylesheet" href="https://cdn.datatables.net/select/1.2.5/css/select.dataTables.min.css"/>
<link rel="stylesheet" href="https://editor.datatables.net/extensions/Editor/css/editor.dataTables.min.css"/>







<link rel="stylesheet" href="https://cdn.datatables.net/1.10.16/css/jquery.dataTables.min.css">
	

	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
	
	<script src="https://cdn.datatables.net/1.10.16/js/jquery.dataTables.min.js"></script>

	<script type="text/javascript" language="javascript" src="https://code.jquery.com/jquery-1.12.4.js">
	</script>
	<script type="text/javascript" language="javascript" src="https://cdn.datatables.net/1.10.16/js/jquery.dataTables.min.js">
	</script>
	<script type="text/javascript" language="javascript" src="https://cdn.datatables.net/buttons/1.5.0/js/dataTables.buttons.min.js">
	</script>
	<script type="text/javascript" language="javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jszip/3.1.3/jszip.min.js">
	</script>
	<script type="text/javascript" language="javascript" src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.32/pdfmake.min.js">
	</script>
	<script type="text/javascript" language="javascript" src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.32/vfs_fonts.js">
	</script>
	<script type="text/javascript" language="javascript" src="https://cdn.datatables.net/buttons/1.5.0/js/buttons.html5.min.js">
	</script>
	<script>var jq = $.noConflict();</script>






</head>
<body class="hold-transition skin-blue sidebar-mini">
<!-- Site wrapper -->
<div class="wrapper">

  <header class="main-header">
    <!-- Logo -->
    <a href="admin.php" class="logo">
      <!-- mini logo for sidebar mini 50x50 pixels -->
     
      <!-- logo for regular state and mobile devices -->
      <span class="logo-lg"><b>Smart Society</span>
    </a>
    <!-- Header Navbar: style can be found in header.less -->
    <nav class="navbar navbar-static-top">
      <!-- Sidebar toggle button-->
      <a href="#" class="sidebar-toggle" data-toggle="push-menu" role="button">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </a>

      <div class="navbar-custom-menu">
        <ul class="nav navbar-nav">
          <!-- Messages: style can be found in dropdown.less-->
      
          <!-- Notifications: style can be found in dropdown.less -->
          
          <!-- Tasks: style can be found in dropdown.less -->
          
          <!-- User Account: style can be found in dropdown.less -->
          <li class="dropdown user user-menu">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
              <img src="dist/img/user2-160x160.jpg" class="user-image" alt="User Image">
              <span class="hidden-xs"><?php echo $_SESSION['user'];?></span>
            </a>
            <ul class="dropdown-menu">
              <!-- User image -->
              <li class="user-header">
                <img src="dist/img/user2-160x160.jpg" class="img-circle" alt="User Image">

                <p>
                  <?php echo $_SESSION['user'];?>
                </p>
              </li>
      
              <!-- Menu Footer-->
              <li class="user-footer">
                <!--<div class="pull-left">
                <a href="#" class="btn btn-default btn-flat">Profile</a>
                </div>-->
                <div class="pull-right">
                  <a href="logout.php" class="btn btn-danger btn-flat">Sign out</a>
                </div>
              </li>
            </ul>
          </li>
          <!-- Control Sidebar Toggle Button -->
          <!-- <li>
            <a href="#" data-toggle="control-sidebar"><i class="fa fa-gears"></i></a>
          </li> -->
        </ul>
      </div>
    </nav>
  </header>

  <!-- =============================================== -->

  <!-- Left side column. contains the sidebar -->
  <aside class="main-sidebar">
    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">
      <!-- Sidebar user panel -->
      <!-- <div class="user-panel">
        <div class="pull-left image">
          <img src="dist/img/user2-160x160.jpg" class="img-circle" alt="User Image">
        </div>
        <div class="pull-left info">
          <p><?php echo $_SESSION['user'];?></p>
          
        </div>
      </div> -->
      <!-- search form 
      <form action="#" method="get" class="sidebar-form">
        <div class="input-group">
          <input type="text" name="q" class="form-control" placeholder="Search...">
          <span class="input-group-btn">
                <button type="submit" name="search" id="search-btn" class="btn btn-flat"><i class="fa fa-search"></i>
                </button>
              </span>
        </div>
      </form>-->
      <!-- /.search form -->
      <!-- sidebar menu: : style can be found in sidebar.less -->
      <ul class="sidebar-menu" data-widget="tree">
        <li class="header">MAIN NAVIGATION</li>
        <li>
          <a href="admin.php">
            <i class="fa fa-dashboard"></i> <span>Dashboard</span>
            <span class="pull-right-container">
              
            </span>
          </a>
          
        </li>
        
        <li>
          <a href="admin.php?url=settings">
         <i class="fa fa-cog fa-fw" aria-hidden="true"></i> <span>Settings</span>
            <span class="pull-right-container">
              
            </span>
          </a>
          
        </li>
        
                <li class="treeview">
          <a href="#">
          <i class="fa fa-user-circle-o" aria-hidden="true"></i> <span>Add Users</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
            <ul class="treeview-menu">
            <li><a href="admin.php?url=flatowner"><i class="fa fa-circle-o"></i>  Flat Owner</a></li>
            <li><a href="admin.php?url=Edit/View"><i class="fa fa-circle-o"></i> View/Edit Flat Owner</a></li>
            <li><a href="admin.php?url=commiteemember"><i class="fa fa-circle-o"></i>Commitee Member</a></li>
            <li><a href="admin.php?url=vieweditcommiteemember"><i class="fa fa-circle-o"></i> View/Edit Commitee <br> &nbsp; &nbsp; &nbsp; Member</a></li>
            
          </ul>
            
          </a>
          
        </li>
        
         <li>
          <a href="admin.php?url=notice">
            <i class="fa fa-commenting-o" aria-hidden="true"></i> <span>Notice</span>
            <span class="pull-right-container">
              
            </span>
          </a>
          
        </li>
        
        <li>
          <a href="admin.php?url=noticeuser">
            <i class="fa fa-commenting-o" aria-hidden="true"></i> <span>Notice user</span>
            <span class="pull-right-container">
              
            </span>
          </a>
          
        </li>
        
         <li>
          <a href="admin.php?url=complaints">
            <i class="fa fa-commenting-o" aria-hidden="true"></i> <span>Complaints</span>
            <span class="pull-right-container">
              
            </span>
          </a>
          
        </li>

        
        <li>
          <a href="admin.php?url=complaintsadmin">
            <i class="fa fa-commenting-o" aria-hidden="true"></i> <span>Complaints admin</span>
            <span class="pull-right-container">
              
            </span>
          </a>
          
        </li>
        
        
         <li>
          <a href="admin.php?url=facilitymanagementadmin">
           <i class="fa fa-home" aria-hidden="true"></i> <span>Facility Management admin</span>
            <span class="pull-right-container">
              
            </span>
          </a>
          
        </li>
           <li>
          <a href="admin.php?url=facilitymanagementuser">
           <i class="fa fa-home" aria-hidden="true"></i> <span>Facility Management user</span>
            <span class="pull-right-container">
            </span>
          </a>
        </li>
       <li>
          <a href="admin.php?url=meetings">
            <i class="fa fa-handshake-o" aria-hidden="true"></i><span> Meetings</span>
            <span class="pull-right-container">
              
            </span>
          </a>
          
        </li>
        
        
         <li>
          <a href="admin.php?url=maintenance">
          <i class="fa fa-money" aria-hidden="true"></i> <span>Maintenance</span>
            <span class="pull-right-container">
              
            </span>
          </a>
          
        </li>
        
        
        <li class="treeview">
          <a href="#">
          <img  type="image/ico" src="images/securityguard.ico" /> <span>Security</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
            <ul class="treeview-menu">
            <li><a href="admin.php?url=visitors"><i class="fa fa-circle-o"></i> Visitors</a></li>
            <li><a href="admin.php?url=regularvisitors"><i class="fa fa-circle-o"></i> Regular Visitors</a></li> 
          </ul>
            
          </a>
          
        </li>
        
             
      </ul>
    </section>
    <!-- /.sidebar -->
  </aside>

  <!-- =============================================== -->
<?php
    if(isset($_GET['url'])){
    $pageName = $_GET['url'];
    }
    else{
    $pageName="";    
    }
    ?>
  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Admin Page
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Admin</a></li>
        <li><a href="#"><?php echo $pageName;?></a></li>
      </ol>
    </section>

    <!-- Main content -->
    <section class="content">
          
      <!-- Default box-->
      <div class="box">
        <div class="box-header with-border">
          <h3 class="box-title"><?php echo $pageName;?></h3>

          <!--<div class="box-tools pull-right">
            <button type="button" class="btn btn-box-tool" data-widget="collapse" data-toggle="tooltip"
                    title="Collapse">
              <i class="fa fa-minus"></i></button>
            <button type="button" class="btn btn-box-tool" data-widget="remove" data-toggle="tooltip" title="Remove">
              <i class="fa fa-times"></i></button>
          </div>-->
        </div>
        <div class="box-body">
              <?php
    $pageName = $_GET['url'];
    if($pageName=="" || $pageName=="home"){
    include("home.php");        
    }
    else if($pageName=="adduser"){
        include("adduser.html");        
    }
    else if($pageName=="notice"){
        include("notice/notice.html");        
    }else if($pageName=="noticeuser"){
      include("noticeuser.php");        
  }
    else if($pageName=="flatowner"){
        include("flatowner/flatowner.html");
    }
    else if($pageName=="Edit/View"){
        include("flatowner/vieweditflatowner.html");
    }
    
    else if($pageName=="commiteemember"){
        include("flatowner/commiteemember.html");        
    }
    else if($pageName=="settings"){
        include("settings/settings1.html");        
    }
    else if($pageName=="settings2"){
        include("settings/settings2.html");        
    }
        else if($pageName=="settings3"){
        include("settings/settings3.html");        
    }
    
    else if($pageName=="vieweditcommiteemember"){
        include("flatowner/vieweditcommiteemember.html");        
    }
    else if($pageName=="complaints"){
        include("complaint/complaintowner.html");        
    } 
    
    else if($pageName=="complaintsadmin"){
      include("complaints/complaintadmin.php");        
  }
    else if($pageName=="facilitymanagementadmin"){
        include("facilitymanagement/facilitymanagementadmin.php");
        
    }
        else if($pageName=="facilitymanagementuser"){
        include("facilitymanagement/facilitymanagementuser.html");
        
    }
    else if($pageName=="meetings"){
        include("meetings/meetings.html");        
    } else if($pageName=="maintenance"){
        include("maintenance.html");        
    } else if($pageName=="visitors"){
        include("visitors/visitors.html");        
    }
    else if($pageName=="regularvisitors"){
      include("visitors/regularvisitors.html");        
  }else if($pageName=="otp"){
    include("visitors/otp.html");        
}
    else{
        include("page failure.php");
    }
    
    ?>
        </div>
        <!-- /.box-body -->
        <div class="box-footer">
          
        </div>
        <!-- /.box-footer-->
      </div>
      <!--.box -->



    </section>
    <!-- /.content -->
  </div>

  <!-- Control Sidebar -->
  <aside class="control-sidebar control-sidebar-dark">
    <!-- Create the tabs -->
    <ul class="nav nav-tabs nav-justified control-sidebar-tabs">

    </ul>
    <!-- Tab panes -->
    <div class="tab-content">
      <!-- Home tab content -->
      <div class="tab-pane" id="control-sidebar-home-tab">
        
        
        

        
      </div>
      <!-- /.tab-pane -->
      <!-- Stats tab content -->
      <div class="tab-pane" id="control-sidebar-stats-tab">Stats Tab Content</div>
      <!-- /.tab-pane -->
      <!-- Settings tab content -->
      <div class="tab-pane" id="control-sidebar-settings-tab">
        
      </div>
      <!-- /.tab-pane -->
    </div>
  </aside>
  <!-- /.control-sidebar -->
  <!-- Add the sidebar's background. This div must be placed
       immediately after the control sidebar -->
  <div class="control-sidebar-bg"></div>
</div>
<!-- ./wrapper -->

<!-- jQuery 3 -->
<script src="bower_components/jquery/dist/jquery.min.js"></script>
<!-- Bootstrap 3.3.7 -->
<script src="bower_components/bootstrap/dist/js/bootstrap.min.js"></script>
<!-- SlimScroll -->
<script src="bower_components/jquery-slimscroll/jquery.slimscroll.min.js"></script>
<!-- FastClick -->
<script src="bower_components/fastclick/lib/fastclick.js"></script>
<!-- AdminLTE App -->
<script src="dist/js/adminlte.min.js"></script>
<!-- AdminLTE for demo purposes -->
<script src="dist/js/demo.js"></script>
<script>
  $(document).ready(function () {
    $('.sidebar-menu').tree()
  })
</script>
</body>
</html>
