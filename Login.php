<?php
session_start();

?>
<!DOCTYPE html>
<html>
<head>
	<title></title>
	 <meta charset="UTF-8">
     <meta name="viewport" content="width=device-width, initial-scale=1.0">
 	 <meta http-equiv="X-UA-Compatible" content="ie=edge">
	 	<link href="https://unpkg.com/tailwindcss@^1.0/dist/tailwind.min.css" rel="stylesheet">

</head>
<body>
	<header class="text-gray-700 body-font">
  <div style ="box-shadow: 1px 1px 20px 1px grey;" class="container-fluid  bg-yellow-500 mx-auto flex flex-wrap p-5 flex-col md:flex-row items-center">
    <a class="flex title-font font-medium items-center text-gray-900 mb-4 md:mb-0">
      <!-- <svg xmlns="http://www.w3.org/2000/svg" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" class="w-10 h-10 text-white p-2 bg-indigo-500 rounded-full" viewBox="0 0 24 24"> -->
      	<img style="width: 150px;"src="images/logos.png">
        <path d="M12 2L2 7l10 5 10-5-10-5zM2 17l10 5 10-5M2 12l10 5 10-5"></path>
      </svg>
     <!--  <span class="ml-3 text-xl">SK Travels</span> -->
    </a>
    <nav class="md:ml-auto flex flex-wrap items-center text-base justify-center">
      <a href="index.php"class="mr-5 hover:text-orange-500"><b>Home</b></a>
      <a class="mr-5 hover:text-gray-900"><b>Services</b></a>
      <a class="mr-5 hover:text-gray-900"><b>Bookings</b></a>
      <a class="mr-5 hover:text-gray-900"><b>AboutUs</b></a>
       <a class="mr-5 hover:text-gray-900"><b>ContactUs</b></a>
    </nav>
    <button class="inline-flex items-center bg-orange-400 border-0 py-1 px-3 mr-3 focus:outline-none hover:bg-gray-300 rounded text-base mt-4 md:mt-0"><b><a href="Login.php"><a href="Login.php">Login</a></b>
      <!-- <svg fill="fill" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" class="w-4 h-4 ml-1" viewBox="0 0 24 24"> -->
        <path d="M5 12h14M12 5l7 7-7 7"></path>
      </svg>
    </button>
     <button class="inline-flex items-center bg-orange-400 border-0 py-1 px-3 focus:outline-none hover:bg-gray-300 rounded text-base mt-4 md:mt-0"><b><a href="register.php">Register</a></b>
    <!--   <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" class="w-4 h-4 ml-1" viewBox="0 0 24 24"> -->
        <path d="M5 12h14M12 5l7 7-7 7"></path>
      </svg>
    </button>
  </div>
	<section class="text-gray-700 body-font">
  <div class="container px-5 py-24 mx-auto flex flex-wrap items-center">
    <div class="lg:w-3/5 md:w-1/2 md:pr-16 lg:pr-0 pr-0">
     <!--  <h1 class="title-font font-medium text-3xl text-gray-900">Slow-carb next level shoindcgoitch ethical authentic, poko scenester</h1>
      <p class="leading-relaxed mt-4">Poke slow-carb mixtape knausgaard, typewriter street art gentrify hammock starladder roathse. Craies vegan tousled etsy austin.</p> -->
      <div class="rounded-lg  overflow-hidden">
        		 <img alt="content" class="object-cover object-center h-full w-full" src="https://source.unsplash.com/1600x900/?trip,travels">
     			 </div>
    </div>

    <div class="lg:w-2/6 md:w-1/2 bg-yellow-500 rounded-lg p-8 flex flex-col md:ml-auto w-full mt-10 md:mt-0">
      <h2 class="text-gray-900 text-lg font-medium title-font mb-5">Sign in</h2>
      <form action="<?php echo htmlentities($_SERVER['PHP_SELF']);?>" method="post">
      <input class="bg-white rounded border border-gray-400 focus:outline-none focus:border-orange-500 text-base px-4 py-2 mb-4" name="loginemail"placeholder="Email" type="Email">
      <input class="bg-white rounded border border-gray-400 focus:outline-none focus:border-orange-500 text-base px-4 py-2 mb-4" name="loginpassword"placeholder="Password" type="Password"><br>
        <input class="text-white bg-orange-500 border-0 py-2 px-8 focus:outline-none hover:bg-orange-600 rounded text-lg" name="login"  type="submit"value="Sign in">
    </form>
     <!--  <button class="text-white bg-orange-500 border-0 py-2 px-8 focus:outline-none hover:bg-orange-600 rounded text-lg"><b>Sign in</b></button> -->
    </div>
  </div>
</section>
</header>

</body>
</html>
<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>

<?php

include 'connection.php';
if(isset($_POST['login']))
{
	$LoginEmail=$_POST['loginemail'];
	$LoginPassword=$_POST['loginpassword'];
	$search="select *from register where Email='$LoginEmail'";
	$prepare_search=mysqli_query($con,$search);
	$logincount=mysqli_num_rows($prepare_search);
	if($logincount)
	{
		$label=mysqli_fetch_assoc($prepare_search);
		$password_search=$label['Password'];
		$_SESSION['username']=$label['Name'];
		$_SESSION['useremail']=$label['Email'];
		$_SESSION['userpass']=$label['Password'];
		$_SESSION['usercontact']=$label['ContactNo'];
		if($LoginPassword===$password_search)
		{
			?>
			<script>
				 
				swal("Hurray..!!!", "Login Successful..", "success");
				/*alert("Success..!!!!");*/
				location.replace('CustomerDashboard.php');

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
