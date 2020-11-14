<?php 
extract($_POST);
if(isset($_POST['ggwp'])){     
	$database = "epiz_25050719_delegates";
	$con = mysqli_connect('sql207.epizy.com','epiz_25050719','oJIugo8s4BZv',$database);
	$sql = "SELECT password FROM dotodelegates WHERE `username` LIKE '".$_POST['email']."';";
	$result = mysqli_query($con,$sql);        
	if(mysqli_num_rows($result) > 0){
		while($row = mysqli_fetch_array($result)){            		           
			if($row['password'] == $_POST['pass']){                
                header( 'Location: http://reachfoxy.rf.gd/rrr/adminHome.php' ) ;
            }
		}
	}
}
 ?>