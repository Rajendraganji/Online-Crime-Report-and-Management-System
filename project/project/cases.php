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
 
$selectdistrict=$_POST['selectdistrict'];
$sql = "SELECT selectdistrict,place,pincode,description FROM register where selectdistrict='$selectdistrict'";
$result = $conn->query($sql);
if($result->num_rows > 0) {
   echo "<b>REGISTERED COMPLAINT DETAILS</b>";
 echo "<table><tr><th> NO</th><th>place</th><th>pincode</th><th>description</th></tr>";
    // output data of each row
    while($row = $result->fetch_assoc()) {
   
 echo "<tr><td>" . $row["selectdistrict"]. "</td><td>" . $row["place"]. "</td><td> " . $row["pincode"]. "</td><td> " . $row["description"]. "</td></tr>";

    }
    echo "</table>";
}
 else
 {
    echo "0 results";
}
}
$conn->close();
?> 
</body>
</html>
