<?php  
include('../connection.php');

$output = '';
// if(isset($_POST["report"]))
// {
 $query = "SELECT `name`,dateofbirth,mobilenumber,wingname,flatnumber,email FROM flatowner ";
 $result = mysqli_query($con, $query);
 if(mysqli_num_rows($result) > 0)
 {
  $output .= '
   <table class="table" bordered="1">  
                    <tr>  
                         <th>Name</th>  
                         <th>Date Of Birth</th>  
                         <th>Mobile Number</th>
                         <th>Wing Name</th>  
                         <th>Flat Number</th>  
                         <th>Email</th>  

    
                    </tr>
  ';
  while($row = mysqli_fetch_array($result))
  {
   $output .= '
    <tr>  
                         <td>'.$row["name"].'</td>  
                         <td>'.$row["dateofbirth"].'</td>  
                         <td>'.$row["mobilenumber"].'</td>  
                         <td>'.$row["wingname"].'</td>  
                         <td>'.$row["flatnumber"].'</td>  
                         <td>'.$row["email"].'</td>  

    
                    </tr>
   ';
  }
  $output .= '</table>';
  header('Content-Type: application/xls');
  header('Content-Disposition: attachment; filename=members.xls');
  echo $output;
 }
// }
?>