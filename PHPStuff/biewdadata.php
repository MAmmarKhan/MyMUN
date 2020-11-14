<?php 
$database = "epiz_25050719_delegates";
$con = mysqli_connect('sql207.epizy.com','epiz_25050719','oJIugo8s4BZv',$database);
$sql = "SELECT * FROM Delegates;";
$result = mysqli_query($con,$sql);
?>
<!DOCTYPE html>  
 <html>  
      <head>  
           <title>Table Data to CSV file in PHP</title>  
           <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>  
           <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" />  
           <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>  
      </head>  
      <body>  
           <br /><br />  
           <div class="container" style="width:900px;">  
                <h2 align="center">Export Mysql Table Data to CSV file in PHP</h2>  
                <h3 align="center">Delegate Data</h3>                 
                <br />  
                <form method="post" action="getdata.php" align="center">  
                     <input type="submit" name="export" value="CSV Export" class="btn btn-success" />  
                </form>  
                <br />  
                <div class="table-responsive" id="employee_table">  
                     <table class="table table-bordered">  
                          <tr>  
                               <th width="5%">ID</th>  
                               <th width="25%">Name</th>  
                               <th width="35%">Address</th>
                          </tr>  
                     <?php  
                     while($row = mysqli_fetch_array($result))  
                     {  
                     ?>  
                          <tr>  
                               <td><?php echo $row["ID"]; ?></td>  
                               <td><?php echo $row["Name"]; ?></td>  
                               <td><?php echo $row["Email"]; ?></td>   
                               <td> Hello</td>
                          </tr>  
                     <?php       
                     }  
                     ?>  
                     </table>  
                </div>  
           </div>  
      </body>  
 </html>  