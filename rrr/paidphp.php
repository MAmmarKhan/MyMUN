<?php 
if(!isset($_SERVER['HTTP_REFERER'])){
    header( 'Location: http://reachfoxy.rf.gd/admin.html' ) ;
    exit;
}
extract($_POST);
if(isset($_POST['ggwp'])){     
	$database = "epiz_25050719_delegates";
	$con = mysqli_connect('sql207.epizy.com','epiz_25050719','oJIugo8s4BZv',$database);
	$sql = "UPDATE Delegates SET Payment ='".$_POST['payment']."',Paid='".$_POST['paid']."'WHERE ID = '".$_POST['id']."';";      
	if(!mysqli_query($con,$sql))
    {
        echo "Error: Please Try later.";
        exit;
    }
    else{
    	echo "submited";
    }
}
 ?>