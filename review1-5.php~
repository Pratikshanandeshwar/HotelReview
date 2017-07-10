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
session_start(); 
require "init.php";
  	$rr="";
  	$add="";
  	$phoneno="";
  	$find=$_POST["find"];
	$near= $_POST["near"];
  	$_SESSION['find']=$find;
 	$sql="select * from Review1 where find='$find' and near='$near'";
  	$result=mysqli_query($con,$sql);
	$cnt=0;
	$res=0;
  	$cnt=mysqli_num_rows($result);
  	if($cnt>0)
  	{
		$res=mysqli_fetch_row($result);
     		$rr=$res[0];
     		//echo $rr;
     		$lat=$res[2];
     		$lon=$res[3];
     		$add=$res[5];
     		$phoneno=$res[4];

     	}
 	else
  	{
		echo '<script type="text/javascript">'; 
		echo 'alert("insert proper information");'; 
		echo 'window.location.href = "review1.html";';
		echo '</script>';
  	}
?>
</head>
<body>
	<div class="container-fluid">
		<?php include 'Logoutheader.php';?>
			<form class="form-inline" action="review2.php" method="POST">
			<div class="form-group">
				<div class="col-sm-1">
				</div>
				<div class="col-sm-10">
					<div class="col-sm-10">
						<h2 style="color:#c72d0d"><?php echo $rr; ?></h2>
						<span class="glyphicon glyphicon-map-marker"><b></b><?php echo $add; ?></span><br>
              					<span class="glyphicon glyphicon-earphone"><?php echo $phoneno; ?></span><br><br>
          				</div>
					<div class="col-sm-2" style="padding-left: -20px">
					<button type="submit" class="btn btn-default btn-sm" style="background-color: #c72d0d;font-size: 15px">
					<span class="glyphicon glyphicon-star" style="color: white">Write a review</span>
					</button>
				</div>
			</div>  
			<div class="col-sm-2">
				<div id="map" style="width:400px;height:400px;background:yellow">
				</div>
			<script>
				function myMap()
				{
					var myCenter = new google.maps.LatLng("<?php echo $lat ?>","<?php echo $lon ?>");
					var mapCanvas = document.getElementById("map");
					var mapOptions = {center: myCenter,zoom: 5};
					var map = new google.maps.Map(mapCanvas, mapOptions);
					var marker = new google.maps.Marker({position:myCenter,animation:google.maps.Animation.BOUNCE});
					marker.setMap(map);
					google.maps.event.addListener(marker,'click',function() {
					var infowindow = new google.maps.InfoWindow({content:"<?php echo $res[0] ?>"});
					infowindow.open(map,marker);
					});
  				}
       			</script>
       			<script src="https://maps.googleapis.com/maps/api/js?callback=myMap"></script>
		</div> 
	<div class="col-sm-10" style="padding-right:auto">
		<?php 
		if($rr=="Hanuman")
		{	
			?>
			<div class="gallery" style="padding-left:200px;">
        		<img src="images/Hanuman/h1.jpg"  class="img-responsive">
       			<img src="images/Hanuman/h2.jpg" class="img-responsive">
                  	<img src="images/Hanuman/h3.jpg" class="img-responsive">
        		</div>
			<?php		
		}
		if($rr=="Iconinn")
		{	
			?>
			<div class="gallery" style="padding-left:200px;">
        		<img src="images/Iconinn/i1.jpg"  class="img-responsive">
       			<img src="images/Iconinn/i2.jpg" class="img-responsive">
                  	<img src="images/Iconinn/i3.jpg" class="img-responsive">
        		</div>
			<?php		
		}
		if($rr=="Rahamatullah")
		{	
			?>
			<div class="gallery" style="padding-left:200px;">
        		<img src="images/Rahamatulla/r1.jpg"  class="img-responsive">
       			<img src="images/Rahamatulla/r2.jpg" class="img-responsive">
                  	<img src="images/Rahamatulla/r3.jpg" class="img-responsive">
        		</div>
			<?php		
		}
		if($rr=="Pai-Prakash")
		{	
			?>
			<div class="gallery" style="padding-left:200px;">
        		<img src="images/Pai-Prakash/p1.jpg"  class="img-responsive">
       			<img src="images/Pai-Prakash/p2.jpg" class="img-responsive">
                  	<img src="images/Pai-Prakash/p3.jpg" class="img-responsive">
        		</div>
			<?php		
		}
		if($rr=="Mirchi")
		{	
			?>
			<div class="gallery" style="padding-left:200px;">
        		<img src="images/Mirchi/m1.jpg"  class="img-responsive">
       			<img src="images/Mirchi/m2.jpg" class="img-responsive">
                  	<img src="images/Mirchi/m3.jpg" class="img-responsive">
        		</div>
			<?php		
		}
		if($rr=="Season 4")
		{	
			?>
			<div class="gallery" style="padding-left:200px;">
        		<img src="images/Season 4/s1.jpg"  class="img-responsive">
       			<img src="images/Season 4/s2.jpg" class="img-responsive">
                  	<img src="images/Season 4/s3.jpg" class="img-responsive">
        		</div>
			<?php		
		}
		if($rr=="Ambassadar")
		{	
			?>
			<div class="gallery" style="padding-left:200px;">
        		<img src="images/Ambassadar/a1.jpg"  class="img-responsive">
       			<img src="images/Ambassadar/a2.jpg" class="img-responsive">
                  	<img src="images/Ambassadar/a3.jpg" class="img-responsive">
        		</div>
			<?php		
		}
		if($rr=="Patel")
		{	
			?>
			<div class="gallery" style="padding-left:200px;">
        		<img src="images/Patel/p1.jpg"  class="img-responsive">
       			<img src="images/Patel/p2.jpg" class="img-responsive">
                  	<img src="images/Patel/p3.jpg" class="img-responsive">
        		</div>
			<?php		
		}
		if($rr=="Balle Balle Restaurant")
		{	
			?>
			<div class="gallery" style="padding-left:200px;">
        		<img src="images/Balle/b1.jpg"  class="img-responsive">
       			<img src="images/Balle/b2.jpg" class="img-responsive">
                  	<img src="images/Balle/b3.jpg" class="img-responsive">
        		</div>
			<?php		
		}
		?>
        </div>
        </div>
        <div class="col-sm-1"></div>   
      </form>
     </div>
</body>
</html>
