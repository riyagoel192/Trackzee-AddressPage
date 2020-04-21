<!DOCTYPE html>
<html>
<head>
	<title></title>
	<link rel="stylesheet" type="text/css" href="styling.css">
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">

	<style>
		/*#add:hover a .content{visibility: visible;}*/

		.hr
		{
			height: 27px;
			border-left: 1px solid  #a6acaf ;
			float: left;
			margin-left: 12px;
		}

	</style>
</head>
<body>
	<?php
		include('sample.php');
	?>

	<div id="track">
		<div id="header">
			<h4 style="margin-top: 10px;margin-left: 10px;color:white;">Tracking</h4>
		</div>

		<div id="address">
			<div id="nav">
				
				<ul style="list-style-type: none;">
					<li style="padding: 15px;float: left;margin-left: -35px;" id="obj"><a href="#" style="text-decoration: none;">Object</a></li>
					<li style="padding: 15px;float: left;" id="add"><a href="#" style="text-decoration: none;">Address</a></li>
				</ul>

			<div id="content">
				
				<div id="search-bar">
					<i class="fa fa-search 2x" style="margin-left: 365px;margin-top: 6px;" title="Search"></i>
				</div>

				<div class="boxes">
					<i class="fa fa-refresh 2x" style="margin-left: 8px;margin-top: 8px;" title="Reload"></i>
				</div>

				<div class="boxes" style="margin-left: 433px;">
					<i class="fa fa-map-marker 2x" style="margin-left: 8px;margin-top: 8px;" title="Add Address"></i>
				</div>

				<div class="boxes" style="margin-left: 466px;">
					<i class="fa fa-upload 2x" style="margin-left: 8px;margin-top: 8px;" title="Upload Address"></i>
				</div>

				<div class="boxes" style="margin-left: 499px;">
					<i class="fa fa-filter 2x" style="margin-left: 8px;margin-top: 8px;" title="Filter Address"></i>
				</div>

				<div id="add-name">

					<form>
						<input type="checkbox" name="check" style="float: left;margin-top: 8px;margin-left: 10px;">
						<div class="hr"></div>
						<h6><b>Address Name</b></h6>
					</form>
				</div>

				<div id="table">
					
					<table style="border: 1px solid #f4f6f7;width: 520px;">
						
						<tr style="border: 1px solid #f4f6f7;background-color: #a6acaf ;">
						<td><input type="checkbox" name="check" style="margin-left: 10px;"></td>
						<td style="font-size: 13px;margin-left: -470px;position: absolute;"><b>Your Company</b></td>
						</tr>

						<tr style="border: 1px solid #f4f6f7;background-color: #d0d3d4;">
						<td><input type="checkbox" name="check" style="margin-left: 10px;"></td>
						<td style="font-size: 13px;margin-left: -470px;position: absolute;">All</td>
						</tr>

						<tr style="border: 1px solid #f4f6f7;">
						<td><input type="checkbox" name="check" style="margin-left: 10px;"></td>
						<td style="font-size: 13px;margin-left: -470px;position: absolute;">Statue of Liberty- Chilling Center</td>
						</tr>

						<tr style="border: 1px solid #f4f6f7;background-color: #d0d3d4;">
						<td><input type="checkbox" name="check" style="margin-left: 10px;"></td>
						<td style="font-size: 13px;margin-left: -470px;position: absolute;">Uffizio Reseller</td>
						</tr>

						<tr style="border: 1px solid #f4f6f7;">
						<td><input type="checkbox" name="check" style="margin-left: 10px;"></td>
						<td style="font-size: 13px;margin-left: -470px;position: absolute;">Delivery- KM Post</td>
						</tr>	

						<tr style="border: 1px solid #f4f6f7;">
						<td><input type="checkbox" name="check" style="margin-left: 10px;"></td>
						<td style="font-size: 13px;margin-left: -470px;position: absolute;">fdfsdf- ATM</td>
						</tr>	

						<tr style="border: 1px solid #f4f6f7;background-color: #d0d3d4;">
						<td><input type="checkbox" name="check" style="margin-left: 10px;"></td>
						<td style="font-size: 13px;margin-left: -470px;position: absolute;">Your Company</td>
						</tr>	

						<tr style="border: 1px solid #f4f6f7;">
						<td><input type="checkbox" name="check" style="margin-left: 10px;"></td>
						<td style="font-size: 13px;margin-left: -470px;position: absolute;">test- Office building</td>
						</tr>	

					</table>

					<div id="XLS">
							<p style="margin-left: 70px;margin-top: 9px;position: absolute;"><b><a href="#" style="text-decoration: none;color:white;">Download XLS</a></b></p>
					</div>

					<div id="PDF">
							<p style="margin-left: 70px;margin-top: 9px;position: absolute;"><b><a href="#" style="text-decoration: none;color:white;">Download PDF</a></b></p>
					</div>

				</div>

			</div>

			</div>


		<div id="map"></div>
			
			<!-- <script>
			function myMap() 
		{
			var mapProp={
  							center:new google.maps.LatLng(51.508742,-0.120850),
  							zoom:5,
						};
			var map = new google.maps.Map(document.getElementById("googleMap"),mapProp);
		}
			</script>

			<script src="https://maps.googleapis.com/maps/api/js?key=YOUR_KEY&callback=myMap"></script> -->

		<script>
			function initMap()
			{
				// The location of Uluru
  				var uluru = {lat: 20.593683, lng: 78.962883};

  				var map = new google.maps.Map(
      			document.getElementById('map'), {
      				zoom: 4, 
      				center: uluru
      			});
  				// The marker, positioned at Uluru
  				var marker = new google.maps.Marker({
  					position: uluru, 
  					map: map
  				});
			}	
		</script>

		<script async defer src="https://maps.googleapis.com/maps/api/js?key=AIzaSyB3N-E4SK4DHQL6jrjB342ePzNh-D6xyGU&callback=initMap"></script>

	</div>
</body>
</html>

<script>
	$("#add").click(function(){
    		document.getElementById('content').style.visibility='visible';
		});
</script>