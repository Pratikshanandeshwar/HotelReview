<?php 
  require "init.php";
   include "headerreview2.php";
  	session_start();
	$review=$_POST['review1'];
	$id=$_POST['star_id'];
	echo "$id";
   	$usr=$_SESSION['email'];
   	$find=$_SESSION['find'];
   	$sql="insert into Review (UserName,Find,Review,count) values ('$usr','$find','$review','$id')";
   	$res=mysqli_query($con,$sql);
	/*if($res)
	{
    		echo "Insert Successfully";
	}
	else
	{
    		echo "insert Fail".Mysqli_error($con);
	}*/
?>
