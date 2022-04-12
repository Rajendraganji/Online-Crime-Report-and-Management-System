
<?php
session_start();
$conn = mysqli_connect("localhost", "root" ,""); 
mysqli_select_db($conn,"register");
 if (isset($_POST['submit']))
 {	
	$username =$_POST['name']; 
	$password =$_POST['password']; 
       $query = "SELECT * FROM `createtable` WHERE name='$username'
and createpassword='$password'";
	$result = mysqli_query($conn,$query);
	$rows = mysqli_num_rows($result);
        if($rows==1)
          {
	    // $_SESSION['username'] = $username;
           echo "succces";
	  
        
               header("Location: bookcart.html");
         }else
         {
	echo "<h3>Username/password is incorrect.</h3>
    <br/>   Click here to <a href='new.html'>Login</a>";
	}
    }
?>
