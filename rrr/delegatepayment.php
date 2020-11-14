<?php
if(!isset($_SERVER['HTTP_REFERER'])){
    header( 'Location: http://reachfoxy.rf.gd/admin.html' ) ;
    exit;
}
?><!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
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
<title>BUMUN Delegate Payment</title>
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
  <h1 align="center"> <strong>Mark Payment</strong></h1>
	<div class="row align-content-sm-center">
  <div align="center" class="container-fluid"><br><br>      
        <form method="POST" >
					<div class="form-group">
                    <input name="id" type="text" class="form-control" placeholder="Delegate ID" required>
                    </div><br>
                    <div class="form-group">
                    <input name="payment" type="text" class="form-control" placeholder="Enter amount..." required>
                    </div><br>
                    <div class="form-group">
                    <input name="paid" type="text" class="form-control" placeholder="Paid?(yes means 1)||(no means 0)" required>
                    </div><br>
                    <div class="accordion">
                    <input class="btn btn-light btn-lg" type="submit" name="ggwp" value="Confirm Payment" >
                    </div>
                    <br></form>
<?php 
extract($_POST);
if(isset($_POST['ggwp'])){     
	$database = "epiz_25050719_delegates";
	$con = mysqli_connect('sql207.epizy.com','epiz_25050719','********',$database);
	$sql = "UPDATE Delegates SET Payment ='".$_POST['payment']."',Paid='".$_POST['paid']."'WHERE ID = '".$_POST['id']."';";      
	if(!mysqli_query($con,$sql))
    {
        echo "<p>Error: Please contact foxy for help OR Check if it's valid ID :/</p>";
        exit;
    }
    else{
    	echo '<p>Payment successfully marked!</p>';
    }
}
 ?>                                       
                    <br>             
  </div> </div>
	<br><br><br>
</div>
  <script src="../js files/jq.min.js"></script>
  <script src="../js files/pop.min.js"></script>
  <script src="../js files/bbss3.1.js"></script> 
<footer>  
  <div class="row" style="background: #343C40">
    <div class="text-center col-lg-6 offset-lg-3">
        <hr>
      <h4>Footer</h4>
      <p>Copyright &copy; 2020 &middot; All Rights Reserved to Foxy &middot;</p>
        <hr>
    </div>
    </div>
</footer>
</body>
</html>