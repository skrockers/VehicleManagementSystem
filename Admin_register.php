<?php
session_start();

?>
<!DOCTYPE html>
<html>
<head>
	<title>Admin</title>

	<link href="https://fonts.googleapis.com/css2?family=Acme&display=swap" rel="stylesheet">
	<style type="text/css">
		*
		{
			margin:0;
			padding:0;
			box-sizing: border-box;
			font-family: 'Acme', sans-serif;

		}
		.register
{
	width:500px;
	height: 540px;
	/*border: 1px solid black;*/
	background-color: white;
	position: relative;
	top:50px;
	left:30%;
	display: flex;
	/*transform: translate(-50%,-50%);*/
	border-radius: 20px;
	background-image: url('images/login3.png');
	background-size: cover;
	box-shadow: 5px 5px 10px 10px rgba(0, 0, 0,0.3);;
}
#regclose
{
	position: relative;
	border-radius: 100px 100px;
	padding: 5px;
	left: 95%;
	top:2%;
	cursor: pointer;
}
.register span:hover
{
	background-color: red;

}
.register h1
{
	width:200px;
	text-align: center;
	color: #ff8c00;
	text-shadow: 1px 1px black;
	font-size: 30px;
}
.register input
{
	width:250px;
	display: flex;
	margin:10px auto;
	height: 30px;
	font-size: 15px;

}
.register label
{
position: relative;



}
.register form
{
	position: relative;
	top:10%;
}
.register input[type='submit']
{
	width:100px;
	font-size: 20px;
	border-radius: 10px;
	background-color: #ff8c00;
	border:none;
	outline: none;
	box-shadow: 1px 1px 15px 1px grey;
	cursor: pointer;
	text-align: center;
}
#newlogin
{
	text-align: center;
	margin-top: 10px;
}
#clickregister
{
	text-decoration: underline;
	color:blue;
	cursor: pointer;
}


	</style>
</head>
<body>
		
			<div class="register">
			
				<h1>Admin New Account</h1><br>
				<form action="" method="post">
				<label for="name">Name</label>
				<input type="text"name="adminname"placeholder="Name"required>
				<label for="email">Email</label>
				<input type="email"name="adminemail"placeholder="Email"required>
				<label for="">Password</label>
				<input type="password"name="adminpassword"placeholder="Password"required>
				<label for="">Confirm-Password</label>
				<input type="password"name="adminconfirm"placeholder="Confirm-Password"required>
				<label for="">Contact No.</label>
				<input type="number"name="admincontact"placeholder="Contact No."required>
				<input type="submit" name="adminregister"value="Register">
				<h5 id="newlogin">OR</h5>
				<h4 id="newlogin">Already have a Account.<a href="AdminLogin.php" id="clicklogin">Login</a></h4>
				</form>
		</div>

</body>
</html>
<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
<?php
 include 'connection.php';
 if(isset($_POST['adminregister']))
 {
 	$AdName=$_POST['adminname'];
 	$AdEmail=$_POST['adminemail'];
 	$AdPassword=$_POST['adminpassword'];
 	$AdConfirm=$_POST['adminconfirm'];
 	$AdContactNo=$_POST['admincontact'];
 	$emailsearch="select * from admin_register where Email='$AdEmail'";
 	$prepare_email=mysqli_query($con,$emailsearch);
 	$emailcount=mysqli_num_rows($prepare_email);

 	$contactsearch="select *from admin_register where ContactNo='$AdContactNo'";
 	$prepare_contact=mysqli_query($con,$contactsearch);
 	$contactcount=mysqli_num_rows($prepare_contact);
 	if($emailcount>0)
 	{
 		?>
 		<script>
 			swal("Oops!", "Email already exists!", "error");
 		</script>
 		<?php
 	}
  /*if($contactcount>0)
 	{
 		?>
 		<script>
 			swal("Oops!", "ContactNo already exists!", "error");
 		</script>
 		<?php

 	}*/

 	 
 	else
 	{
 		if($AdPassword===$AdConfirm)
 		{
 			$insertquery="insert into admin_register(Name,Email,Password,Confirm_Password,ContactNo)values('$AdName','$AdEmail','$AdPassword','$AdConfirm','$AdContactNo')";
 			$prepare_insert=mysqli_query($con,$insertquery);
 			if($prepare_insert)
 			{
 					?>

 					<script>
 					swal("Great!", "Your Account created successfully!", "success");

 					</script>
 					<?php

 			}
 			else
 			{
 				?>
 					<script>
 					swal("Oops!", "Account failed to create", "error");
 					</script>
 					<?php

 			}

 		}
 		else
 		{
 			?>
 					<script>
 					swal("Oops!", "Password not matching..", "error");
 					</script>
 					<?php

 		}

 	}

 }

?>