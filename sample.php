<!DOCTYPE html>
<html>
<head>
	<title></title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
  	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
	<link rel="stylesheet" type="text/css" href="styles.css">
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">

	<style>

			.dropdown-menu a:hover {background-color:  #0c2636;}

			.dropdown-menu ul li:hover {background-color:  #0c2636;}

		    #reports:hover .dropdown-menu {display: block;}

		    #reports:hover .hidden-box {display: block; }

		    #tracking:hover .hidden-box {display: block; }

		    #dashboard:hover .hidden-box {display: block; }

		    #settings:hover .hidden-box {display: block; }

		    #chart:hover .hidden-box {display: block; }

		    #chart:hover .dropdown-menu {display: block;}

		    #settings:hover .dropdown-menu {display: block;}

		    a
		    {
		    	text-decoration: none;
		    	cursor: pointer;
		    }

		    ul li
		    {
		    	color:white;
		    }

		    /*.first:hover + dropdown-container{
		    	display: block;
		    }*/

		    /*.dropdown-menu .first:hover .dropdown-container {display: block;}*/

		    /*.dropdown-container a:hover {background-color:  #154360;}*/
	</style>
</head>
<body>

	<div id="leftbar">
		
		<div id="logo">
			<img class="sub-logo" src="ulogo.png">
		</div>

		<span id="icons" title="User">
			<!-- <img src="user.png" style="position: absolute;height: 35px;width: 32px;margin-left: -6px;"> -->
			<i class="fa fa-user fa-2x" aria-hidden="true" style="position: absolute;height: 35px;width: 32px;margin-left: 3px;color:white;"></i>
		</span>

		<span id="icons" title="Notification">
			<!-- <img src="bell.png" style="position: absolute;height: 35px;width: 32px;margin-left: 33px;"> -->
			<i class="fa fa-bell fa-2x" aria-hidden="true" style="position: absolute;height: 35px;width: 32px;margin-left: 35px;color:white;"></i>
		</span>


		<!-- <div class="scroll"> -->
		
		<span id="dashboard" title="Dashboard">
			<div class="hidden-box" style="width: 86px;">
			<i class="fa fa-tachometer fa-2x" aria-hidden="true" style="margin-left: 20px;color:white;margin-top: 20px;"></i>	
			</div>
			<i class="fa fa-tachometer fa-2x" aria-hidden="true"></i>
		</span>

		<span id="tracking" title="Tracking">
			<div class="hidden-box" style="width: 80px;">
			<i class="fa fa-map-marker fa-2x" aria-hidden="true" style="margin-left: 20px;color:white;margin-top: 20px;"></i>	
			</div>
			<i class="fa fa-map-marker fa-2x" aria-hidden="true"></i>
		</span>

		<span id="reports" title="Reports">
			<div class="hidden-box">
			<i class="fa fa-file-text-o fa-2x" aria-hidden="true" style="margin-left: 20px;color:white;margin-top: 20px;"></i>	
			</div>
			<i class="fa fa-file-text-o fa-2x" aria-hidden="true"></i>
				<div class="dropdown-menu" style="margin-top: -380px;">
					
						<ul style="list-style-type: none;">
						<li><a href="#" style="color:white;">Activity<i class="fa fa-caret-right" style="margin-left:124px;position: absolute;"></i></a>

								<div class="dropdown-container-Activity">
									
									<ul style="list-style-type: none;">
										<li><a href="#" style="color:white;">Travel</a></li>
										<li><a href="#" style="color:white;">Trip</a></li>
										<li><a href="#" style="color:white;">Stoppage</a></li>
										<li><a href="#" style="color:white;">Idle</a></li>
										<li><a href="#" style="color:white;">Inactive</a></li>
										<li><a href="#" style="color:white;">Speed vs Distance</a></li>
										<li><a href="#" style="color:white;">Object Status</a></li>
										<li><a href="#" style="color:white;">Daywise Distance</a></li>
										<li><a href="#" style="color:white;">Overspeed Summary</a></li>
									</ul>

								</div>

						</li>

						 <li><a href="#" style="color:white;">Geofence-Address<i class="fa fa-caret-right" style="margin-left:49px;position: absolute;"></i></a>

							<div class="dropdown-container-geo">
									
									<ul style="list-style-type: none;">
										<li><a href="#" style="color:white;">Geofence</a></li>
										<li><a href="#" style="color:white;">Address</a></li>
										<li><a href="#" style="color:white;">Fence Inside Travel Report</a></li>
										<li><a href="#" style="color:white;">Fence Outside Travel Re...</a></li>
									</ul>

							</div>

						</li>

							<li><a href="#" style="color:white;">Sensor<i class="fa fa-caret-right" style="margin-left:123px;position: absolute;"></i></a>

							<div class="dropdown-container-sensor">
									
									<ul style="list-style-type: none;">
										<li><a href="#" style="color:white;">Ignition</a></li>
										<li><a href="#" style="color:white;">Air Conditioner</a></li>
										<li><a href="#" style="color:white;">Air Conditioner Misused</a></li>
										<li><a href="#" style="color:white;">Analog Data</a></li>
										<li><a href="#" style="color:white;">Digital Ports</a></li>	
									</ul>

							</div>

							</li>

							<li><a href="#" style="color:white;">Alert<i class="fa fa-caret-right" style="margin-left:137px;position: absolute;"></i></a>

							<div class="dropdown-container-Alert">
									
									<ul style="list-style-type: none;">
										<li><a href="#" style="color:white;">Object Alert</a></li>
										<li><a href="#" style="color:white;">Driver Alert</a></li>
										<li><a href="#" style="color:white;">SMS-Email Alert</a></li>
										<li><a href="#" style="color:white;">Alert Status</a></li>	
									</ul>

							</div>

							</li> 

							<li><a href="#" style="color:white;">Maintenance<i class="fa fa-caret-right" style="margin-left:84px;position: absolute;"></i></a>

							<div class="dropdown-container-maintain">
									
									<ul style="list-style-type: none;">
										<li><a href="#" style="color:white;">Reminder Status</a></li>
										<li><a href="#" style="color:white;">Expense History</a></li>
										<li><a href="#" style="color:white;">Maintenance History</a></li>	
									</ul>

							</div>

							</li>

							<li><a href="#" style="color:white;">Fuel<i class="fa fa-caret-right" style="margin-left:136px;position: absolute;"></i></a>

							<div class="dropdown-container-Fuel">
									
									<ul style="list-style-type: none;">
										<li><a href="#" style="color:white;">Consumption</a></li>
										<li><a href="#" style="color:white;">Fill-Drain</a></li>	
									</ul>

							</div>

							</li>

							<li><a href="#" style="color:white;">RPM<i class="fa fa-caret-right" style="margin-left:134px;position: absolute;"></i></a>

							<div class="dropdown-container-RPM">
									
									<ul style="list-style-type: none;">
										<li><a href="#" style="color:white;">RPM Status</a></li>
										<li><a href="#" style="color:white;">RPM Summary</a></li>	
									</ul>

							</div>

							</li>

							<li><a href="#" style="color:white;">Temperature<i class="fa fa-caret-right" style="margin-left:83px;position: absolute;"></i></a>

							<div class="dropdown-container-temp">
									
									<ul style="list-style-type: none;">
										<li><a href="#" style="color:white;">Temperature Status</a></li>
										<li><a href="#" style="color:white;">Temperature Summary</a></li>	
									</ul>

							</div>

							</li>

							<li><a href="#" style="color:white;">Job<i class="fa fa-caret-right" style="margin-left:141px;position: absolute;"></i></a>

							<div class="dropdown-container-job">
									
									<ul style="list-style-type: none;">
										<li><a href="#" style="color:white;">Object Job</a></li>
										<li><a href="#" style="color:white;">Drivers Job Summary</a></li>
										<li><a href="#" style="color:white;">Job Summary</a></li>
										<li><a href="#" style="color:white;">Job Status</a></li>	
									</ul>

							</div>

							</li>

							<li><a href="#" style="color:white;">Tire<i class="fa fa-caret-right" style="margin-left:139px;position: absolute;"></i></a>

							<div class="dropdown-container-tire">
									
									<ul style="list-style-type: none;">
										<li><a href="#" style="color:white;">Tire Status</a></li>
										<li><a href="#" style="color:white;">Tire Event Summary</a></li>
										<li><a href="#" style="color:white;">Object Tire</a></li>	
									</ul>

							</div>

							</li>

							<li><a href="#" style="color:white;">Driver Behaviour<i class="fa fa-caret-right" style="margin-left:57px;position: absolute;"></i></a>

							<div class="dropdown-container-driver">
									
									<ul style="list-style-type: none;">
										<li><a href="#" style="color:white;">Driver Activity</a></li>
										<li><a href="#" style="color:white;">Driver Workhour</a></li>
										<li><a href="#" style="color:white;">Driver Rating</a></li>	
										<li><a href="#" style="color:white;">RAG Store</a></li>	
										<li><a href="#" style="color:white;">Perfection Store</a></li>	
										<li><a href="#" style="color:white;">Driver RFID Summary</a></li>		
									</ul>

							</div>

							</li>

							<li><a href="#" style="color:white;">OBD<i class="fa fa-caret-right" style="margin-left:133px;position: absolute;"></i></a>

							<div class="dropdown-container-OBD">
									
									<ul style="list-style-type: none;">
										<li><a href="#" style="color:white;">Health Status</a></li>
										<li><a href="#" style="color:white;">Engine Temperature</a></li>
										<li><a href="#" style="color:white;">Battery Voltage</a></li>
										<li><a href="#" style="color:white;">OBD Raw Data</a></li>	
									</ul>

							</div>

							</li>

							<li><a href="#" style="color:white;">Trip Classification<i class="fa fa-caret-right" style="margin-left:53px;position: absolute;"></i></a>

							<div class="dropdown-container-trip">
									
									<ul style="list-style-type: none;">
										<li><a href="#" style="color:white;">Trip Classification</a></li>
									</ul>

							</div>

							</li>

							<li><a href="#" style="color:white;">Billing<i class="fa fa-caret-right" style="margin-left:125px;position: absolute;"></i></a>

							<div class="dropdown-container-billing">
									
									<ul style="list-style-type: none;">
										<li><a href="#" style="color:white;">Fuel Consumption</a></li>
										<li><a href="#" style="color:white;">Fuel Level</a></li>	
										<li><a href="#" style="color:white;">Fuel Level</a></li>
									</ul>

							</div>

							</li>

					</ul>

				</div>
		</span>

		<span id="chart" title="Chart">
			<div class="hidden-box">
			<i class="fa fa-pie-chart fa-2x" aria-hidden="true" style="margin-left: 20px;color:white;margin-top: 20px;"></i>	
			</div>
			<i class="fa fa-pie-chart fa-2x" aria-hidden="true"></i>
			<div class="dropdown-menu" style="margin-top: -65px;">
					
				<ul style="list-style-type: none;">
						<li><a href="#" style="color:white;">Activity<i class="fa fa-caret-right" style="margin-left:120px;position: absolute;"></i></a>

								<div class="dropdown-container-activity">
									
									<ul style="list-style-type: none;">
										<li><a href="#" style="color:white;">Distance</a></li>
										<li><a href="#" style="color:white;">Duration</a></li>
									</ul>

								</div>

						</li>

						<li><a href="#" style="color:white;">Alert<i class="fa fa-caret-right" style="margin-left:135px;position: absolute;"></i></a>

							<div class="dropdown-container-alert">
									
									<ul style="list-style-type: none;">
										<li><a href="#" style="color:white;">Alerts</a></li>
									</ul>

							</div>

						</li>

							<li><a href="#" style="color:white;">Fuel<i class="fa fa-caret-right" style="margin-left:135px;position: absolute;"></i></a>

							<div class="dropdown-container-fuel">
									
									<ul style="list-style-type: none;">
										<li><a href="#" style="color:white;">Fuel Consumption</a></li>
										<li><a href="#" style="color:white;">Fuel Level</a></li>	
									</ul>

							</div>

						</li>

					</ul>

    		</div>
		</span>

		<span id="settings" title="Settings">
			<div class="hidden-box" style="width: 82px;">
			<i class="fa fa-cog fa-2x" aria-hidden="true" style="margin-left: 20px;color:white;margin-top: 20px;"></i>	
			</div>
			<i class="fa fa-cog fa-2x" aria-hidden="true"></i>
			<div class="dropdown-menu" style="margin-top: -63px;">

					<ul style="list-style-type: none;">
						<li><a href="" style="color:white;">General<i class="fa fa-caret-right" style="margin-left:113px;position: absolute;"></i></a>

								<div class="dropdown-container-general">
									
									<ul style="list-style-type: none;">
										<li><a href="#" style="color:white;">Company</a></li>
										<li><a href="#" style="color:white;">Object</a></li>
										<li><a href="#" style="color:white;">Driver</a></li>
										<li><a href="#" style="color:white;">Alert</a></li>	
									</ul>

								</div>

						</li>

						<li><a href="" style="color:white;">Master<i class="fa fa-caret-right" style="margin-left:120px;position: absolute;"></i></a>

							<div class="dropdown-container-master">
									
									<ul style="list-style-type: none;">
										<li><a href="#" style="color:white;">Job</a></li>
										<li><a href="#" style="color:white;">Driver Rating</a></li>
										<li><a href="#" style="color:white;">Tire Management</a></li>
										<li><a href="#" style="color:white;">Inventory</a></li>
										<li><a href="#" style="color:white;">Object Group</a></li>
										<li><a href="#" style="color:white;">Classify Trips</a></li>	
									</ul>

							</div>

						</li>

					</ul>
					<!-- <a href="#" style="color:white;">General <i class="fa fa-caret-right" style="margin-left: 105px;"></i></a>
    				<a href="#" style="color:white;">Master <i class="fa fa-caret-right" style="margin-left: 112px;"></i></a> -->
    		</div>
		</span>
    	
    	<!-- </div> -->

	</div>
</body>
</html>

<script>
	// function border(x)
	// {
	// 	x.style.border= "1px solid #1542b7";
	// 	x.style.border.height= "100px";
	// 	x.style.border.width= "90px";
	// }

	// function noborder(x)
	// {
	// 	x.style.border= "none";
	// }

	// $(".first").click(function(){
	// 	dropdown-container.style.display="block";
	// });
</script>