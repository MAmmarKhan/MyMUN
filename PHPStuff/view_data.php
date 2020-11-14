<?php 
$database = "epiz_25050719_delegates";
$con = mysqli_connect('sql207.epizy.com','epiz_25050719','**********',$database);
if ($con->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
$sql = "SELECT * FROM Delegates ORDER BY ID;";
$result = mysqli_query($con,$sql);
if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
        echo "Id: " . $row["ID"]. " - Name: " . $row["Name"]. " " . $row["Email"]. "<br>";
    }
} else {
    echo "0 results";
}
$conn->close();
 ?>
