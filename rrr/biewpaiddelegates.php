<?php 
if(!isset($_SERVER['HTTP_REFERER'])){
    header( 'Location: http://reachfoxy.rf.gd/admin.html' ) ;
    exit;
}
$database = "epiz_25050719_delegates";
$con = mysqli_connect('sql207.epizy.com','epiz_25050719','**********',$database);
$sql = "SELECT ID,Name,Email FROM Delegates WHERE Paid NOT LIKE '0';";
$result = mysqli_query($con,$sql);
?>
<!DOCTYPE html>  
 <html>  
      <head>  
<title>Paid Delegates List</title>  
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>  

<link rel="stylesheet" type="text/css" href="../css files/admin.css">
<link href="../css files/bbss.css" rel="stylesheet">
<style type="text/css">
.container {
    font-family: Cambria, Hoefler Text, Liberation Serif, Times, Times New Roman, serif;
}
#navbarSupportedContent {
    font-family: Cambria, Hoefler Text, Liberation Serif, Times, Times New Roman, serif;
}
</style>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
      </head>  
      <body>  
        <nav class="navbar navbar-expand-lg navbar-dark bg-dark"> <a class="navbar-brand" href="MainForm.html">Bahria MUN </a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation"> <span class="navbar-toggler-icon"></span> </button>
  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item active"> <a class="nav-link" href="delegatepayment.php">Mark Payment <span class="sr-only">(current)</span></a> </li>
      <li class="nav-item active"> <a class="nav-link" href="biewpaiddelegates.php">View Paid Delegates
      <span class="sr-only"></span></a> </li>             
    <li class="nav-item active"> <a class="nav-link" href="#">Assign Countires <span class="sr-only">(current)</span></a> </li>
      <li class="nav-item active"> <a class="nav-link" href="#">View Committees
      <span class="sr-only"></span></a> </li>     
    </ul>
    <form class="form-inline my-2 my-lg-0">
      <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
      <button class="btn btn-success my-2 my-sm-0" type="submit">Search</button>
    </form>
  </div>
</nav>      
<div style="background-image: url(../images/login.jpg);"><br>

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
                          </tr>  
                     <?php       
                     }  
                     ?>  
                     </table>  
                </div>  
           </div>
           </div>  
  <script src="../js files/jq.min.js"></script>
  <script src="../js files/pop.min.js"></script>
  <script src="../js files/bbss3.1.js"></script> 
      </body>  
 </html>  