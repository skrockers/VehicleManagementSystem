<?php session_start();
if(!isset($_SESSION['adminname']))
{
	header('location:AdminLogin.php');
}
?>

<!DOCTYPE html>
<html>
<head>
	<title>Add Vehicle</title>
	<link href="https://fonts.googleapis.com/css2?family=PT+Sans&display=swap" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css2?family=PT+Serif+Caption&display=swap" rel="stylesheet">
	<!-- <link rel="stylesheet" type="text/css" href="design.css"> -->
	<link href="https://fonts.googleapis.com/css2?family=Acme&display=swap" rel="stylesheet">
	<link rel="stylesheet" type="text/css" href="design2.css">

	<style>
		*
		{
			margin:0;
			padding: 0;
			box-sizing: border-box;
			font-family: 'Acme', sans-serif;
		}

		.main
		{
			display: grid;
			grid-template-rows:5vh 115vh;
			grid-template-columns:100%; 
			
		}
		.top-header
		{
			background-color: red;
			grid-column: 1/-1;			
			
		}
		.sidemenu
		{
			background-color: green;
			position: fixed;
			height: 100vh;
		}
		.content
		{
			background-color: white;
			
		}
		.sub-content
		{
			width:80%;
			position: sticky;
			left: 20%;
			/*background-image: url('images/bgpng.png');*/
			background-size: 100% 100%;
			
		}
		.sub-content h1
		{
			text-align: center;
		}
		.innerdiv
		{
			/*border: 1px solid black;*/
			display: none;
			margin:20px;
			background-color: transparent;
		}
		.innerdiv form
		{
			/*	*/
			

		}
		.innerdiv input,select
		{
			display: inline-block;
			width:200px;
			margin:10px;
			height: 30px;
		}
		.innerdiv textarea
		{
			width:450px;
			height: 50px;
			position: relative;
			top:20px;
			
		}
		.innerdiv label
		{
			width:100px;
			display: inline-block;
			margin:10px;
		}
		.required
		{
    	color: red;
    	font-size: 20px;

		}
		#heading
		{
			width:100%;
			height: 70px;
			/*border:1px solid black;*/
			background-image: url('images/head2.png');
			background-size: 100% 100%;
		}
		#heading h2
		{
			font-size: 30px;
			text-align: center;
			line-height: 70px;

		}
		#plus
		{
			padding-right:80%;
			height:50px;
			position: relative;
			bottom:60px;
			left:5%;
			transform: rotate(180deg);
			line-height: 90px;
			font-size: 50px;
			cursor: pointer;
		}
		#minus
		{

			
			height:50px;
			position: relative;
			bottom:60px;
			left:85%;
			display: none;
			line-height: 80px;
			font-size: 50px;
			font-weight: lighter;
			cursor: pointer;

		}
		.view_vehicle
		{
			width:100%;
			height: 70px;
			/*border:1px solid black;*/
			background-image: url('images/head2.png');
			background-size: 100% 100%;
		}
		.view_vehicle h2
		{
			font-size: 30px;
			text-align: center;
			line-height: 70px;
		}

		#uparrow
		{
			height:50px;
			position: relative;
			bottom:60px;
			left:85%;
			display: none;
			line-height: 80px;
			font-size: 50px;
			font-weight: lighter;
			cursor: pointer;
		}
		#downarrow
		{
			height:50px;
			padding-right:80%;
			position: relative;
			bottom:60px;
			left:5%;
			transform: rotate(180deg);
			line-height: 90px;
			font-size: 50px;
			cursor: pointer;

		}
		.innerdiv2
		{
			/*border: 1px solid black;*/
			margin:20px;
			display: none;
			background-color: transparent;
		}
		.car
		{
			height: 300px;
			margin:50px;
			/*border:1px solid black;*/
			display: grid;
			grid-template-columns: 20% 80%;
			box-shadow: 1px 5px 10px 2px grey;


		}
		.car_img
		{
			background-color: orange;
		}
		.car_img img
		{
			width: 200px;
			height: 150px;
		}
		.car_detail
		{
			/*background-image: url('images/hgf.png');*/
			background-size: 100% 100%;
			opacity: 0.9;
			/*background-color: white;*/
		}
		.car_detail form
		{
			margin: 10px;
			/*border:1px solid black;*/

		}
		.car_detail label
		{
			width:100px;
			display: inline-block;
			margin:10px;
			font-weight: bold;
			/*border-bottom: 1px solid black;*/
			
		}
		.car_detail input
		{
			display: inline-block;
			width:200px;
			margin:10px;
			height: 30px;
			border:none;
			outline:none;
			font-size:18px;
			/*border-bottom: 1px solid black;*/
		}
		.car_detail a
		{
			width:200px;
			height: 50px;
			padding:10px;
			position: relative;
			bottom: 15px;
			left:55%;
			color:black;
			text-decoration: none;
			border-radius: 20px;
			font-size: 18px;
			cursor: pointer;
			background-color: orange;

		}
		.innerdiv2 h4
		{
			text-align: center;
		}
		.update
		{
			width:100%;
			height: 70px;
			/*border:1px solid black;*/
			background-image: url('images/head2.png');
			background-size: 100% 100%;
		}
		.update h2
		{
			font-size: 30px;
			text-align: center;
			line-height: 70px;
		}
		
	
		.updatediv input,select
		{
			display: inline-block;
			width:200px;
			margin:10px;
			height: 30px;
		}
		.updatediv label
		{
			width:100px;
			display: inline-block;
			margin:5px;
		}
		#up
		{
			height:50px;
			position: relative;
			bottom:60px;
			left:85%;
			display: none;
			line-height: 80px;
			font-size: 50px;
			font-weight: lighter;
			cursor: pointer;
			
		}
		#down
		{
			height:50px;
			position: relative;
			bottom:60px;
			left:85%;
			transform: rotate(180deg);
			line-height: 90px;
			font-size: 50px;
			cursor: pointer;
			

		}
		#vehicleid
		{
			background-color: transparent;
			width:50px;
			font-size: 20px;
			outline: none;
			border: none;
		}
		.car_img label
		{
			font-size: 20px;
			margin: 20px;
		}
		.car_img a
		{
			width:250px;
			height: 30px;
			margin: 35px;
			text-decoration: none;
			color: white;
			padding: 10px 30px 10px 30px;
			background-color: #0275d8;
			font-size: 18px;
			border-radius: 20px;

		}
		.car_img input[type='submit']
		{
			cursor: pointer;
			height: 30px;
			margin: 35px;
			text-decoration: none;
			color: white;
			padding: 10px 30px 30px 30px;
			background-color: #0275d8;
			border:none;
			outline: none;
			font-size: 18px;
			border-radius: 20px;
			position: relative;
			left:5px;
		}
		#Maintenance
		{
			width:250px;
			height: 30px;
			margin: 30px;
			text-decoration: none;
			color: white;
			padding: 10px 20px 10px 20px;
			background-color: #0275d8;
			font-size: 18px;
			border-radius: 20px;
			position: relative;
			right:5px;
		}
		#disabled
		{
			background-color: lightgrey;
			border:none;
			outline: none;
			cursor: no-drop;
		}
		.innerdiv3
		{
			/*border: 1px solid black;*/
			display: none;
			margin:20px;
			background-color: transparent;
		}
		.innerdiv3 form
		{
			/*	*/
			

		}
		.innerdiv3 input,select
		{
			display: inline-block;
			width:200px;
			margin:10px;
			height: 30px;
		}
		.innerdiv3 textarea
		{
			width:450px;
			height: 50px;
			position: relative;
			top:20px;
			
		}
		.innerdiv3 label
		{
			width:100px;
			display: inline-block;
			margin:10px;
		}
		#plus3
		{
			padding-right:80%;
			height:50px;
			position: relative;
			bottom:60px;
			left:5%;
			transform: rotate(180deg);
			line-height: 90px;
			font-size: 50px;
			cursor: pointer;
		}
		#minus3
		{

			
			height:50px;
			position: relative;
			bottom:60px;
			left:85%;
			display: none;
			line-height: 80px;
			font-size: 50px;
			font-weight: lighter;
			cursor: pointer;

		}
		.innerdiv4
		{
			/*border: 1px solid black;*/
			display: none;
			margin:20px;
			background-color: transparent;
		}
		.innerdiv4 form
		{
			/*	*/
			

		}
		.innerdiv4 input,select
		{
			display: inline-block;
			width:200px;
			margin:10px;
			height: 30px;
		}
		.innerdiv4 textarea
		{
			width:450px;
			height: 50px;
			position: relative;
			top:20px;
			
		}
		.innerdiv4 label
		{
			width:100px;
			display: inline-block;
			margin:10px;
		}
		#plus4
		{
			padding-right:80%;
			height:50px;
			position: relative;
			bottom:60px;
			left:5%;
			transform: rotate(180deg);
			line-height: 90px;
			font-size: 50px;
			cursor: pointer;
		}
		#minus4
		{

			
			height:50px;
			position: relative;
			bottom:60px;
			left:85%;
			display: none;
			line-height: 80px;
			font-size: 50px;
			font-weight: lighter;
			cursor: pointer;

		}
		.car4
		{
			height: 350px;
			margin:50px;
			/*border:1px solid black;*/
			display: grid;
			grid-template-columns: 20% 80%;
			box-shadow: 1px 5px 10px 2px grey;
		}
		

		
		#highlight
		{
			background-color: orange;
		}
		
	


	</style>
</head>
<body>
	<div class="main">
		<div class="top-header">top</div>
		<div class="sidemenu">
			<div class="navi">
				<img  id="logo"src="images/logor.png">
				
				<h1 align="center"><?php echo $_SESSION['adminname'];?></h1>
				<table>
					<tr>
						<th>Menu</th>
					</tr>
					<tr>
						<td><a href="Admin_Dashboard.php">Home</a></td>
					</tr>
					<tr>
						<td><a href="#">Profile</a></td>
					</tr>
					<tr>
						<td id="highlight"><a href="Vehicle.php">Vehicles</a></td>
					</tr>
					<tr>
						<td><a href="Driver.php">Driver</a></td>
					</tr>
					<tr>
						<td><a href="Booking.php">Bookings</a></td>
					</tr>
					<tr>
						<td><a href="Generate_Report.php">Generate Reports</a></td>
					</tr>
					<tr>
						<td><a href="admin_logout.php">Logout</a></td>
					</tr>
				</table>
				
			</div>
		</div>
		<div class="content">
			<div class="sub-content">
				<?php
					include 'connection.php';
					$getid=$_GET['id'];
					$view="select *from car_register where id='$getid'";
					$view_prepare=mysqli_query($con,$view);
					$fetch=mysqli_fetch_array($view_prepare);
					?>
				<h1>Maintenance</h1><br>
				<h2 align="center">Maintenance Details for Vehicle ID:&ensp;<?php echo $fetch['id']?></h2><br>
				<div id="heading">
				<h2>Add Repair </h2>
				<img  id="plus" src="images/arr.png">
				<img id="minus" src="images/arr.png">
				</div>
				<div class="innerdiv">
					
					<form action="" method="post">
						<label>Vehicle Type:</label>
						<input id="disabled" readonly type="text" name="vehicletype" value="<?php echo $fetch['vehicle_type']?>">
						<label>Vehicle Name:</label>
						<input id="disabled" readonly type="text" name="vehiclename" value="<?php echo $fetch['Name']?>">
						<label>Vehicle Model:</label>
						<input id="disabled" readonly type="text" name="vehiclemodel" value="<?php echo $fetch['Model']?>"><br>
						<label>Driver Name:</label>
						<input type="text" name="drivername">
						<label>Garage Name:</label>
						<input type="text" name="garagename">
						<label>Repair Date:</label>
						<input type="date" name="repairdate"><br>
						<label>Repair Cost:</label>
						<input type="text" name="repaircost">
						<label>Description:</label>
						<textarea name="description"></textarea>
						<input type="submit" name="repair">
						

						
					</form>					
				</div><br>
				<div class="view_vehicle">
				<h2>View Repair</h2>
				<img id="uparrow" src="images/arr.png">
				<img id="downarrow" src="images/arr.png">
				</div>
				<div class="innerdiv2">

					<?php
					include 'connection.php';
					$select_query="select *from maintenance where Vehicle_ID='$getid'";
					$prepare_query=mysqli_query($con,$select_query);
					$nums=mysqli_num_rows($prepare_query);
					if($nums>0)
					{
					while($check=mysqli_fetch_array($prepare_query))
					{
						?>
				<div class="car">
					<div class="car_img">
						

						<form action="" method="post">
							<br>
							<label>Vehicle ID:</label>
							<input readonly type="text" name="id" id="vehicleid"value="<?php echo $check['Vehicle_ID'];?>"><br><br><br>
							<!-- <a href="Update_Vehicle.php?id=<?php echo $check['id'];?>">Update</a> -->
							<!-- <input type="submit" name="delete" value="Delete"> -->
							
						</form>
						<!-- <a id="Maintenance" href="Maintenance.php?id=<?php echo $check['id'];?>">Maintenance</a> -->
						
					</div>
					<div class="car_detail">
						<form>
							<h2>Repair Details:</h2><br>
							<label>Vehicle-Type:</label>
							<input readonly  value="<?php echo $check['Vehicle_Type'];?> "> 
							<label>Vehicle Name:</label>
							<input readonly  value="<?php echo $check['Vehicle_Name'];?> "> 
							<label>Vehicle Model:</label>
							<input readonly  value="<?php echo $check['Vehicle_Model'];?> "> 
							<label>Driver Name:</label>
							<input readonly  value="<?php echo $check['Driver_Name'];?> "> 
							<label>Garage Name:</label>
							<input readonly  value="<?php echo $check['Garage_Name'];?> "> 
							<label>Repair Date:</label>
							<input readonly  value="<?php echo $check['Repair_Date'];?> "> 
							<label>Repair Cost:</label>
							<input readonly  value="<?php echo $check['Repair_Cost'];?> "> 
							<label>Description:</label>
							<input readonly  value="<?php echo $check['Description'];?> "> 
							<!-- <a href="Reservation?id=<?php echo $check['id']?>">Book Now</a> -->
						</form>
					</div>
					
				</div>

					<?php

					}
				}
				else
			{
				?>
				<h4>No  Repair Records found.</h4><br>
				<?php
			}



					?>

					
				</div><br>
				<div id="heading">
				<h2>Add Fuel </h2>
				<img  id="plus3" src="images/arr.png">
				<img id="minus3" src="images/arr.png">
				</div>
				<div class="innerdiv3">
					<form action="" method="post">
						<label>Vehicle Type:</label>
						<input id="disabled" readonly type="text" name="fvehicletype" value="<?php echo $fetch['vehicle_type']?>">
						<label>Vehicle Name:</label>
						<input id="disabled" readonly type="text" name="fvehiclename" value="<?php echo $fetch['Name']?>">
						<label>Vehicle Model:</label>
						<input id="disabled" readonly type="text" name="fvehiclemodel" value="<?php echo $fetch['Model']?>"><br>
						<label>Driver Name:</label>
						<input type="text" name="fdrivername">
						<label>Fuel Station Name:</label>
						<input type="text" name="fstationname">
						<label>Fuel Station Location:</label>
						<input type="text" name="flocationname">
						<label>Fuel Type:</label>
						<select name="ftype">
							<option>Select--</option>
							<option>Petrol</option>
							<option>Discel</option>
							<option>Gas</option>
							<option>Electric</option>
						</select>
						<label>Fuel Quantity(litres):</label>
						<input type="text" name="fqnty">
						<label>Fuel Date:</label>
						<input type="date" name="fdate"><br>
						<label>Fuel Cost:</label>
						<input type="text" name="fcost">
						<!-- <label>Description:</label>
						<textarea name="description"></textarea> -->
						<input type="submit" name="fuel">
						

						
					</form>		
					
				</div><br>
				<div id="heading">
				<h2>View Fuel </h2>
				<img  id="plus4" src="images/arr.png">
				<img id="minus4" src="images/arr.png">
				</div>
				<div class="innerdiv4">

					<?php
					include 'connection.php';
					$select_query="select *from FuelDetails where Vehicle_ID='$getid'";
					$prepare_query=mysqli_query($con,$select_query);
					$nums=mysqli_num_rows($prepare_query);
					if($nums>0)
					{
					while($check=mysqli_fetch_array($prepare_query))
					{
						?>
				<div class="car4">
					<div class="car_img">
						

						<form action="" method="post">
							<br>
							<label>Vehicle ID:</label>
							<input readonly type="text" name="id" id="vehicleid"value="<?php echo $check['Vehicle_ID'];?>">
							<!-- <a href="Update_Vehicle.php?id=<?php echo $check['id'];?>">Update</a> -->
							<!-- <input type="submit" name="delete" value="Delete"> -->
							
						</form>
						<!-- <a id="Maintenance" href="Maintenance.php?id=<?php echo $check['id'];?>">Maintenance</a> -->
						
					</div>
					<div class="car_detail" >
						<form>
							<h2>Fuel Details:</h2><br>
							<label>Vehicle-Type:</label>
							<input readonly  value="<?php echo $check['Vehicle_Type'];?> "> 
							<label>Vehicle Name:</label>
							<input readonly  value="<?php echo $check['Vehicle_Name'];?> "> 
							<label>Vehicle Model:</label>
							<input readonly  value="<?php echo $check['Vehicle_Model'];?> "> 
							<label>Driver Name:</label>
							<input readonly  value="<?php echo $check['Driver_Name'];?> "> 
							<label>Fuel Station Name:</label>
							<input readonly  value="<?php echo $check['Fuel_Station_Name'];?> "> 
							<label>Fuel Date:</label>
							<input readonly  value="<?php echo $check['Fuel_Date'];?> "> 
							<label>Fuel Quantity:</label>
							<input readonly  value="<?php echo $check['Fuel_Quantity'];?> "> 
							<label>Fuel Station Location:</label>
							<input readonly  value="<?php echo $check['Fuel_Station_Location'];?>
							 "> 
							 <label>Fuel Cost:</label>
							<input readonly  value="<?php echo $check['Fuel_Cost'];?>
							 ">
							 <label>Fuel Type:</label>
							<input readonly  value="<?php echo $check['Fuel_Type'];?>
							 ">  
							<!-- <a href="Reservation?id=<?php echo $check['id']?>">Book Now</a> -->
						</form>
					</div>
					
				</div>

					<?php

					}
				}
				else
			{
				?>
				<h4>No  Fuel Records found.</h4><br>
				<?php
			}



					?>

					
				</div>



			</div>

			</div>
		
		</div>

</body>
</html>
<script type="text/javascript">
	document.getElementById('plus').addEventListener("click",
		function()
		{
			document.querySelector('.innerdiv').style.display="flex";
			document.getElementById('plus').style.display="none";
			document.getElementById('minus').style.display="flex";

		});	
	document.getElementById('minus').addEventListener("click",
		function()
		{
			document.querySelector('.innerdiv').style.display="none";
			document.getElementById('plus').style.display="flex";
			document.getElementById('minus').style.display="none";

		});
	document.getElementById('downarrow').addEventListener("click",
		function()
		{
			document.querySelector('.innerdiv2').style.display="grid";
			document.getElementById('downarrow').style.display="none";
			document.getElementById('uparrow').style.display="flex";

			

		});	
	document.getElementById('uparrow').addEventListener("click",
		function()
		{
			document.querySelector('.innerdiv2').style.display="none";
			document.getElementById('downarrow').style.display="flex";
			document.getElementById('uparrow').style.display="none";

			

		});	
	/*-------------------------------------------------------------------*/
	document.getElementById('plus3').addEventListener("click",
		function()
		{
			document.querySelector('.innerdiv3').style.display="flex";
			document.getElementById('plus3').style.display="none";
			document.getElementById('minus3').style.display="flex";

		});	
	document.getElementById('minus3').addEventListener("click",
		function()
		{
			document.querySelector('.innerdiv3').style.display="none";
			document.getElementById('plus3').style.display="flex";
			document.getElementById('minus3').style.display="none";

		});
	/*----------------------------------------------------------------------*/
	document.getElementById('plus4').addEventListener("click",
		function()
		{
			document.querySelector('.innerdiv4').style.display="block";
			document.getElementById('plus4').style.display="none";
			document.getElementById('minus4').style.display="flex";

		});	
	document.getElementById('minus4').addEventListener("click",
		function()
		{
			document.querySelector('.innerdiv4').style.display="none";
			document.getElementById('plus4').style.display="flex";
			document.getElementById('minus4').style.display="none";

		});



</script>
<?php
include 'connection.php';
if(isset($_POST['repair']))
{
	$Vehicle_ID=$_GET['id'];
	$Vehicle_Type=$_POST['vehicletype'];
	$Vehicle_Name=$_POST['vehiclename'];
	$Vehicle_Model=$_POST['vehiclemodel'];
	$Driver_Name=$_POST['drivername'];
	$Garage_Name=$_POST['garagename'];
	$Repair_Date=$_POST['repairdate'];
	$Repair_Cost=$_POST['repaircost'];
	$Description=$_POST['description'];


	$insert_repair="insert into maintenance(Vehicle_ID,Vehicle_Type,Vehicle_Name,
Vehicle_Model,Driver_Name,Garage_Name,Repair_Date,Repair_Cost,Description)values('$Vehicle_ID','$Vehicle_Type','$Vehicle_Name','$Vehicle_Model','$Driver_Name','$Garage_Name','$Repair_Date','$Repair_Cost','$Description')";
$repair_prepare=mysqli_query($con,$insert_repair);
if($repair_prepare)
{
	echo "<script>alert('Repair added');location='Vehicle.php';</script>";

}
else
{
	echo "<script>alert('Failed');</script>";

}
}

?>
<!-- Fuel------------------------------------------------------------- -->
<?php
include 'connection.php';
if(isset($_POST['fuel']))
{
	$FVehicle_ID=$_GET['id'];
	$FVehicle_Type=$_POST['fvehicletype'];
	$FVehicle_Name=$_POST['fvehiclename'];
	$FVehicle_Model=$_POST['fvehiclemodel'];
	$FName=$_POST['fstationname'];
	$FDriver_Name=$_POST['fdrivername'];
	$FLocation=$_POST['flocationname'];
	$FDate=$_POST['fdate'];
	$FQuantity=$_POST['fqnty'];
	$FCost=$_POST['fcost'];
	$FType=$_POST['ftype'];

echo "$FVehicle_ID<br>";
echo "$FVehicle_Type<br>";
echo "$FVehicle_Name<br>";
echo "$FVehicle_Model<br>";
echo "$FName<br>";
echo "$FDriver_Name<br>";
echo "$FLocation<br>";
echo "$FDate<br>";
echo "$FQuantity<br>";
echo "$FCost<br>";
echo "$FType<br>";
	$insert_fuel="insert into FuelDetails(Vehicle_ID,Vehicle_Type,Vehicle_Name,
Vehicle_Model,Driver_Name,Fuel_Station_Name,Fuel_Date,Fuel_Quantity,Fuel_Station_Location,Fuel_Cost,Fuel_Type)values('$FVehicle_ID','$FVehicle_Type','$FVehicle_Name','$FVehicle_Model','$FDriver_Name','$FName','$FDate','$FQuantity','$FLocation','$FCost','$FType')";
$fuel_prepare=mysqli_query($con,$insert_fuel);
if($fuel_prepare)
{
	echo "<script>alert('Fuel added');location='Vehicle.php';</script>";

}
else
{
	echo "<script>alert('Failed');</script>";

}
}

?>