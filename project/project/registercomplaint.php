<?php
session_start();
$conn = mysqli_connect("localhost", "root" ,""); 
mysqli_select_db($conn,"register");
if(isset($_POST['submit'])) {
$name = $_POST['name'];
    $email = $_POST['email'];
    $mobileno = $_POST['mobileno'];
    $selectdistrict = $_POST['selectstate'];
$subject = $_POST['subject'];
$place = $_POST['place'];
$pincode= $_POST['pincode'];
$description= $_POST['description'];
$sql="INSERT into register values('$name','$email','$mobileno','$selectdistrict','$subject','$place','$pincode','$description')";
if(mysqli_query($conn,$sql))
{
     //header("Location: login.html");
        
	echo "<body bgcolor=#9E9999><h2>you are succesfully registered complaint</h2></body>";
        

}
else{
echo "<body bgcolor=silver>Not registered</body>";
 
}
}
?>