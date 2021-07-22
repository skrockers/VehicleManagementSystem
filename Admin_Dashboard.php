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
	<title>CustHome</title>
	<link rel="stylesheet" type="text/css" href="design2.css">
	<link href="https://fonts.googleapis.com/css2?family=Acme&display=swap" rel="stylesheet">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	<style>
		*
		{
			margin: 0;
			padding: 0;
			box-sizing: border-box;
		}
		.main
		{
			border:1px solid black;
			display: grid;
			grid-template-rows: 30px 95.2vh;
			grid-template-columns: 1fr 4fr;

		}
		.header
		{
			background-color: red;
			grid-column: 1/-1;
			font-size: 20px;
		}
		.side-menu
		{
			background-color: green;
			position: relative;


		}
		.content
		{
			background-image: url("images/login3.png");
			
		}
		.content h3
		{
			width:40%;
			height: 50px;
			margin:10px;
			position: relative;
			left:100px;
			font-size:40px;
			/*border:1px solid black;*/
			overflow: hidden;
		}
		
		.content p
		{
			margin:30px;
			width:60%;
			position: relative;
			line-height: 30px;
			top:30px;
		}
		.content img
		{
			width:450px;
			height: 200px;
			position: relative;
			left:20%;
			
			
		}
		.content button
		{
			width:150px;
			height: 50px;
			position: relative;
			left:44%;
			background-color: transparent;
			top:40px;
			border-radius: 20px;
			border:none;
			cursor: pointer;
			font-size: 20px;
			border:1px solid black;
			box-shadow: 0px 0px 5px 0px black;
		}
		.content button:hover
		{
			background-color: white;
			border:1px solid black;
		}
		.announcement
		{
			width:300px;
			height: 300px;
			/*border:1px solid black;*/
			position: absolute;
			right:0px;
			top:300px;
			margin: 10px;
			box-shadow: 1px 1px 5px 1px grey;
		}
		.announcement h2
		{
			text-align: center;
			color: red;

			background-color: green;

		}
		.moving-content
		{
			padding: 5px;
			height: 250px;
			text-align: center;
			
		}
		.moving-content span
		{
			line-height: 50px;
		}
		#highlight
		{
			background-color: orange;
		}
		.pendingdiv
		{
			width:250px;
			height:200px;
			/*border:1px solid black;*/
			margin:50px;
			background-color: white;
			box-shadow: 1px 1px 10px 1px grey;
		}
		.pendingdiv h2
		{
			font-size:80px;
			text-align: center;
			color:red;
		}
		.pendingdiv h1
		{
			text-align: center;
			font-size: 40px;
			font-weight: lighter;
			/*border: 1px solid black;*/
			background-color: orange;
			/*padding-bottom: 50px;*/

		}
		.pendingdiv a
		{
			text-align: center;
			color:blue;
			position: relative;
			left:50%;
		}
		.approveddiv
		{
			width:250px;
			height:200px;
			/*border:1px solid black;*/
			margin:50px;
			position: relative;
			bottom: 250px;
			left: 350px;
			background-color: white;
			box-shadow: 1px 1px 10px 1px grey;
		}
		.approveddiv h2
		{
			font-size:80px;
			text-align: center;
			color:red;
		}
		.approveddiv h1
		{
			text-align: center;
			font-size: 40px;
			font-weight: lighter;
			/*border: 1px solid black;*/
			background-color: orange;
			/*padding-bottom: 50px;*/

		}
		.approveddiv a
		{
			text-align: center;
			color:blue;
			position: relative;
			left:50%;
		}
		.completeddiv
		{
			width:250px;
			height:200px;
			/*border:1px solid black;*/
			margin:50px;
			position: relative;
			bottom: 500px;
			left: 700px;
			background-color: white;
			box-shadow: 1px 1px 10px 1px grey;
		}
		.completeddiv h2
		{
			font-size:80px;
			text-align: center;
			color:red;
		}
		.completeddiv h1
		{
			text-align: center;
			font-size: 40px;
			font-weight: lighter;
			/*border: 1px solid black;*/
			background-color: orange;
			/*padding-bottom: 50px;*/

		}
		.completeddiv a
		{
			text-align: center;
			color:blue;
			position: relative;
			left:50%;
		}
		
	</style>
</head>
<body>
	<div class="main">
		<div class="header">
		</div>
		<div class="side-menu">
			<div class="navi">
				<img  id="logo"src="images/logor.png">
				<h1 align="center"><?php echo $_SESSION['adminname'];?></h1>
				<table>
					<tr>
						<th>Menu</th>
					</tr>
					<tr>
						<td id ='highlight'><a href="Admin_Dashboard.php">Home</a></td>
					</tr>
					<tr>
						<td><a href="Admin_profile.php">Profile</a></td>
					</tr>
					<tr>
						<td><a href="Admin_Vehicle.php">Vehicles</a></td>
					</tr>
					<tr>
						<td><a href="Driver.php">Driver</a></td>
					</tr>
					<tr>
						<td><a href="Booking.php">Booking Records</a></td>
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
			<h1>Admin Dashboard</h1>
			<div class="pendingdiv">
				<?php 
				include 'connection.php';
				$pending_query="select *from reservation where Booking_Status='Pending'";
				$prepare_pending=mysqli_query($con,$pending_query);
				$count=mysqli_num_rows($prepare_pending);

				?>
				<h2><?php echo "$count";?></h2>
				<h1>Pending </h1>
				<a href="Booking.php">View</a>
				
			</div>
			<div class="approveddiv">
				<?php 
				include 'connection.php';
				$pending_query="select *from reservation where Booking_Status='Approved'";
				$prepare_pending=mysqli_query($con,$pending_query);
				$count=mysqli_num_rows($prepare_pending);

				?>
				<h2><?php echo "$count";?></h2>
				<h1>Approved </h1>
				<a href="Booking.php">View</a>
				
			</div>
			<div class="completeddiv">
				<?php 
				include 'connection.php';
				$pending_query="select *from reservation where Booking_Status='Completed'";
				$prepare_pending=mysqli_query($con,$pending_query);
				$count=mysqli_num_rows($prepare_pending);

				?>
				<h2><?php echo "$count";?></h2>
				<h1>Completed </h1>
				<a href="Booking.php">View</a>
				
			</div>

		</div>

	</div>


</body>
</html>