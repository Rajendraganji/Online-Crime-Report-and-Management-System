<?php
$db=mysqli_connect("localhost","root","","register");
$msg="";

if(isset($_POST["upload"])){
  $uname= mysqli_real_escape_string($db, $_POST['uname']);
	$image = $_FILES['image']['name'];
	$image_text = mysqli_real_escape_string($db, $_POST['image_text']);
  	$target = "images/".basename($image);
		$sql = "INSERT INTO suspinfo VALUES ('$uname','$image','$image_text')";
	mysqli_query($db, $sql);
if (move_uploaded_file($_FILES['image']['tmp_name'], $target)) {
  		$msg = "Image uploaded successfully";
  	}else{
  		$msg = "Failed to upload image";
  	}
}
?>
<html>
<head>
<link rel="stylesheet" type="text/css">
</head>
<head>

<script type="text/javascript">
function validate()
{ if( document.frm.uname.value == "" )
   {
     alert( "Please provide your NAME!" );
}


}
</script>
</head>
<body bgcolor=#A8CD1B>
<div id="content">
<form action="index.php" enctype="multipart/form-data" method="POST">
<table cellpadding="2" width="20%"  border=1 align="center"
cellspacing="2">
<tr>
<td colspan=2>
<center><font size=4><b>SUSPICIOUS INFO</b></font></center>
</td>
</tr><tr>
<td>name</td>
<td><input type="text" name="uname" id="textname" size="30"></td>
</tr>
  	<input type="hidden" name="size" value="1000000">

<tr>
<td>upload images</td>
<td><input type="file" name="image"/>
</tr>
<tr>
<td>description</td>
<td>   <textarea id="text" rows="10" cols="30" name="image_text" placeholder="enter any information"></textarea>
</td>
</tr>
<tr>
<td><input type="reset"></td>
<td colspan="2">
<button type="submit" name="upload">POST</button>
</td>
</tr>
</table>
</div>
</body>
</html>