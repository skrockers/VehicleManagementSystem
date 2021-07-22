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
			/*display: none;*/
			margin:20px;
			background-color: transparent;
			animation-name: fadein;
			animation-duration: 2s;
			position: relative;

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
		.innerdiv form
		{
			/*	*/
			

		}
		.innerdiv input,select
		{
			display: inline-block;
			width:130px;
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
			width:120px;
			display: inline-block;
			margin:10px;
		}
		.innerdiv table
		{
			width:100%;
			border-collapse: collapse;

		}
		.innerdiv th
		{
			border:1px solid black;
			background-color: orange;
			padding:10px;
			text-align: center;

		}
		tr:hover
		{
			background-color: lightgrey;
		}
		.innerdiv td
		{
			border:1px solid black;
			text-align: center;

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
			/*display: none;*/
			margin:20px;
			background-color: transparent;
			animation-name: fadein;
			animation-duration: 2s;
			position: relative;
		}
		.innerdiv3 form
		{
			/*animation-name: fadein;
			animation-duration: 2s;
			position: relative;

		}
		*/
			

		}
		.innerdiv3 input,select
		{
			display: inline-block;
			width:130px;
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
			width:120px;
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
			/*display: none;*/
			margin:20px;
			background-color: transparent;
			animation-name: fadein;
			animation-duration: 2s;
			position: relative;
		}
		.innerdiv4 form
		{
			/*	*/
			

		}
		.innerdiv4 input,select
		{
			display: inline-block;
			width:130px;
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
			width:120px;
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
		#bookid
		{
			display: none;
		}
		

		
		#highlight
		{
			background-color: orange;
		}
		#GO
		{
			width:50px;
		}
		#myinput
		{
			width:50%;
			font-size: 18px;
		}
		#myinput1
		{
			width:50%;
			font-size: 18px;
		}
		#myinput2
		{
			width:50%;
			font-size: 18px;
		}
		.innerdiv3 table
		{
			width:100%;
			border-collapse: collapse;

		}
		.innerdiv3 th
		{
			border:1px solid black;
			background-color: orange;
			padding:10px;
			text-align: center;

		}
		tr:hover
		{
			background-color: lightgrey;
		}
		.innerdiv3 td
		{
			border:1px solid black;
			text-align: center;

		}
		#faretext
		{
			width:50%;
		}
		.innerdiv4 table
		{
			width:100%;
			border-collapse: collapse;

		}
		.innerdiv4 th
		{
			border:1px solid black;
			background-color: orange;
			padding:10px;
			text-align: center;
			height: 50px;

		}
		tr:hover
		{
			background-color: lightgrey;
		}
		.innerdiv4 td
		{
			height: 40px;
			border:1px solid black;
			text-align: center;

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
						<td ><a href="Admin_Vehicle.php">Vehicles</a></td>
					</tr>
					<tr>
						<td><a href="Driver.php">Driver</a></td>
					</tr>
					<tr>
						<td ><a href="Booking.php">Booking Records</a></td>
					</tr>
					<tr>
						<td id="highlight"><a href="Generate_Report.php">Generate Records</a></td>
					</tr>
					<tr>
						<td><a href="admin_logout.php">Logout</a></td>
					</tr>
				</table>
				
			</div>
		</div>
		<div class="content">
			<div class="sub-content">
				<h1>Generate Monthly Reports</h1>
				<div id="heading">
				<h2>Generate Booking Reports </h2>
				<img  id="plus" src="images/arr.png">
				<img id="minus" src="images/arr.png">
				</div>
				<div class="innerdiv">
					
					
					<form method="post">
						<label>Enter Start Date:</label>
						<input type="date" name="start">
						<label>Enter End Date:</label>
						<input type="date" name="end">
						<input type="submit" name="report">
						<input type="submit" name=""value="Clear">
					</form>
						<?php
					include 'connection.php';
					if(isset($_POST['report']))
					{
						$txtstart=$_POST['start'];
						$txtend=$_POST['end'];
						$query="select *from reservation where Booking_Date between '$txtstart' and '$txtend' and Booking_Status='Completed'";
						$prepare_query=mysqli_query($con,$query);
					?>
					 <p>Showing results- &emsp;from:&emsp;&emsp;<?php echo "$txtstart";?>&emsp;&emsp; To:&emsp;&emsp;<?php echo "$txtend";?> </p>
					
					<table>

						<tr>
							<th>Booking ID:</th>
							<th>Booking Status:</th>
							<th>Booking Date:</th>
							<th>Fare:</th>
						</tr>

						<?php 
						$total=0;
						while($fetch=mysqli_fetch_array($prepare_query))
						{
							$sum=$fetch['TotalFare'];
							?>
							<tr>
							<td><?php echo $fetch['Booking_id']?></td>
							<td><?php echo $fetch['Booking_Status']?></td>
							<td><?php echo $fetch['Booking_Date']?></td>
							<td><?php echo $fetch['TotalFare']?></td>
						</tr>
							<?php
							$total+=$sum;
						}
					?>
					<tr>
						<th colspan="3">Total</th>
						<td><?php echo "$total";?></td>
					</tr>
					<?php
						}
					?>
						
					</table>
				</div><br>
				<div id="heading">
				<h2>Generate Fuel Reports </h2>
				<img  id="plus3" src="images/arr.png">
				<img id="minus3" src="images/arr.png">
				</div>
				<div class="innerdiv3">
						<form method="post">
						<label>Enter Start Date:</label>
						<input type="date" name="start">
						<label>Enter End Date:</label>
						<input type="date" name="end">
						<input type="submit" name="fuelreport">
						<input type="submit" name=""value="Clear">
					</form>
						<?php
					include 'connection.php';
					if(isset($_POST['fuelreport']))
					{
						$txtstart=$_POST['start'];
						$txtend=$_POST['end'];
						$query="select *from FuelDetails where Fuel_Date between '$txtstart' and '$txtend'";
						$prepare_query=mysqli_query($con,$query);
					?>
					 <p>Showing results- &emsp;from:&emsp;&emsp;<?php echo "$txtstart";?>&emsp;&emsp; To:&emsp;&emsp;<?php echo "$txtend";?> </p>
					
					<table>

						<tr>
							<th>Fuel_Station_Name</th>
							<th>Fuel_Date</th>
							<th>Fuel_Quantity</th>
							<th>Fuel_Station_Location</th>
							<th>Fuel_Type</th>
							<th>Fuel_Cost</th>
						</tr>

						<?php 
						$total=0;
						while($fetch=mysqli_fetch_array($prepare_query))
						{
							$sum=$fetch['Fuel_Cost'];
							?>
							<tr>
							<td><?php echo $fetch['Fuel_Station_Name']?></td>
							<td><?php echo $fetch['Fuel_Date']?></td>
							<td><?php echo $fetch['Fuel_Quantity']?></td>
							<td><?php echo $fetch['Fuel_Station_Location']?></td>
							<td><?php echo $fetch['Fuel_Type']?></td>
							<td><?php echo $fetch['Fuel_Cost']?></td>
						</tr>
							<?php
							$total+=$sum;
						}
					?>
					<tr>
						<th colspan="5">Total</th>
						<td><?php echo "$total";?></td>
					</tr>
					<?php
						}
					?>
						
					</table>
					
				</div><br>
				<div id="heading">
				<h2>Generate Repair Reports </h2>
				<img  id="plus4" src="images/arr.png">
				<img id="minus4" src="images/arr.png">
				</div>
				<div class="innerdiv4">
					<form method="post">
						<label>Enter Start Date:</label>
						<input type="date" name="start">
						<label>Enter End Date:</label>
						<input type="date" name="end">
						<input type="submit" name="repairreport">
						<input type="submit" name=""value="Clear">
					</form>
						<?php
					include 'connection.php';
					if(isset($_POST['repairreport']))
					{
						$txtstart=$_POST['start'];
						$txtend=$_POST['end'];
						$query="select *from maintenance where Repair_Date between '$txtstart' and '$txtend'";
						$prepare_querys=mysqli_query($con,$query);
					?>
					 <p>Showing results- &emsp;from:&emsp;&emsp;<?php echo "$txtstart";?>&emsp;&emsp; To:&emsp;&emsp;<?php echo "$txtend";?> </p>
					
					<table>

						<tr>
							<th> Driver_Name</th>
							<th>Garage_Name</th>
							<th>Repair_Date</th>
							<th>Description</th>
							<th>Repair_Cost</th>
						</tr>

						<?php 
						$total=0;
						while($fetch=mysqli_fetch_array($prepare_querys))
						{
							$sum=$fetch['Repair_Cost'];
							?>
							<tr>
							<td><?php echo $fetch['Driver_Name']?></td>
							<td><?php echo $fetch['Garage_Name']?></td>
							<td><?php echo $fetch['Repair_Date']?></td>
							<td><?php echo $fetch['Description']?></td>
							<td><?php echo $fetch['Repair_Cost']?></td>
						</tr>
							<?php
							$total+=$sum;
						}
					?>
					<tr>
						<th colspan="4">Total</th>
						<td><?php echo "$total";?></td>
					</tr>
					<?php
						}
					?>
						
					</table>
					
				</div>
			</div>
		
		</div>

</body>
</html>
<script type="text/javascript">
	document.getElementById('plus').addEventListener("click",
		function()
		{
			document.querySelector('.innerdiv').style.display="block";
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
	
	/*-------------------------------------------------------------------*/
	document.getElementById('plus3').addEventListener("click",function(){
			document.querySelector('.innerdiv3').style.display="block";
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
<!-- ------------------------------------------------------------------------ -->
<?php 
include 'connection.php';

if(isset($_POST['update_status']))
{
	$Status=$_POST['status'];
	$Book=$_POST['book'];

	$updatequery="update reservation set Booking_Status='$Status' where Booking_id='$Book'";

	$prepare_update=mysqli_query($con,$updatequery);

	if($prepare_update)
	{
		?>
		<script>
			alert("Success");
			location="Booking.php";
		</script>
		<?php

	}
	else
	{
		?>
		<script>
			alert("Failed");
		</script>
		<?php
	}

}


?>
<!-- --------------------------------------------------------------------------- -->
<?php
include 'connection.php';
if(isset($_POST['fareamount']))
{
	
	$Book=$_POST['book'];
	$Fare=$_POST['fare'];
	$Status=$_POST['status'];
	$insertion="update reservation set Booking_Status='$Status',TotalFare='$Fare' where Booking_id='$Book'";
	$prepare_insertion=mysqli_query($con,$insertion);
	if($prepare_insertion)
	{
		?>
		<script type="text/javascript">
			alert("Success");
			location="Booking.php";
		</script>
		<?php
	}
	else
	{
		?>
		<script type="text/javascript">
			alert("Failed");
		</script>
		<?php
	}

}

?>
<script type="text/javascript">
	
	/*const search=() =>*/
	function search()
	{
		let filter=document.getElementById('myinput').value.toUpperCase();
		let mytable=document.getElementById('mytable');
		let tr=mytable.getElementsByTagName('tr');
		for(var i=0; i<tr.length;i++)
		{
			let td=tr[i].getElementsByTagName('td')[0];
			if(td)
			{
				let textvalue=td.textcontent || td.innerHTML;
				if(textvalue.toUpperCase().indexOf(filter) > -1)
				{
					tr[i].style.display="";
				}
				else
				{
					tr[i].style.display="none";
				}
			}

		}
	}
	/*------------------------------------------------------*/
	function search1()
	{
		let filter=document.getElementById('myinput1').value.toUpperCase();
		let mytable=document.getElementById('mytable1');
		let tr=mytable.getElementsByTagName('tr');
		for(var i=0; i<tr.length;i++)
		{
			let td=tr[i].getElementsByTagName('td')[0];
			if(td)
			{
				let textvalue=td.textcontent || td.innerHTML;
				if(textvalue.toUpperCase().indexOf(filter) > -1)
				{
					tr[i].style.display="";
				}
				else
				{
					tr[i].style.display="none";
					
				}
			}
			else
			{

			}

		}
	}
	/*----------------------------------------------------------------------*/
	function search2()
	{
		let filter=document.getElementById('myinput2').value.toUpperCase();
		let mytable=document.getElementById('mytable2');
		let tr=mytable.getElementsByTagName('tr');
		for(var i=0; i<tr.length;i++)
		{
			let td=tr[i].getElementsByTagName('td')[0];
			if(td)
			{
				let textvalue=td.textcontent || td.innerHTML;
				if(textvalue.toUpperCase().indexOf(filter) > -1)
				{
					tr[i].style.display="";
				}
				else
				{
					tr[i].style.display="none";

					
				}
			}

		}
	}
</script>