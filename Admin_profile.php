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
	<title>Profile</title>
	<link href="https://fonts.googleapis.com/css2?family=PT+Sans&display=swap" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css2?family=PT+Serif+Caption&display=swap" rel="stylesheet">
	<!-- <link rel="stylesheet" type="text/css" href="design.css"> -->
	<link href="https://fonts.googleapis.com/css2?family=Acme&display=swap" rel="stylesheet">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	<style type="text/css">
		*{margin: 0;padding: 0;box-sizing: border-box;font-family: 'Acme', sans-serif;}
		.main
		{
			display: grid;
			grid-template-rows:5vh 95vh;
			grid-template-columns:20% 80%;
			/*border:1px solid black;*/
		}
		.top-header
		{
			background-color:red;
			grid-column: 1/-1;
		}
		
		.side-menu
		{
			background-color: green;
			position: fixed;
			height: 100%;
		}
		.navi
		{
			width:250px;
			height: 600px;
			/*border:1px solid white;*/
			margin:10px;

		}
		.navi img
		{
			width:250px;
			height: 180px;
		}
		#logo
		{
			width:250px;
			height: 90px;
		}
		.navi table
		{
			width:240px;
			height: 280px;
			border:1px solid black;
			border-collapse: collapse;
			margin:5px;
		}
		.navi table th
		{
			border:1px solid black;
			text-align: center;
			font-size: 20px;
			background-color: red;

			
		}
		.navi table td
		{
			border:1px solid black;
			text-align: center;
			font-size: 18px;
		}
		.navi table td:hover
		{
			background-color: orange;
		}
		.navi table td a
		{
			text-decoration: none;
			color: black;
		}
		.navi h2
		{
			text-align: center;
		}
		.content
		{
			background-color:white;
		}
		.profile
		{
			width:78.2%;
			height: 95vh;
			background-image: url('images/login3.png');
			position: absolute;
			left:270px;
		}
		.profile h1
		{
			text-align: center;
		}
		.profile-infos
		{
			width: 90%;
			position: relative;
			top:30%;
			left: 51%;
			transform: translate(-50%,-50%);
			border:1px solid black;
		}
		.profile-infos span
		{	
			width: 100px;
			font-size: 18px;
			font-weight: bold;
			display: inline-block;
			margin: 40px;
			


		}
		.profile-infos input
		{
			width: 220px;
			height: 20px;
			display: inline;
			border:none;
			font-size: 15px;
			cursor: no-drop;
			
		}
		.profile-infos button
		{
			width: 100px;
			height: 30px;
			position: relative;
			left:50%;
			transform: translate(-50%);	
		}
		#edit1
		{
			position: absolute;
			top:160px;
			left: 35%;
			margin:10px;
			color: blue;
			font-size: 14px;
			text-decoration: underline;
			cursor: pointer;

		}
		#edit2
		{
			position: absolute;
			top:160px;
			left: 77%;
			margin:10px;
			color: blue;
			font-size: 14px;
			text-decoration: underline;
			cursor: pointer;

		}
		.editdiv
		{
			width:102.5%;
			height: 95vh;
			display: none;
			background:linear-gradient(rgba(0,0,0,0.5),rgba(0,0,0,0.5));
			position: absolute;
			top:0%;
		}
		.editdiv2
		{
			width:102.5%;
			height: 95vh;
			display: none;
			background:linear-gradient(rgba(0,0,0,0.5),rgba(0,0,0,0.5));
			position: absolute;
			top:0%;
		}
		.edit-infos
		{
			width:50%;
			height: 55vh;
			background-image: url("images/login3.png");
			position: relative;
			top:50%;
			left:50%;
			transform: translate(-50%,-50%);
			border-radius: 20px;

		}
		.edit-infos label
		{
			display: flex;
			margin:5px;
		}
		.edit-infos input
		{
			width:250px;
			height: 30px;
			margin:10px;
		}
		.edit-infos input[type="text"]
		{
			cursor:no-drop;
			cursor-color:red;
		}
		.edit-infos form
		{
			width:250px;
			position: relative;
			top:45%;
			left:45%;
			transform: translate(-50%,-50%);

		}
		.edit-infos p
		{
			position: absolute;
			right:10px;
			top: 10px;
			cursor: pointer;
		}
		.edit-infos h2
		{
			text-align: center;
		}
		.confirmation
		{
			width:100%;
			height: 100vh;
			background:linear-gradient(rgba(0,0,0,0.5),rgba(0,0,0,0.5));
			position: absolute;
			display: none;
			top:0%;

		}
		.confirmation-content
		{
			width:500px;
			height: 320px;
			background-color: white;
			border-radius: 20px;
			position: absolute;
			top:50%;
			left:50%;
			transform: translate(-50%,-50%);

		}
		.confirmation-content img
		{
			position: absolute;
			left:50%;
			top:25%;
			transform: translate(-50%,-50%);
			
			

		}
		.confirmation-content h1
		{
			text-align: center;
			position: relative;

			top:150px;
		}
		.confirmation-content h3
		{
			text-align: center;
			position: relative;
			font-weight: normal;
			top:150px;
		}
		.confirmation-content button
		{
			width:100px;
			height: 40px;
			cursor: pointer;
			position: relative;
			top:60%;
			left:50%;
			font-size: 20px;
			background-color: darkgreen;
			color: white;
			border-color: darkgreen;
			transform: translate(-50%,-50%);
		}
		#highlight
		{
			background-color: orange;
		}

		.footer
		{
			background-color:pink;
			grid-column: 1/-1;
		}

		
		
	</style>
</head>
<body>
	<div class="main">
		<div class="top-header">
			
		</div>
		<div class="side-menu">
			<div class="navi">
				<img  id="logo"src="images/logor.png">
				
			
				<h2><?php echo $_SESSION['adminname']?></h2>
				<table>
					<tr>
						<th>Menu</th>
					</tr>
					<tr>
						<td ><a href="Admin_Dashboard.php">Home</a></td>
					</tr>
					<tr>
						<td id ='highlight'><a href="Admin_profile.php">Profile</a></td>
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
			<div class="profile">
				<h1>Profile</h1>
				<div class="profile-infos">
					<edit id="edit1"><i class="fa fa-pencil"></i>Change</edit>
					<edit id="edit2"><i class="fa fa-pencil"></i>Change</edit>
					<span>Name:</span>
					<input type="text" value="<?php echo $_SESSION['adminname']?>"disabled>
					
					<span>Email:</span>
					<input type="text"value="<?php echo $_SESSION['adminemail']?>"disabled><br>
					
					<span>Password:</span>
					<input type="password"value="<?php echo $_SESSION['adminpass']?>"disabled>
					
					<span>ContactNo:</span>
					<input type="text"value="<?php echo $_SESSION['admincontact']?>"disabled><br>
<!-- 						<form action="updatedp.php" method="post"enctype="multipart/form-data">
							<label>Upload Profile Photo:</label>
							<input type="file" name="dp">
							<input type="submit" name="updatepic"value="Update Profile Pic">
						</form> -->
				</div>
				<div class="editdiv">
					<div class="edit-infos">
						<h2>Change Password</h2>
						<p id="close">X</p>
						<form action="<?php echo htmlentities($_SERVER['PHP_SELF']);?>" method="post">
							<label>Current Password:</label>
							<input type="Password" name="currentpassword"required>
							<label>New Password:</label>
							<input type="Password" name="newpassword"required>
							<label>Confirm New Password:</label>
							<input type="Password" name="confirmpassword"required>
							<!-- <label>ContactNo:</label>
							<input type="number"  name="editcontact"value="<?php echo $_SESSION['usercontact']?>"disabled required> -->
							<input type="submit" id="changepwd"name="changepwd"value="Update">
						</form>
					</div>
				</div>
				<div class="editdiv2">
					<div class="edit-infos">
						<h2>Change Contact</h2>
						<p id="close2">X</p>
						<form action="<?php echo htmlentities($_SERVER['PHP_SELF']);?>" method="post">
							<label>Name:</label>
							<input type="text" name="editpassword"value="<?php echo $_SESSION['adminname']?>"required disabled>
							<label>Email:</label>
							<input type="text" name="editmail"value="<?php echo $_SESSION['adminemail']?>"required disabled>
							<label>ContactNo:</label>
							<input type="number"  name="editcontact"value="<?php echo $_SESSION['admincontact']?>" required>
							<input type="submit" name="changecontact"value="Update">
						</form>
					</div>
				</div>
				
			

			</div>

		</div>
		<!-- <div class="footer"></div> -->



	</div>
	<!-- <div class="confirmation">
					<div class="confirmation-content">
						<img src="images/ok128.png"/>
						<h1>Success..!!</h1>
						<h3>Password changed successfully.<br>Login with your new Password.</h3>
						<a href=""><button>OK</button></a>
						
						
					</div>
				</div> -->	


</body>		
</html>
<script type="text/javascript">
	document.getElementById("edit1").addEventListener("click",
		function()
		{
			document.querySelector(".editdiv").style.display="flex";
		});
	document.getElementById("close").addEventListener("click",
		function()
		{
			document.querySelector(".editdiv").style.display="none";

		});

	document.getElementById("edit2").addEventListener("click",
		function()
		{
			document.querySelector(".editdiv2").style.display="flex";
		});
	document.getElementById("close2").addEventListener("click",
		function()
		{
			document.querySelector(".editdiv2").style.display="none";

		});
</script>
<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
<?php
include 'connection.php';
if(isset($_POST['changepwd']))
{
	$CurrentPwd=$_POST['currentpassword'];
	$NewPwd=$_POST['newpassword'];
	$ConfirmPwd=$_POST['confirmpassword'];
	$Usermail=$_SESSION['adminemail'];
	$UserPwd=$_SESSION['adminpass'];
	if($UserPwd===$CurrentPwd)
	{
		if($NewPwd===$ConfirmPwd)
		{
			$update_pwd="update admin_register set Password='$NewPwd',Confirm_Password='$ConfirmPwd' where Email='$Usermail'";
			$prepare_pwd=mysqli_query($con,$update_pwd);
			if($prepare_pwd)
			{
			echo "<script> alert('Success...!!!.Password changed successfully.Please Login with your new Password.');
			location.replace('adminlogin.php'); </script>";

			}
			else
			{
			?>
			<script>
				 
				swal("Oops..!!", "Error", "error");
				/*alert("Success..!!!!");*/

			</script>
			<?php

			}


		}
		else
		{
			?>
			<script>
				 
				swal("Oops..!!", "Password not matching", "error");
				/*alert("Success..!!!!");*/

			</script>
			<?php

		}
		

	}
	else
	{
		?>
			<script>
				 
				swal("Oops..!!", "Invalid Current Password", "error");
				/*alert("Success..!!!!");*/

			</script>
			<?php

	}
	
}
?>
<?php
include 'connection.php';
if(isset($_POST['changecontact']))
{
	$Contact=$_POST['editcontact'];
	$Usermail=$_SESSION['adminemail'];
	$update_contact="update admin_register set ContactNo='$Contact' where Email='$Usermail'";
	$prepare_contact=mysqli_query($con,$update_contact);
	if($prepare_contact)
	{
		echo "<script> alert('Success..!!!!.Details has been updated successfully. Please Login Again.');location.replace('adminlogin.php');</script>";

	}
	else
	{
		echo "<script>swal('Oops..!!', 'Invalid Current Password', 'error');</script>";
	}

}
?>
