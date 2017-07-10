<!DOCTYPE html>
<html lang="en">
<head>
  <title>Yelp</title>
  <meta charset="utf-8">
   <link href="css/bootstrap.min.css" rel="stylesheet">
    <script src="js/jquery-2.2.1.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <meta name="viewport" content="width=device-width,initial-scale=1">
    <link rel="stylesheet" type="text/css" href="css/imagecss.css">
    <script src="myjs/starfunction.js"></script>
    <link rel="stylesheet" type="text/css" href="mycss/review1.css">
<?php 
  $rr="";
  $sql="select Find from Review1"; 
  $result=mysqli_query($con,$sql);
  $cnt=mysqli_num_rows($result);  
  $cnt=0;
  $res=0;
  $cnt=mysqli_num_rows($result);
  if($cnt==0)
  {
     echo "not available";
  }
  else
  {
     $res=mysqli_fetch_row($result);
     $rr=$res[0];
  }
?>
</head>
<body>
</body>
</html>

