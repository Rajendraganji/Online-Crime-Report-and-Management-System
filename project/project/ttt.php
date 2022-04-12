<!DOCTYPE html>
<html>
<head>
<style>
table, th, td {
    border: 1px solid black;
}
</style>
</head>
<body bgcolor=#9E9999>
<?php
session_start();
$conn = mysqli_connect("localhost", "root" ,""); 
mysqli_select_db($conn,"register");
if(isset($_POST['submit'])) {
$fir = $_POST['fir'];    
$phoneno = $_POST['phoneno'];
$sql = "SELECT * FROM assign where districtno in(SELECT selectdistrict from register where mobileno='$phoneno') ";
$result = $conn->query($sql);
if ($result->num_rows > 0) {
   echo "<b>YOUR COMPLAINT STATUS</b>";
 echo "<table><tr><th>DIST NO</th><th>police officer</th><th>contact mobieno</th><th>STATUS</th></tr>";
    // output data of each row
    while($row = $result->fetch_assoc()) {
   
 echo "<tr><td>" . $row["districtno"]. "</td><td>" . $row["police"]. "</td><td> " . $row["phoneno"]. "</td><td> " . $row["status"]. "</td></tr>";

    }
    echo "</table>";
}
 else
 {
    echo "0 results";
}
$conn->close();
}
?> 
</body>
</html>
