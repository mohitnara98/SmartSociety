<?php  
include('../connection.php');

$output = '';
// if(isset($_POST["report"]))
// {
 $query = "SELECT name,phonenumber,type FROM serviceprovider";
 $result = mysqli_query($con, $query);
 if(mysqli_num_rows($result) > 0)
 {
  $output .= '
   <table class="table" bordered="1">  
                    <tr>  
                         <th>Name</th>  
                         <th>Phonenumber</th>  
                         <th>Type</th>  
    
                    </tr>
  ';
  while($row = mysqli_fetch_array($result))
  {
   $output .= '
    <tr>  
                         <td>'.$row["name"].'</td>  
                         <td>'.$row["phonenumber"].'</td>  
                         <td>'.$row["type"].'</td>  
    
                    </tr>
   ';
  }
  $output .= '</table>';
  header('Content-Type: application/xls');
  header('Content-Disposition: attachment; filename=dailyvisitors.xls');
  echo $output;
 }
// }
?>