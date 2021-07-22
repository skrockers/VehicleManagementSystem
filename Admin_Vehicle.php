<?php 
session_start();
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
		@keyframes fadein
		{
			from
			{
				opacity: 0;
				top:-100px;
				
			}
			to
			{
				opacity: 1;
				top:10px;
				
			}
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
			/*background-image: url('images/login3.png');*/
			background-size: cover;
			
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
			animation-name: fadein;
			animation-duration: 2s;
			position: relative;
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
			animation-name: fadein;
			animation-duration: 2s;
			position: relative;
		}
		.car
		{
			height: 400px;
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
		.innerdiv3
		{
			/*border: 1px solid black;*/
			margin:20px;
			display: none;
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
						<td><a href="Admin_profile.php">Profile</a></td>
					</tr>
					<tr>
						<td id="highlight"><a href="Vehicle.php">Vehicles</a></td>
					</tr>
					<tr>
						<td><a href="Driver.php">Driver</a></td>
					</tr>
					<tr>
						<td><a href="booking.php">Booking Records</a></td>
					</tr>
					<tr>
						<td><a href="Generate_Report.php">Generate Records</a></td>
					</tr>
					<tr>
						<td><a href="admin_logout.php">Logout</a></td>
					</tr>
				</table>
				
			</div>
		</div>
		<div class="content">
			<div class="sub-content">
				<h1>Vehicles</h1>
			<div id="heading">
				<h2>Add New Vehicles </h2>
				<img  id="plus" src="images/arr.png">
				<img id="minus" src="images/arr.png">

			</div>
			<div class="innerdiv">
			<form action="" method="post" enctype="multipart/form-data">
				<h2>Vehicle Details:</h2>
								<label>Vehicle-Type:<span class="required">*</span></label>
								<select name="type">
									<option>Select--</option>
									<option>Car</option>
									<option>Van</option>
									<option>Mini-Bus</option>
									<option>Bus</option>
								</select>
								<label>Name:<span class="required">*</span></label>
								<input type="text" name="name" >
								<label>Model:<span class="required">*</span></label>
								<input type="text" name="model" >
								<label>No. of Seats:<span class="required">*</span></label>
								<input type="text" name="seats" >
								<label>Rate/Kms:<span class="required">*</span></label>
								<input type="number" name="rate" >
								<label>Driver Allowance/Day:<span class="required">*</span></label>
								<input type="number" name="driver" >
								<label>Registration No:<span class="required">*</span></label>
								<input type="text" name="regno" >
								<label>Engine-No:<span class="required">*</span></label>
								<input type="text" name="engno" >
								<label>Insurance:<span class="required">*</span></label>
								<input type="text" name="insurance" >
								<label>Insurance Start Date:<span class="required">*</span></label>
								<input type="date" name="insurance_start" >
								<label>Insurance Expiry Date:<span class="required">*</span></label>
								<input type="date" name="insurance_end" >
								<label>Fuel:<span class="required">*</span></label>
								<input type="text" name="fuel" >
								<label>Vehicle-Image:<span class="required">*</span></label>
								<input type="file" name="img" >
								<input type="submit" name="register">
			</form>
			
		</div><br>
		<div class="view_vehicle">
				<h2>View Vehicles </h2>
				<img id="uparrow" src="images/arr.png">
				<img id="downarrow" src="images/arr.png">

			</div>
			<div class="innerdiv2" id="inner">
				
				
					<?php
					include 'connection.php';
					$select_query="select *from car_register";
					$prepare_query=mysqli_query($con,$select_query);
					$nums=mysqli_num_rows($prepare_query);
					if($nums>0)
					{
					while($check=mysqli_fetch_array($prepare_query))
					{
						?>
				<div class="car">
					<div class="car_img">
						<img src="<?php echo $check['Pic'];?>">

						<form action="" method="post">
							<label>Vehicle ID:</label>
							<input readonly type="text" name="id" id="vehicleid"value="<?php echo $check['id'];?>"><br><br><br>
							<a href="Update_Vehicle.php?id=<?php echo $check['id'];?>">Update</a>
							<input type="submit" name="delete" value="Delete">
							
						</form>
						<a id="Maintenance" href="Maintenance.php?id=<?php echo $check['id'];?>">Maintenance</a>
						
					</div>
					<div class="car_detail">
						<form>
							<h2 align="center">Vehicle Details:</h2>
							<label>Vehicle-Type:</label>
							<input readonly  value="<?php echo $check['vehicle_type'];?> "> 
							<label>Name:</label>
							<input readonly  value="<?php echo $check['Name'];?> "> 
							<label>Model:</label>
							<input readonly  value="<?php echo $check['Model'];?> "> 
							<label>Seats:</label>
							<input readonly  value="<?php echo $check['Seats'];?> "> 
							<label>Rate/Kms:</label>
							<input readonly  value="<?php echo $check['Rate'];?> "> 
							<label>Driver Allowance/Day:</label>
							<input readonly  value="<?php echo $check['Driver'];?> "> 
							<label>Registration-No:</label>
							<input readonly  value="<?php echo $check['Registration_No'];?> "> 
							<label>Engine-No:</label>
							<input readonly  value="<?php echo $check['Engine_No'];?> "> 
							<label>Insurance:</label>
							<input readonly  value="<?php echo $check['Insurance'];?> "> 
							<label>Insurance Start Date:</label>
							<input readonly  value="<?php echo $check['Insurance_Start'];?> "> 
							<label>Insurance Expiry Date:</label>
							<input readonly  value="<?php echo $check['Insurance_Expiry'];?> "> 
							<label>Fuel:</label>
							<input readonly  value="<?php echo $check['Fuel'];?> "> 
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
				<h4>No  Vehicle found.</h4><br>
				<?php
			}



					?>

				
			</div><br>


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
	document.getElementById('down').addEventListener("click",
		function()
		{
			document.querySelector('.updatediv').style.display="flex";
			document.getElementById('down').style.display="none";
			document.getElementById('up').style.display="flex";

		});	
	document.getElementById('up').addEventListener("click",
		function()
		{
			document.querySelector('.updatediv').style.display="none";
			document.getElementById('down').style.display="flex";
			document.getElementById('up').style.display="none";

		});




</script>

<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>

<!----------- Add Vehicle ------------------------------------------------------------>
<?php
 include 'connection.php';
 if(isset($_POST['register']))
 {
 	$Type=$_POST['type'];
	$Name=$_POST['name'];
	$Model=$_POST['model'];
	$Seats=$_POST['seats'];
	$Rate=$_POST['rate'];
	$Driver=$_POST['driver'];
	$RegNo=$_POST['regno'];
	$EngNo=$_POST['engno'];
	$Insurance=$_POST['insurance'];
	$IStart=$_POST['insurance_start'];
	$IEnd=$_POST['insurance_end'];
	$Fuel=$_POST['fuel'];
 	$Pic=$_FILES['img'];

 	$Pic_Name=$Pic['name'];
 	$Pic_Path=$Pic['tmp_name'];
 	$Pic_Error=$Pic['error'];
 	$Pic_Type=$Pic['type'];
 	if($Pic_Error== 0)
 	{
 		$Destin='upload/'.$Pic_Name;
 		echo "$Destin";
 		move_uploaded_file($Pic_Path, $Destin);
 		


 	$insert_query="insert into car_register(Pic,vehicle_type,Name,Model,Seats,Rate,Driver,Registration_No,Engine_No,Insurance,Insurance_Start,Insurance_Expiry,Fuel)values('$Destin','$Type','$Name','$Model','$Seats','$Rate','$Driver','$RegNo','$EngNo','$Insurance','$IStart','$IEnd','$Fuel')";
 	$prepare_insert=mysqli_query($con,$insert_query);

 	if($prepare_insert)
 	{
 		echo "
 			<script>
 			alert('Success..!! Vehicle Registered Successfully.');
 			location='Vehicle.php';
 		</script>
 		";
 	}
 	else
 	{
 		echo "
 			<script>
 			swal('Fail!', 'Vehicle not Registered..!!', 'error');
 		</script>
 		";
 	}
 }
 else
 {
 	echo "
 			<script>
 			swal('Fail!', 'Invalid Pic', 'error');
 		</script>
 		";
 }
 }
 

?>	
<!-- Delete----------------------------------------------------------- -->
<?php
include 'connection.php';
if(isset($_POST['delete']))
{

	$ID=$_POST['id'];

	$delete_query="delete from car_register where id='$ID'";
	$prepare_delete=mysqli_query($con,$delete_query);
	if($prepare_delete)
	{
		echo "
 			<script>
 			
 			alert('Vehicle deleted successfully.');
 			location='Vehicle.php';


 		</script>
 		";
 		
 	}
 	else
 	{
 		echo "
 			<script>
 			swal('Oops!', 'Unable to Delete..!!', 'error');
 		</script>
 		";

 	}
		
	
}

?>
<!-- update-------------------------------------- -->
