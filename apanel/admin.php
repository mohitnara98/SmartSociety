<?php
session_start();
if(!isset($_SESSION['user'])){
    echo"<script>location.href='login.php'</script>";
}

?>
<!DOCTYPE html>
<html>
  <head>
		
  <title>Smart Society </title>
  <link rel="shortcut icon" type="image/ico" href="images/shortcut.ico" >
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/solid.css" integrity="sha384-r/k8YTFqmlOaqRkZuSiE9trsrDXkh07mRaoGBMoDcmA58OHILZPsk29i2BsFng1B" crossorigin="anonymous">

	<!-- <link href="http://code.jquery.com/ui/1.11.3/themes/smoothness/jquery-ui.css" rel="stylesheet">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
  <script src="http://code.jquery.com/ui/1.11.3/jquery-ui.min.js"></script> -->
  <!-- Tell the browser to be responsive to screen width -->
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
  <!-- Bootstrap 3.3.7 -->
	<link rel="stylesheet" href="bower_components/bootstrap/dist/css/bootstrap.min.css">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
    
	
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

    <title>Smart Society</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Bootstrap -->
    <link href="bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <!-- styles -->
    <link href="css/styles.css" rel="stylesheet">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
      <script src="https://oss.maxcdn.com/libs/respond.js/1.3.0/respond.min.js"></script>
    <![endif]-->
  </head>
  <body >
  	<div class="header" >
	     <div class="container" >
	        <div class="row" >
					<div class="col-md-6" >
	              <!-- Logo -->
	              <div class="logo">
	                 <img src="images/smartsocietylogo.png"style="height:100px; margin-top:-24px; margin-left: -67px;" >
	              </div>
	           </div>
	           <!-- <div class="col-md-5">
	              <div class="row">
	                <div class="col-lg-12">
	                  <div class="input-group form">
	                       <input type="text" class="form-control" placeholder="Search...">
	                       <span class="input-group-btn">
	                         <button class="btn btn-primary" type="button">Search</button>
	                       </span>
	                  </div>
	                </div>
	              </div>
	           </div> -->
	           <div class="col-md-6">
	              <div class="navbar navbar-inverse" role="banner">
	                  <nav class="collapse navbar-collapse bs-navbar-collapse navbar-right" role="navigation">
	                    <ul class="nav navbar-nav">
	                      <li class="dropdown">
												
	                        <a href="#" class="dropdown-toggle" data-toggle="dropdown"><?php echo $_SESSION['user']?> <b class="caret"></b></a>
	                        <ul class="dropdown-menu animated fadeInUp"style="background-color:#153240; color:white;">
	                          <li><a href="admin.php?url=profile">Profile</a></li>
	                          <li ><a href="logout.php">Logout</a></li>
	                        </ul>
	                      </li>
	                    </ul>
	                  </nav>
	              </div>
	           </div>
	        </div>
	     </div>
	</div>
<?php

$roles = $_SESSION['roles'];
$roles = str_split($roles);
?>
    <div class="page-content">
    	<div class="row">
		  <div class="col-md-2">
		  	<div class="sidebar content-box" style="display: block;">
                <ul class="nav">
                    <!-- Main menu -->
                    <li class="current"><a href="admin.php?url=dashboard"><i class="glyphicon glyphicon-home"></i> Dashboard</a></li>
                    
                    <!-- <li><a href="calendar.html"><i class="glyphicon glyphicon-calendar"></i> Calendar</a></li>
										<li><a href="stats.html"><i class="glyphicon glyphicon-stats"></i> Statistics (Charts)</a></li> -->
										<li class="submenu" <?php echo"style='display:".($roles[1] ? 'block': 'none')."'" ?>>
                         <a href="#">
                            <i class="fa fa-user-circle-o"></i> Add User
                            <span class="caret pull-right"></span>
                         </a>
                         <!-- Sub menu -->
                         <ul>
												 <li><a href="admin.php?url=flatowner">Add User</a></li>
												 <li><a href="admin.php?url=securityguard">Add SecurityGuard</a></li>

            <li><a href="admin.php?url=Edit/View"> View/Edit User</a></li>
            
						<li><a href="admin.php?url=assignrole">Assign Roles</a></li>
											  </ul>
                    </li>
									
                    
         <li>
          <a href="admin.php?url=notice" <?php echo"style='display:".($roles[2] ? 'block': 'none')."'" ?>>
					<i class="fas fa-clipboard"></i>Notice
           
          </a>
          
				</li>
				
				<li>
          <a href="admin.php?url=complaints" <?php echo"style='display:".($roles[3] ? 'block': 'none')."'" ?>>
					<i class="fas fa-comments"></i> <span>Complaints</span>
            <span class="pull-right-container">
              
            </span>
          </a>
          
        </li>
				<li <?php echo"style='display:".($roles[4] ? 'block': 'none')."'" ?>>
			
          <a href="admin.php?url=meetings">
            <i class="fa fa-handshake-o" aria-hidden="true"></i><span> Meetings</span>
            <span class="pull-right-container">
              
            </span>
          </a>
          
        </li>
        
				<li <?php echo"style='display:".($roles[5] ? 'block': 'none')."'" ?>>
          <a href="admin.php?url=facilitymanagementuser">
           <i class="fa fa-home" aria-hidden="true"></i> <span>Facility Management </span>
            <span class="pull-right-container">
              
            </span>
          </a>
          
        </li>
				<li <?php echo"style='display:".($roles[6] ? 'block': 'none')."'" ?>>
          <a href="admin.php?url=facilitymanagementadmin">
           <i class="fa fa-home" aria-hidden="true"></i> <span>Facility Management </span>
            <span class="pull-right-container">
            </span>
          </a>
        </li>
		
				<!-- <li class="submenu" <?php echo"style='display:".($roles[7] ? 'block': 'none')."'" ?>>
				
					<a href="#"><i class="fa fa-money" aria-hidden="true"></i> Maintenance <span class="caret pull-right"></span>
                         </a>
                    
                         <ul>
												 <li><a href="admin.php?url=maintenancesettings"> Settings</a></li>
						<li><a href="admin.php?url=maintenancemanage">Manage</a></li>  
						<li><a href="admin.php?url=receipt">Receipt</a></li>  

	 

					</ul>
          
				</li> -->
				<li <?php echo"style='display:".($roles[8] ? 'block': 'none')."'" ?>>
          <a href="admin.php?url=visitordetails">
					<i class="fa fa-shield"></i> <span>Visitor Details </span>
            <span class="pull-right-container">
            </span>
          </a>
        </li>
				<li class="submenu" <?php echo"style='display:".($roles[9] ? 'block': 'none')."'" ?>>
                         <a href="#">
                            <i class="fa fa-user-circle-o"></i> Security
                            <span class="caret pull-right"></span>
                         </a>
                         <!-- Sub menu -->
                         <ul>
												 <li><a href="admin.php?url=visitors"> Visitors</a></li>
						<li><a href="admin.php?url=serviceprovider">Add Service Provider</a></li>  
						<li><a href="admin.php?url=visitserviceprovider">Service provider</a></li>
						<li><a href="admin.php?url=dailyvisitorslog">Daily visitor log</a></li>  
						<li><a href="admin.php?url=visitorslog">visitor log</a></li>   

					</ul>
                    </li>
                    <!-- <li><a href="tables.html"><i class="glyphicon glyphicon-list"></i> Tables</a></li>
                    <li><a href="buttons.html"><i class="glyphicon glyphicon-record"></i> Buttons</a></li>
                    <li><a href="editors.html"><i class="glyphicon glyphicon-pencil"></i> Editors</a></li>
                    <li><a href="forms.html"><i class="glyphicon glyphicon-tasks"></i> Forms</a></li>
                    <li class="submenu">
                         <a href="#">
                            <i class="glyphicon glyphicon-list"></i> Pages
                            <span class="caret pull-right"></span>
                         </a> -->
                         <!-- Sub menu -->
                         <!-- <ul>
                            <li><a href="login.html">Login</a></li>
                            <li><a href="signup.html">Signup</a></li>
                        </ul>
                    </li>
                </ul> -->
             </div>
		  </div>
		  <div class="col-md-10">
		  	<div class="row">
		  		<div class="col-md-6">
		  			<!-- <div class="content-box-large">
		  				<div class="panel-heading"> -->
							<!-- <div class="panel-title">New vs Returning Visitors</div>
							
							<div class="panel-options">
								<a href="#" data-rel="collapse"><i class="glyphicon glyphicon-refresh"></i></a>
								<a href="#" data-rel="reload"><i class="glyphicon glyphicon-cog"></i></a>
							</div>
						</div>
		  				<div class="panel-body">
		  					Ut tristique adipiscing mauris, sit amet suscipit metus porta quis. Donec dictum tincidunt erat, eu blandit ligula. Nam sit amet dolor sapien. Quisque velit erat, congue sed suscipit vel, feugiat sit amet enim. Suspendisse interdum enim at mi tempor commodo. Sed tincidunt sed tortor eu scelerisque. Donec luctus malesuada vulputate. Nunc vel auctor metus, vel adipiscing odio. Aliquam aliquet rhoncus libero, at varius nisi pulvinar nec. Aliquam erat volutpat. Donec ut neque mi. Praesent enim nisl, bibendum vitae ante et, placerat pharetra magna. Donec facilisis nisl turpis, eget facilisis turpis semper non. Maecenas luctus ligula tincidunt iasdsd vitae ante et, 
				  			<br /><br />
				  			Interdum et malesuada fames ac ante ipsum primis in faucibus. Quisque sed consectetur erat. Maecenas in elementum libero. Sed consequat pellentesque ultricies. Ut laoreet vehicula nisl sed placerat. Duis posuere lectus n, eros et hendrerit pellentesque, ante magna condimentum sapien, eget ultrices eros libero non orci. Etiam varius diam lectus.
							<br /><br />
		  				</div> -->
		  			</div>
		  		</div>

		  		<!-- <div class="col-md-6">
		  			<div class="row">
		  				<div class="col-md-12">
		  					<div class="content-box-header">
			  					<div class="panel-title">New vs Returning Visitors</div>
								
								<div class="panel-options">
									<a href="#" data-rel="collapse"><i class="glyphicon glyphicon-refresh"></i></a>
									<a href="#" data-rel="reload"><i class="glyphicon glyphicon-cog"></i></a>
								</div>
				  			</div>
				  			<div class="content-box-large box-with-header">
				  				
					  			Pellentesque luctus quam quis consequat vulputate. Sed sit amet diam ipsum. Praesent in pellentesque diam, sit amet dignissim erat. Aliquam erat volutpat. Aenean laoreet metus leo, laoreet feugiat enim suscipit quis. Praesent mauris mauris, ornare vitae tincidunt sed, hendrerit eget augue. Nam nec vestibulum nisi, eu dignissim nulla.
								<br /><br />
							</div>
		  				</div>
		  			</div>
		  			<div class="row">
		  				<div class="col-md-12">
		  					<div class="content-box-header">
			  					<div class="panel-title">New vs Returning Visitors</div>
								
								<div class="panel-options">
									<a href="#" data-rel="collapse"><i class="glyphicon glyphicon-refresh"></i></a>
									<a href="#" data-rel="reload"><i class="glyphicon glyphicon-cog"></i></a>
								</div>
				  			</div>
				  			<div class="content-box-large box-with-header">
				  				
					  			Pellentesque luctus quam quis consequat vulputate. Sed sit amet diam ipsum. Praesent in pellentesque diam, sit amet dignissim erat. Aliquam erat volutpat. Aenean laoreet metus leo, laoreet feugiat enim suscipit quis. Praesent mauris mauris, ornare vitae tincidunt sed, hendrerit eget augue. Nam nec vestibulum nisi, eu dignissim nulla.
								<br /><br />
							</div>
		  				</div>
		  			</div>
		  		</div>
		  	</div>

		  	<div class="row">
		  		<div class="col-md-12 panel-warning">
		  			<div class="content-box-header panel-heading">
	  					<div class="panel-title ">New vs Returning Visitors</div>
						
						<div class="panel-options">
							<a href="#" data-rel="collapse"><i class="glyphicon glyphicon-refresh"></i></a>
							<a href="#" data-rel="reload"><i class="glyphicon glyphicon-cog"></i></a>
						</div>
		  			</div>
		  			<div class="content-box-large box-with-header">
			  			Pellentesque luctus quam quis consequat vulputate. Sed sit amet diam ipsum. Praesent in pellentesque diam, sit amet dignissim erat. Aliquam erat volutpat. Aenean laoreet metus leo, laoreet feugiat enim suscipit quis. Praesent mauris mauris, ornare vitae tincidunt sed, hendrerit eget augue. Nam nec vestibulum nisi, eu dignissim nulla.
						<br /><br />
					</div>
		  		</div>
		  	</div>
	  </div>
		</div>
    </div> -->
		<section class="content content-box-large ">
          
					<!-- Default box-->
				
					
						
		
			
						<div class="box-body">
				 <?php
				$pageName = $_GET['url'];
				if($pageName=="" || $pageName=="home"){
				include("dashboard/dashboard.php");        
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
				else if($pageName=="securityguard"){
					include("flatowner/securityguard.html");
			}
				else if($pageName=="Edit/View"){
						include("flatowner/vieweditflatowner.html");
				}
				else if($pageName=="dashboard"){
					include("dashboard/dashboard.php");
			}
			else if($pageName=="maintenancesettings"){
				include("maintenance/maintenancesettings.html");        
		}
		else if($pageName=="maintenancemanage"){
			include("maintenance/maintenancemanage.html");        
	}
	else if($pageName=="receipt"){
		include("maintenance/receipt.html");        
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
						include("facilitymanagement/facilitymanagementadmin.html");
						
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
		}else if($pageName=="serviceprovider"){
			include("visitors/serviceprovider.html");        
	}
	else if($pageName=="assignrole"){
		include("flatowner/roles.html");        
}
else if($pageName=="visitserviceprovider"){
	include("visitors/visitserviceprovider.html");        
}else if($pageName=="otp"){
	include("visitors/otp.html");        
}else if($pageName=="dailyvisitorslog"){
	include("visitors/dailyvisitorslog.html");        
}
else if($pageName=="visitorslog"){
	include("visitors/visitorslog.html");        
}
else if($pageName=="visitordetails"){
	include("visitors/visitordetails.html");        
}
else if($pageName=="profile"){
	include("profile/profile.html");        
}
				else{
						include("page failure.php");
				}
				
				?>
						</div>
						<!-- /.box-body -->
						
		
		
				</section>
  

    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://code.jquery.com/jquery.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="bootstrap/js/bootstrap.min.js"></script>
    <script src="js/custom.js"></script>
  </body>
</html>