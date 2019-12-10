<?php
include('connection.php');



$result=$con->query("select count(*) as total from complaint");
$data=$result->fetch_assoc();
$totalcomplaints= $data['total'];

$result=$con->query("select count(*) as total from notice");
$data=$result->fetch_assoc();
$totalnotices= $data['total'];

$result=$con->query("select count(*) as total from flatowner");
$data=$result->fetch_assoc();
$totalflatowners= $data['total'];

$result=$con->query("select count(*) as total from serviceprovider");
$data=$result->fetch_assoc();
$totalserviceproviders= $data['total'];
?>


<html>

<head>
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<style type="text/css">
      #chart-container {
        width: 640px;
        height: auto;
      }
      @media screen and (min-width:320px) and (max-width:576px){
        html{
          overflow-x:hidden;
        }
        .mycanvass{
        width: 50% !important;
        height: 100% !important;
      } 
      }
    </style>
    <link rel="stylesheet" href="bower_components/bootstrap/dist/css/bootstrap.min.css">
    <script src=" https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.7.3/Chart.min.js "></script>
    
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script>

$(document).ready(function(){
  $.ajax({
    url: "dashboard/getcomplaints.php",
    method: "GET",
    success: function(data) {
      console.log(data);
      var complainttype = [];
      var numberofcomplaints = [];

      for(var i in data) {
        complainttype.push( data[i].complainttype);
        numberofcomplaints.push(data[i].numberofcomplaints);
      }

      var chartdata = {
        labels: complainttype,
        datasets : [
          {
            label: 'Number of Complaints',
            backgroundColor: ["yellow","red","green","blue"],
            borderColor: 'rgba(200, 200, 200, 0.75)',
            hoverBackgroundColor: 'rgba(200, 200, 200, 1)',
            hoverBorderColor: 'rgba(200, 200, 200, 1)',
            data: numberofcomplaints
          }
        ]
      };

      var ctx = $("#mycanvas");

      var barGraph = new Chart(ctx, {
        type: 'polarArea',
        data: chartdata
      });
    },
    error: function(data) {
      console.log(data);
    }
  });
});
</script>

</head>

<body>
    <section>
    <div class="row">
        <div class="col-lg-3 col-xs-6">
          <!-- small box -->
          <div class="small-box bg-aqua">
            <div class="inner">
              <h3><?php echo $totalcomplaints; ?></h3>

              <p>Complaints</p>
            </div>
            <div class="icon">
            <i class="ion ion-chatboxes"></i>
            
            </div>
            <a href="admin.php?url=complaints" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
          </div>
        </div>
        <!-- ./col -->
        <div class="col-lg-3 col-xs-6">
          <!-- small box -->
          <div class="small-box bg-green">
            <div class="inner">
              <h3><?php echo $totalnotices; ?></h3>

              <p>Notices</p>
            </div>
            <div class="icon">
              <i class="ion ion-clipboard"></i>
            </div>
            <a href="admin.php?url=notice" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
          </div>
        </div>
        <!-- ./col -->
        <div class="col-lg-3 col-xs-6">
          <!-- small box -->
          <div class="small-box bg-yellow">
            <div class="inner">
              <h3><?php echo $totalflatowners; ?></h3>

              <p>Flatowners</p>
            </div>
            <div class="icon">
              <i class="ion ion-person-add"></i>
            </div>
            <a href="#" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
          </div>
        </div>
        <!-- ./col -->
        <div class="col-lg-3 col-xs-6">
          <!-- small box -->
          <div class="small-box bg-red">
            <div class="inner">
              <h3><?php echo $totalserviceproviders; ?></h3>

              <p>Dail Visitors</p>
            </div>
            <div class="icon">
              <i class="ion ion-person"></i>
            </div>
            <a href="admin.php?url=visitserviceprovider" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
          </div>
        </div>
        <!-- ./col -->
      </div>
    </section>
        
    <br>
    <br>
    <br>
    <div class="container">
  <div class="row">
    
    <div class="col-md-6">
    <canvas id="mycanvas" class="mycanvass"></canvas>

    </div>
    <div class="col-md-6">
    <div class="embed-responsive embed-responsive-16by9 border border-secondary">

    <iframe class="embed-responsive-item"  src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3768.034043932768!2d73.17462701437853!3d19.19371535325071!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3be7949cacecd335%3A0x8d9f60087c90fa40!2sMeera+Vatika%2C+Near+Reliance+Residency%2C+Barkupada+Road%2C+128%2F1%2C+Kailash+Colony%2C+Ambernath%2C+Maharashtra+421501!5e0!3m2!1sen!2sin!4v1555428645464!5m2!1sen!2sin" width="400" height="300" frameborder="0" style="border:0" allowfullscreen></iframe>
    </div>
    </div>
  </div>
</div>
<!-- 
    <div class="embed-responsive embed-responsive-16by9 border border-secondary">
    </div> -->
</body>

</html>