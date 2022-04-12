<?php
session_start();
$conn = mysqli_connect("localhost", "root" ,""); 
mysqli_select_db($conn,"register");
if(isset($_POST['submit'])) {
$name = $_POST['name'];
    $createpassword = $_POST['createpassword'];
    $confirmpassword = $_POST['confirmpassword'];
    $email = $_POST['email'];
$phoneno = $_POST['Phoneno'];
$adharno = $_POST['adharno'];
$address= $_POST['address'];

if($createpassword==$confirmpassword){
    

$sql="INSERT into createtable values('$name','$createpassword','$confirmpassword','$email','$phoneno','$adharno','$address')";
if(mysqli_query($conn,$sql))
{
        //header("Location: login.html");
         
	echo "<body bgcolor=lightblue>you are succesfully registered</body>";
           echo " Click here to <a href='new.html'>Login</a>";

}
else{
echo "<body bgcolor=lightblue> Not registered</body>";
 
}
}

else{
echo "<b>two password does not match</b>";


}

}
?>