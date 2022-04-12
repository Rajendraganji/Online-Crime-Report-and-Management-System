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
    

$sql="INSERT into registertable values('$name','$createpassword','$confirmpassword','$email','$phoneno','$adharno','$address')";
if(mysqli_query($conn,$sql))
{
        //header("Location: bookcart.html");
         
	echo "you are succesfully registered";
}
else{
echo "not registered";
 
}
}

else{
echo "two password does not match";


}

}
?>