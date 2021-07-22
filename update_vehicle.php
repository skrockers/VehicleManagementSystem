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
								$UpdateId=$_GET['id'];
								$display_query="select *from car_register where id='$UpdateId'";
								$prepare_dis=mysqli_query($con,$display_query);
								$check=mysqli_fetch_array($prepare_dis);


								?>
								<label>Vehicle ID:</label>
								<span><?php echo $check['id'];?></span>
							</div>
						<form action="" method="post" enctype="multipart/form-data">
						<label>Vehicle-Type:</label>
							<input  name="update_type" value="<?php echo $check['vehicle_type'];?> "> 
							<label>Name:</label>
							<input  name="update_name" value="<?php echo $check['Name'];?> ">
							<!-- <img src="images/bg1.png"> -->
							<label>Model:</label>
							<input name="update_model"  value="<?php echo $check['Model'];?> "> <br>
							<label>Seats:</label>
							<input  name="update_seats" value="<?php echo $check['Seats'];?> "> 
							<label>Rate/Kms:</label>
							<input  name="update_rate" value="<?php echo $check['Rate'];?> "> 
							<label>Driver Allowance/Day:</label>
							<input  name="update_driver" value="<?php echo $check['Driver'];?> "> <br>
							<label>Registration-No:</label>
							<input  name="update_regno" value="<?php echo $check['Registration_No'];?> "> 
							<label>Engine-No:</label>
							<input name="update_engno"  value="<?php echo $check['Engine_No'];?> ">
							<label>Insurance:</label>
							<input  name="update_ins" value="<?php echo $check['Insurance'];?> "> <br>
							<label>Insurance Start Date:</label>
							<input  name="update_ins_start" value="<?php echo $check['Insurance_Start'];?> "> 
							
							<label>Insurance Expiry Date:</label>
							<input  name="update_ins_end" value="<?php echo $check['Insurance_Expiry'];?> "> 
							<label>Fuel:</label>
							<input  name="update_fuel" value="<?php echo $check['Fuel'];?> "> 
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
	$Update_Type=$_POST['update_type'];
	$Update_Name=$_POST['update_name'];
	$Update_Model=$_POST['update_model'];
	$Update_Seats=$_POST['update_seats'];
	$Update_Rate=$_POST['update_rate'];
	$Update_Driver=$_POST['update_driver'];
	$Update_RegNo=$_POST['update_regno'];
	$Update_EngNo=$_POST['update_engno'];
	$Update_Ins=$_POST['update_ins'];
	$Update_Ins_start=$_POST['update_ins_start'];
	$Update_Ins_end=$_POST['update_ins_end'];
	$Update_Fuel=$_POST['update_fuel'];
	/*$Update_Img=$_POST['update_img'];*/

	$update_query="update car_register set vehicle_type='$Update_Type',Name='$Update_Name',Model='$Update_Model',Seats='$Update_Seats',Rate='$Update_Rate',Driver='$Update_Rate',Registration_No='$Update_RegNo',Engine_No='$Update_EngNo',Insurance='$Update_Ins',Insurance_Start='$Update_Ins_start',Insurance_Expiry='$Update_Ins_end',Fuel='$Update_Fuel' where id='$UpdateId'";
	$prepare_update=mysqli_query($con,$update_query);
	if($prepare_update)
	{
		echo "<script>alert('Vehicle Updated Successfully.');location.replace('Vehicle.php');</script>";

	}
	else
	{
		echo "<script>alert('Failed.');</script>";
	}

}

?>



