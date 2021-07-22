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
		.login
{
	width:100%;
	height: 100vh;
	/*background: rgba(0, 0, 0,0.3);*/
	z-index: 2;
	display: flex;
	justify-content: center;
	align-items: center;
	position: absolute;
	top:0;
	background-color: lightgrey;

}
.login-content
{
	width:600px;
	height: 350px;
	/*border: 1px solid black;*/
	background-color: white;
	position: relative;
	border-radius: 20px;
	background-image: url('images/login3.png');
	background-size: cover;
	box-shadow: 1px 1px 10px 1px rgba(0, 0, 0,0.3);;
}
.login-content span
{
	position: relative;
	border-radius: 100px 100px;
	padding: 5px;
	left: 96%;
	top:2%;
	cursor: pointer;
}
.login-content span:hover
{
	background-color: red;

}
.login-content h1
{
	text-align: center;
	color: #ff8c00;
	text-shadow: 1px 1px black;
	font-size: 40px;
}
.login-content input
{
	width:250px;
	display: block;
	margin:10px auto;
	height: 30px;
	font-size: 15px;
}
.login-content label
{
position: relative;
left:30%;


}
.login-content form
{
	position: relative;
	top:10%;
}
.login-content input[type='submit']
{
	width:100px;
	font-size: 20px;
	border-radius: 10px;
	background-color: #ff8c00;
	border:none;
	outline: none;
	box-shadow: 5px 5px 10px 1px grey;
	cursor: pointer;
}
#newaccount
{
	text-align: center;
	margin-top: 10px;
}
#clicklogin
{
	text-decoration: underline;
	color:blue;
	cursor: pointer;

}

	</style>
</head>
<body>
		<div class="login" id="login">
			<div class="login-content">
				
				<h1>Admin Login</h1>
				<form action="" method="post">
				<label for="email">Email</label>
				<input type="email"name="adminemail"placeholder="Email"required>
				<label for="">Password</label>
				<input type="password"name="adminpassword"placeholder="Password"required>
				<input type="submit" name="adminlogin"value="Login">
				<h5 id="newaccount">OR</h5>
				<h4 id="newaccount">New Admin Registration.<a href="admin_register.php"id="clickregister">Click here</a></h4>
				</form>
			</div> 
		</div>

</body>
</html>
<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
<?php
include 'connection.php';
if(isset($_POST['adminlogin']))
{
	$Admail=$_POST['adminemail'];
	$Adpass=$_POST['adminpassword'];
	$search="select *from admin_register where Email='$Admail'";
	$prepare_search=mysqli_query($con,$search);
	$logincount=mysqli_num_rows($prepare_search);
	if($logincount)
	{
		$label=mysqli_fetch_assoc($prepare_search);
		$password_search=$label['Password'];
		$_SESSION['adminname']=$label['Name'];
		$_SESSION['adminemail']=$label['Email'];
		$_SESSION['adminpass']=$label['Password'];
		$_SESSION['admincontact']=$label['ContactNo'];
		if($Adpass===$password_search)
		{
			?>
			<script>
				 
				swal("Hurray..!!!", "Login Successful..", "success");
				location.replace('Admin_Dashboard.php');

			</script>
			<?php
			

		}
		else
		{
			?>
			<script>
				swal("Oops!", "Invalid Password..", "error");
				/*alert("Failed..!!!!");*/
			</script>
			<?php
		}

	}
	else
	{
		?>
			<script>
				swal("Oops!", "Invalid Email..", "error");
			</script>
			<?php

	}
}


?>