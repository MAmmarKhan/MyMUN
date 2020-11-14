<?php 
 if(isset($_POST["export"])) {
	$database = "epiz_25050719_delegates";
	$con = mysqli_connect('sql207.epizy.com','epiz_25050719','*********',$database);
	header('Content-Type: text/csv; charset=utf-8');  
      header('Content-Disposition: attachment; filename=data.csv');  
	$output = fopen("php://output", "w");
	fputcsv($output, array('ID','Name','Email','Education','Institute','Reference'));
	$query = "SELECT * FROM Delegates;";	
	$result = mysqli_query($con,$query);
	while ($row = mysqli_fetch_assoc($result)) {
		fputcsv($output,$row);
	}
	fclose($output);	
}
 ?>