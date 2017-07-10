<?php
require "init.php";
session_start();
	$email=$_POST["email"];
	$password= $_POST["password"];
$sql_query="select Email from SignUp where Email='$email' and Password ='$password'";

//echo $sql_usr;
$result=mysqli_query($con,$sql_query);
$cnt=mysqli_num_rows($result);
if($cnt==1)	
{
	$_SESSION['email']=$email;
	header('Location: review1.html');
}
else
{
	echo "Account invalid";
}
if(isset($_GET["logout"]))
{
	session_unregister('email');
}
?>  			
