<?php
session_start();
$conn = mysqli_connect("localhost", "root" ,""); 
mysqli_select_db($conn,"register");
if(isset($_POST['submit'])) {
$name = $_POST['name'];    
$phoneno = $_POST['phoneno'];
$feedback = $_POST['feedback'];
$sql="INSERT into feedback values('$name','$phoneno','$feedback')";
if(mysqli_query($conn,$sql))
{
       // header("Location: login.html");         
	echo "<body bgcolor=#9E9999><h2><b>We will consider your suggestions</b></h2></body>";
}
else{
echo "<body bgcolor=lightblue>GIVE FEEDBACK</body>"; 
}
}
?>