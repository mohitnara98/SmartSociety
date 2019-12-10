
<?php
include('connection.php');


if($_SERVER['REQUEST_METHOD'] == 'GET'){
$result = $con->query("select count(complainttype) as numberofcomplaints , complainttype from `complaint` group by complainttype order by numberofcomplaints desc");
if($result->num_rows > 0){
    $finalResponse = array();
    while($row = $result->fetch_assoc()){
        array_push($finalResponse,$row);
    }
        Header('Content-Type: application/json; charset=UTF8');
        echo json_encode($finalResponse);
        header($_SERVER['SERVER_PROTOCOL'] . ' 200 Ok', true, 200);
}
}
?>

<html>
<head>
    <title>Bar chart</title>
    <script src=" https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.7.3/Chart.min.js "></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <style type="text/css">
      #chart-container {
        width: 640px;
        height: auto;
      }
    </style>
  <script>
  function getcomplaints(){

  
      
    
        $.ajax({
          url: "chartexample.php",
        
          

          success: function (data) {
            alert("success");
          
          },
          error: function (e) {
            alert("unsuccess");
          }
        });
    
    }

  </script>

</head>
<body onload="getcomplaints()">
  <div id="chart-container">
    <canvas id="mycanvas"></canvas>
</div>
</body>

</html>