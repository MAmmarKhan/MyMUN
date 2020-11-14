<?php 

require("PHPStuff/src/PHPMailer.php");

require("PHPStuff/src/SMTP.php");

include_once "PHPStuff/src/Exception.php";

extract($_POST);
if(isset($_POST['submit'])){
///Saving In database
$database = "epiz_25050719_delegates";
$con = mysqli_connect('sql207.epizy.com','epiz_25050719','oJIugo8s4BZv',$database);
if ($con->connect_error) {
    die("Connection failed: " . $conn->connect_error);
    exit;
}
if ($reference == NULL) {
	$sql = "INSERT INTO Delegates (ID, Name, Email,Education,Institute,Reference) VALUES (NULL, '$name', '$email','$edu','$institue',NULL);";
	if(!mysqli_query($con,$sql))
    {
        echo "Error: Please Try later.";
        exit;
    }	
}else{
	$sql = "INSERT INTO Delegates (ID, Name, Email,Education,Institute,Reference) VALUES (NULL, '$name', '$email','$edu','$institue','$reference');";
	if(!mysqli_query($con,$sql))
    {
        echo "Error: Please Try later.";
        exit;
    }
}
//get the ID
$sql = "SELECT ID FROM Delegates WHERE `Name` LIKE '".$name."'AND Email LIKE '".$email."'AND `Education` LIKE '".$edu."'AND `Institute` LIKE '".$institue."';";
	$result = mysqli_query($con,$sql);        
	if(mysqli_num_rows($result) > 0){
		while($row = mysqli_fetch_array($result)){            		           
                $id = $row['ID'];
		}
	}
///Sending Email
//Format the message
$Bodi1 = "Hello! " . $name .
"!<br>Thank you for Registering.we have recieved your details. Refer to following identity when paying for confirmation.<br>ID =  ". $id."<br><br>Regards BUMUN";

//authenticate n send email
$mail = new PHPMailer\PHPMailer\PHPMailer;

$mail->IsSMTP(); // enable SMTP
$mail->SMTPAuth = true; // authentication enabled
$mail->SMTPSecure = 'tls'; // secure transfer enabled REQUIRED for Gmail
$mail->Host = "smtp.gmail.com";
$mail->Port = 587;
$mail->IsHTML(true);

$mail->Username ='bahriamun2k20@gmail.com';
$mail->Password ='';
$mail->setFrom('bahriamun2k20@gmail.com');
$mail->Subject = 'Successful Registration';
$mail->Body = $Bodi1;
$mail->addAddress($email);

if(!$mail->Send()) {
        echo "Mailer Error: " . $mail->ErrorInfo;
}
$URL="http://reachfoxy.rf.gd/successReg.html";
echo '<META HTTP-EQUIV="refresh" content="0;URL=' . $URL . '"successReg.html">';
$conn->close();
}
 ?>