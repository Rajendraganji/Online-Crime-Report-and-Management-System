
<?php
session_start();
$conn = mysqli_connect("localhost", "root" ,""); 
mysqli_select_db($conn,"register");
if(isset($_POST['submit'])) {
$uname=$_POST['uname'];
$status=$_POST['status'];
$disno=$_POST['districtno'];
$sql = "UPDATE assign SET status='$status',name='$uname' where districtno='$disno'";
$result = $conn->query($sql);
   echo "<body bgcolor=#9E9999><b>CASE IS SUCCESSFULLY UPDATED</b></body>";
 
    
}
$conn->close();
?> 
