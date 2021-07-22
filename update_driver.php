
<!DOCTYPE html>
<html>
<head>
	<title>Update Vehicle</title>
	<style type="text/css">
		*{margin:0;padding:0;box-sizing: border-box;}
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
		.updatediv
		{
			border:1px solid black;
		}
		.updatediv_content
		{
		
			width:100%;
			

			box-shadow: 1px 5px 10px 2px grey;

		}
		.update_head
		{
			background-color: orange;
		}
		.update_head label,span
		{
			font-size: 30px;
			width:150px;
		}

		
		

		
		#highlight
		{
			background-color: orange;
		}
		
	


	</style>
</head>
<body>
				<div class="update">
				<h2>Update Vehicle Details </h2>
				<img id="up" src="images/arr.png">
				<img id="down" src="images/arr.png">

			</div>
				<!--  -->
				<div class="updatediv">
						<div class="updatediv_content">
							<div class="update_head">
								<?php
								include 'connection.php';
								$UpdateIds=$_GET['id'];
								$display_query="select *from driver_register where id='$UpdateIds'";
								$prepare_dis=mysqli_query($con,$display_query);
								$check=mysqli_fetch_array($prepare_dis);


								?>
								<label>Vehicle ID:</label>
								<span><?php echo $check['id'];?></span>
							</div>
						<form action="" method="post" enctype="multipart/form-data">
							<label>Name:</label>
							<input  name="update_name" value="<?php echo $check['Name'];?> ">
							<!-- <img src="images/bg1.png"> -->
							<label>ContactNo:</label>
							<input name="update_contact"  value="<?php echo $check['ContactNo'];?> "> <br>
							<label>Email:</label>
							<input  name="update_email" value="<?php echo $check['Email'];?> "> 
							<label>DriverType:</label>
							<input  name="update_drivertype" value="<?php echo $check['DriverType'];?> "> 
							<label>Experience:</label>
							<input  name="update_exp" value="<?php echo $check['Experience'];?> "> <br>
							<label>Salary:</label>
							<input  name="update_salary" value="<?php echo $check['Salary'];?> "> 
							<label>DL_Number:</label>
							<input name="update_dlno"  value="<?php echo $check['DL_Number'];?> ">
							<label>License Type:</label>
							<input  name="update_licensetype" value="<?php echo $check['License_Type'];?> "> <br>
							<label>License Issued Date:</label>
							<input  name="update_license_start" value="<?php echo $check['License_Issued'];?> "> 
							
							<label>License Expiry Date:</label>
							<input  name="update_license_end" value="<?php echo $check['License_Expiry'];?> "> 
							<br>
							<!-- <input type="file" name="update_img" value="<?php echo $check['Pic'];?>"><br> -->
							<input type="submit" name="update"value="Update" >

							<!-- <a href="Reservation?id=<?php echo $check['id']?>">Book Now</a> -->
						</form>
						</div>
		
						
					

				</div>

</body>
</html>
<?php
include 'connection.php';
if(isset($_POST['update']))
{
	$UpdateId=$_GET['id'];
	$Update_Name=$_POST['update_name'];
	$Update_Contact=$_POST['update_contact'];
	$Update_Email=$_POST['update_email'];
	$Update_DriverType=$_POST['update_drivertype'];
	$Update_Experience=$_POST['update_exp'];
	$Update_Salary=$_POST['update_salary'];
	$Update_DL_Number=$_POST['update_dlno'];
	$Update_LicenseType=$_POST['update_licensetype'];
	$Update_License_start=$_POST['update_license_start'];
	$Update_License_end=$_POST['update_license_end'];
	/*$Update_Img=$_POST['update_img'];*/

	$update_query="update driver_register set Name='$Update_Name',ContactNo='$Update_Contact',Email='$Update_Email',DriverType='$Update_DriverType',Experience='$Update_Experience',Salary='$Update_Salary',DL_Number='$Update_DL_Number',License_Type='$Update_LicenseType',License_Issued='$Update_License_start',License_Expiry='$Update_License_end' where id='$UpdateId'";
	$prepare_update=mysqli_query($con,$update_query);
	if($prepare_update)
	{
		echo "<script>alert('Driver Updated Successfully.');location.replace('Driver.php');</script>";

	}
	else
	{
		echo "<script>alert('Failed.');</script>";
	}

}

?>



