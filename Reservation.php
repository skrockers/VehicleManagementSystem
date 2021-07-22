<?php
session_start();
if(!isset($_SESSION['username']))
{
  header('location:index.php');

}
?>
<!DOCTYPE html>
<html lang="en">
   <head>
      <meta charset="UTF-8">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <meta http-equiv="X-UA-Compatible" content="ie=edge">
      <title>Reservation</title>
      <meta name="author" content="name">
      <meta name="description" content="description here">
      <meta name="keywords" content="keywords,here">
      <link href="https://unpkg.com/tailwindcss/dist/tailwind.min.css" rel="stylesheet">
      <!--Replace with your tailwind.css once created-->
      <link href="https://afeld.github.io/emoji-css/emoji.css" rel="stylesheet">
      <!--Totally optional :) -->
      <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css" integrity="sha384-oS3vJWv+0UjzBfQzYUhtDYW+Pj2yciDJxpsK1OYPAYjqT085Qq/1cq5FLXAZQ7Ay" crossorigin="anonymous">
   </head>
   
   <body class="bg-gray-100 font-sans leading-normal tracking-normal">
      <header class="text-gray-700 body-font">
         <div style ="box-shadow: 1px 1px 20px 1px grey;" class="container-fluid  bg-yellow-500 mx-auto flex flex-wrap p-8 flex-col md:flex-row items-center">
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
      <button class="inline-flex items-center bg-orange-400 border-0 py-1 px-3 focus:outline-none hover:bg-gray-300 rounded text-base mt-4 md:mt-0"><b><a href="Logout.php"><a href="Login.php">Logout</a></b>
      <!-- <svg fill="fill" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" class="w-4 h-4 ml-1" viewBox="0 0 24 24"> -->
   <path d="M5 12h14M12 5l7 7-7 7"></path>
</svg>
</button>

</div>
<div class="flex md:flex-row-reverse flex-wrap">
<!--Main Content-->
<div class="w-full md:w-4/5 bg-gray-100">
	<h1><b>Welcome,<?php echo $_SESSION['username']?></b></h1>
   
<div class="container bg-red-500 mb-20 pt-16 px-6">




<form action="" method="post">
      <section class="text-black-500 body-font">
  <div class="container px-5 py-10 mx-auto  bg-yellow-500">
    <!-- <div class="flex flex-col text-center w-full mb-12">
      <h1 class="sm:text-3xl text-2xl font-medium title-font mb-4 text-gray-900">Master Cleanse Reliac Heirloom</h1>
      <p class="lg:w-2/3 mx-auto leading-relaxed text-base">Whatever cardigan tote bag tumblr hexagon brooklyn asymmetrical gentrify, subway tile poke farm-to-table. Franzen you probably haven't heard of them man bun deep.</p>
    </div> -->
    <?php
               include 'connection.php';
               $fetch_id=$_GET['id'];
               $query="select *from car_register where id='$fetch_id'";
               $prepare_select=mysqli_query($con,$query);
               $array_data=mysqli_fetch_array($prepare_select);
               ?>
    <h2 class="text-gray-900"><b>Car Details:</b></h2>
    <div class="flex lg:w-2/3 w-full sm:flex-row flex-col mx-auto px-8 sm:px-0 ">
     <label class="text-gray-900"><b>CarName:</b></label>
      <input class=" flex-grow w-full  bg-white rounded border border-gray-400 focus:outline-none focus:border-indigo-500 text-base px-4 py-2 mr-4 mb-4 sm:mb-0 " readonly type="text" value="<?php echo $array_data['Name']?>" name="carname">
      <label class="text-gray-900"><b>Model:</b></label>
      <input class="flex-grow w-full  bg-white rounded border border-gray-400  focus:outline-none focus:border-indigo-500 text-base px-4 py-2 mr-4 mb-4 sm:mb-0" readonly  type="email" value="<?php echo $array_data['Model']?>"name="model">
    </div><br>
     <div class="flex lg:w-2/3 w-full sm:flex-row flex-col mx-auto px-8 sm:px-0">
      <label class="text-gray-900"><b>No.of Seats:</b></label>
      <input class="flex-grow w-full  bg-white rounded border border-gray-400  focus:outline-none focus:border-indigo-500 text-base px-4 py-2 mr-4 mb-4 sm:mb-0" readonly type="text" value="<?php echo $array_data['Seats']?>"name="seats">
      <label class="text-gray-900"><b>Fuel:</b></label>
      <input class="flex-grow w-full  bg-white rounded border border-gray-400  focus:outline-none focus:border-indigo-500 text-base px-4 py-2 mr-4 mb-4 sm:mb-0" readonly type="email" value="<?php echo $array_data['Fuel']?>"name="fuel">
    </div><br>
     <div class="flex lg:w-2/3 w-full sm:flex-row flex-col mx-auto px-8 sm:px-0">
      <label class="text-gray-900"><b>Rate:</b></label>
      <input class="flex-grow w-full  bg-white rounded border border-gray-400  focus:outline-none focus:border-indigo-500 text-base px-4 py-2 mr-4 mb-4 sm:mb-0" readonly type="text" value="<?php echo $array_data['Rate']?>"name="rate">
      <label class="text-gray-900"><b>Driver Allowance /Day:</b></label>
      <input class="flex-grow w-full  bg-white rounded border border-gray-400  focus:outline-none focus:border-indigo-500 text-base px-4 py-2 mr-4 mb-4 sm:mb-0" readonly  type="email" value="<?php echo $array_data['Driver']?>"name="driver">
    </div>
  </div>
</section>

      <section class="text-gray-700 body-font">
  <div class="container px-5 py-1 mx-auto  bg-orange-400">
    <!-- <div class="flex flex-col text-center w-full mb-12">
      <h1 class="sm:text-3xl text-2xl font-medium title-font mb-4 text-gray-900">Master Cleanse Reliac Heirloom</h1>
      <p class="lg:w-2/3 mx-auto leading-relaxed text-base">Whatever cardigan tote bag tumblr hexagon brooklyn asymmetrical gentrify, subway tile poke farm-to-table. Franzen you probably haven't heard of them man bun deep.</p>
    </div> -->
    <h2 class="text-gray-900"><b>Passenger Details:</b></h2>
    <div class="flex lg:w-2/3 w-full sm:flex-row flex-col mx-auto px-8 sm:px-0 ">
      <label class="text-gray-900"><b>Name:</b></label>
      <input class="flex-grow w-full bg-gray-100 rounded border border-gray-400 focus:outline-none focus:border-indigo-500 text-base px-4 py-2 mr-4 mb-4 sm:mb-0" placeholder="Name" type="text"name="passname">
      <label class="text-gray-900"><b>ContactNo:</b></label>
      <input class="flex-grow w-full bg-gray-100 rounded border border-gray-400 focus:outline-none focus:border-indigo-500 text-base px-4 py-2 mr-4 mb-4 sm:mb-0" placeholder="ContactNo" type="number"name="contact">
    </div><br>
     <div class="flex lg:w-2/3 w-full sm:flex-row flex-col mx-auto px-8 sm:px-0">
      <label class="text-gray-900"><b>Email:</b></label>
      <input class="flex-grow w-full bg-gray-100 rounded border border-gray-400 focus:outline-none focus:border-indigo-500 text-base px-4 py-2 mr-4 mb-4 sm:mb-0" placeholder="Email" type="email"name="email">
      
    </div><br>
    
  </div>
</section>


     <section class="text-gray-700 body-font">
  <div class="container px-5 py-10 mx-auto bg-yellow-500">
    <!-- <div class="flex flex-col text-center w-full mb-12">
      <h1 class="sm:text-3xl text-2xl font-medium title-font mb-4 text-gray-900">Master Cleanse Reliac Heirloom</h1>
      <p class="lg:w-2/3 mx-auto leading-relaxed text-base">Whatever cardigan tote bag tumblr hexagon brooklyn asymmetrical gentrify, subway tile poke farm-to-table. Franzen you probably haven't heard of them man bun deep.</p>
    </div> -->
    <h2 class="text-gray-900"><b>Journey Details:</b></h2>
    <div class="flex lg:w-2/3 w-full sm:flex-row flex-col mx-auto px-8 sm:px-0 ">
      <label class="text-gray-900"><b>From:</b></label>
      <input class="flex-grow w-full bg-gray-100 rounded border border-gray-400 focus:outline-none focus:border-indigo-500 text-base px-4 py-2 mr-4 mb-4 sm:mb-0" placeholder="From" type="text"name="from">
      <label class="text-gray-900"><b>Destination:</b></label>
      <input class="flex-grow w-full bg-gray-100 rounded border border-gray-400 focus:outline-none focus:border-indigo-500 text-base px-4 py-2 mr-4 mb-4 sm:mb-0" placeholder="Destination" type="text"name="to">
    </div><br>
     <div class="flex lg:w-2/3 w-full sm:flex-row flex-col mx-auto px-8 sm:px-0">
      <label class="text-gray-900"><b>Date:</b></label>
      <input class="flex-grow w-full bg-gray-100 rounded border border-gray-400 focus:outline-none focus:border-indigo-500 text-base px-4 py-2 mr-4 mb-4 sm:mb-0" placeholder="Full Name" type="date"name="jdate">
      <label class="text-gray-900"><b>ReturnDate:</b></label>
      <input class="flex-grow w-full bg-gray-100 rounded border border-gray-400 focus:outline-none focus:border-indigo-500 text-base px-4 py-2 mr-4 mb-4 sm:mb-0" placeholder="Email" type="date"
      name="rdate">
    </div><br>
     <div class="flex lg:w-2/3 w-full sm:flex-row flex-col mx-auto px-8 sm:px-0">
      <label class="text-gray-900"><b>No. of Days:</b></label>
      <input class="flex-grow w-full bg-gray-100 rounded border border-gray-400 focus:outline-none focus:border-indigo-500 text-base px-4 py-2 mr-4 mb-4 sm:mb-0" placeholder="No. of Days" type="number"name="count">

      <input class="flex-grow w-auto bg-orange-500 rounded border border-gray-400 focus:outline-none focus:border-indigo-500 text-base px-4 py-2 mr-4 mb-4 sm:mb-0" value="Book Now" type="submit"name="book">
    </div>

  </div>

</section>

</form>

	

<!-- Content -->




<!--Sidebar-->
<div class="w-full h-auto mt-32 md:w-1/5 bg-gray-900 md:bg-gray-900 px-10 text-center fixed bottom-0 mb-6 md:pt-8 md:top-0 md:left-0 h-auto md:h-fullmd:border-r-4 md:border-gray-600">
<div class="md:relative mx-auto lg:float-right lg:px-5 ">
<ul class="list-reset flex flex-row md:flex-col text-center md:text-left">
   <!--  <img src="images/logor.png">
   <img src="images/user.png">  -->
   <!--  <h2 class="text-gray-300 m-5"><b>Welcome,Username</b></h2> -->
      <li class="mr-3 flex-1">
      <a href="CustomerDashboard.php" class="block py-1 md:py-3 pl-1 align-middle text-gray-800 no-underline hover:text-pink-500 border-b-2 border-gray-800 md:border-gray-900 hover:border-pink-500">
         <i class="fas fa-link pr-0 md:pr-3"></i>
         <span class="pb-1 md:pb-0 text-xs md:text-base text-gray-600 md:text-gray-400 block md:inline-block"><b>Dashboard</b></span>
      </a>
   </li>
   <li class="mr-3 flex-1">
      <a href="CustProfile.php" class="block py-1 md:py-3 pl-1 align-middle text-gray-800 no-underline hover:text-pink-500 border-b-2 border-gray-800 md:border-gray-900 hover:border-pink-500">
         <i class="fas fa-link pr-0 md:pr-3"></i><span class="pb-1 md:pb-0 text-xs md:text-base text-gray-600 md:text-gray-400 block md:inline-block"><b>Profile</b></span>
      </a>
   </li>
   <li class="mr-3 flex-1">
      <a href="#" class="block py-1 md:py-3 pl-1 align-middle text-gray-800 no-underline hover:text-pink-500 border-b-2 border-gray-800 md:border-gray-900 hover:border-pink-500">
         <i class="fas fa-link pr-0 md:pr-3"></i><span class="pb-1 md:pb-0 text-xs md:text-base text-gray-600 md:text-gray-400 block md:inline-block"><b>Vehicles</b></span>
      </a>
   </li>
   
   <li class="mr-3 flex-1">
      <a href="#" class="block py-1 md:py-3 pl-1 align-middle text-gray-800 no-underline hover:text-pink-500 border-b-2 border-gray-800 md:border-gray-900 hover:border-pink-500">
         <i class="fas fa-link pr-0 md:pr-3"></i><span class="pb-1 md:pb-0 text-xs md:text-base text-gray-600 md:text-gray-400 block md:inline-block"><b>Status</b></span>
      </a>
   </li>
   <li class="mr-3 flex-1">
      <a href="#" class="block py-1 md:py-3 pl-1 align-middle text-gray-800 no-underline hover:text-pink-500 border-b-2 border-gray-800 md:border-gray-900 hover:border-pink-500">
         <i class="fas fa-link pr-0 md:pr-3"></i><span class="pb-1 md:pb-0 text-xs md:text-base text-gray-600 md:text-gray-400 block md:inline-block"><b>History</b></span>
      </a>
   </li>
   <li class="mr-3 flex-1">
      <a href="#" class="block py-1 md:py-3 pl-1 align-middle text-gray-800 no-underline hover:text-pink-500 border-b-2 border-gray-800 md:border-gray-900 hover:border-pink-500">
         <i class="fas fa-link pr-0 md:pr-3"></i><span class="pb-1 md:pb-0 text-xs md:text-base text-gray-600 md:text-gray-400 block md:inline-block"><b>Logout</b></span>
      </a>
   </li>
</ul>
</div>
</div>
</div>

</header>
</body>
</html>
<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
<?php
include 'connection.php';
if(isset($_POST['book']))
{
   $Booking_Status='pending';
   $Booking_ID=uniqid();
   $Booking_Date=date("Y-m-d");
   $CarName=$_POST['carname'];
   $CarModel=$_POST['model'];
   $CarSeats=$_POST['seats'];
   $CarFuel=$_POST['fuel'];
   $CarRate=$_POST['rate'];
   $CarDriver=$_POST['driver'];
   $Pass_Name=$_POST['passname'];
   $Pass_Contact=$_POST['contact'];
   $Pass_Email=$_POST['email'];
   $Login_Email=$_SESSION['useremail'];
   $Start=$_POST['from'];
   $End=$_POST['to'];
   $Pass_Days=$_POST['count'];
   $Pass_JDate=$_POST['jdate'];
   $Pass_RDate=$_POST['rdate'];


   $insert_query="insert into reservation(Booking_id,Booking_Status,Booking_Date,Login_Email,Pass_Name,Pass_Contact,Pass_Email,Pass_Days,Start_Loc,End_Loc,Pass_JDate,Pass_RDate,Car_Name,Car_Model,Car_Seats,Car_Fuel,Car_Rate,Car_Driver)values('$Booking_ID','$Booking_Status','$Booking_Date','$Login_Email','$Pass_Name','$Pass_Contact','$Pass_Email','$Pass_Days','$Start','$End','$Pass_JDate','$Pass_RDate','$CarName','$CarModel','$CarSeats','$CarFuel','$CarRate','$CarDriver')";
   $prepare_insert=mysqli_query($con,$insert_query);
   if($prepare_insert)
   {
      echo "
       
         <script>
               swal('Great!', 'Your Booking Successfully!', 'success');

               </script>
               <script>
         location.replace('success.php');
         </script>

         ";
 
   }
   else
   {
      echo "
         <script>
            swal('Oops..!!!', 'RequestError..', 'error');
         </script>


         ";

   }

}
?>

