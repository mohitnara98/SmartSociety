<?php  
include('../connection.php');

$output = '';
// if(isset($_POST["report"]))
// {
 $query = "SELECT visitorname,visitorphonenumber,place,purpose,datevisited,intime,gatenumber,noofpersons FROM visitors WHERE MONTH(CURDATE())=MONTH(datevisited)";
 $result = mysqli_query($con, $query);
 if(mysqli_num_rows($result) > 0)
 {
  $output .= '
   <table class="table" bordered="1">  
                    <tr>  
                         <th>Name</th>  
                         <th>Phonenumber</th>  
                         <th>Place</th>
                         <th>purpose</th>  
                         <th>datevisited</th>  
                         <th>intime</th>  
                         <th>gatenumber</th>  
                         <th>NumberOfPersons</th>  

    
                    </tr>
  ';
  while($row = mysqli_fetch_array($result))
  {
   $output .= '
    <tr>  
                         <td>'.$row["visitorname"].'</td>  
                         <td>'.$row["visitorphonenumber"].'</td>  
                         <td>'.$row["place"].'</td>  
                         <td>'.$row["purpose"].'</td>  
                         <td>'.$row["datevisited"].'</td>  
                         <td>'.$row["intime"].'</td>  
                         <td>'.$row["gatenumber"].'</td>  
                         <td>'.$row["noofpersons"].'</td>  

    
                    </tr>
   ';
  }
  $output .= '</table>';
  header('Content-Type: application/xls');
  header('Content-Disposition: attachment; filename=visitors.xls');
  echo $output;
 }
// }
?>