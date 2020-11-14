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
<title>BUMUN Admin</title>
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
  <h1 id="navbarSupportedContent" align="center"> <strong>Welcome To Registeration</strong></h1>
	<div class="row align-content-sm-center">
  <div class="col-sm-6"><br><br>      
        <button class="btn btn-primary btn-lg btn-block" onclick= "window.location.href ='biewpaiddelegates.php'">View Paid Delegates</button><br>             
  </div>
  <div class="col-sm-6" ><br> <br>     
      <button class="btn btn-light btn-lg btn-block" onclick= "window.location.href ='delegatepayment.php'">Mark Payment</button><br>             
  </div>
  <div class="col-sm-6"><br><br>      
      <button class="btn btn-info btn-lg btn-block">Assign Countires</button><br>             
  </div>
  <div class="col-sm-6"><br> <br>     
      <button class="btn btn-warning btn-lg btn-block">View Committess</button><br><br> <br>             
  </div>
  </div>
	<br><br><br>
</div>
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