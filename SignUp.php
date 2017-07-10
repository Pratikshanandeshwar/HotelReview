<?php
require "init.php";
$firstname=$_POST["fname"];
$lastname=$_POST["lname"];
$username=$_POST["username"];
$password=$_POST["password"];
$repassword=$_POST["repassword"];
$mobileno=$_POST["mobileno"];
$email=$_POST["email"];
if($password != $repassword)
{
	$message = "Password not matched.\\nTry again.";
  	echo "<script type='text/javascript'>alert('$message');</script>";
}
else
{
	$res=mysqli_query($con,"select * from SignUp");

	$sql="insert into SignUp (FirstName,LastName,UserName,Password,MobileNumber,Email) values			('$firstname','$lastname','$username','$password','$mobileno','$email')";

	$res=mysqli_query($con,$sql);

	if($res)
	{
	    //echo "Insert Successfully";
	    header('Location: Login.html');
	}
	else
	{
	    echo "SignUp Fail".Mysqli_error($con);
	
	}
}
?>
