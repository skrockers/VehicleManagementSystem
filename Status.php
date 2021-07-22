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
      <title>Status</title>
      <meta name="author" content="name">
      <meta name="description" content="description here">
      <meta name="keywords" content="keywords,here">
      <link href="https://unpkg.com/tailwindcss/dist/tailwind.min.css" rel="stylesheet">
      <!--Replace with your tailwind.css once created-->
      <link href="https://afeld.github.io/emoji-css/emoji.css" rel="stylesheet">
      <!--Totally optional :) -->
      <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css" integrity="sha384-oS3vJWv+0UjzBfQzYUhtDYW+Pj2yciDJxpsK1OYPAYjqT085Qq/1cq5FLXAZQ7Ay" crossorigin="anonymous">
   </head>
   <style type="text/css">
     .fontsize-10
     {
      font-size: 30px;
      font-weight: bold;
      color: white;
     }
     .fontsize-3
     {
      font-size: 20px;
      font-weight: bold;
      color: white;
     }
   </style>
   
   <body class="bg-gray-100 font-sans leading-normal tracking-normal">
      <header class="text-gray-700 body-font bg">
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
      <button class="inline-flex items-center bg-orange-400 border-0 py-1 px-3 focus:outline-none hover:bg-gray-300 rounded text-base mt-4 md:mt-0"><b><a href="Logout.php"><a href="Logout.php">Logout</a></b>
      <!-- <svg fill="fill" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" class="w-4 h-4 ml-1" viewBox="0 0 24 24"> -->
   <path d="M5 12h14M12 5l7 7-7 7"></path>
</svg>
</button>

</div>




<div class="flex md:flex-row-reverse flex-wrap">
<!--Main Content-->
<div class="w-full md:w-4/5 bg-gray-100">
  <h1><b>Welcome,<?php echo $_SESSION['username']?></b></h1>
<div class="container bg-red-500 mb-20 pt-16 px-6 py-20">



<section class="text-black-700 body-font">
  <h1 class="fontsize-10">Pending Status:</h1>
  <div class="container">
    <!-- <div class="flex flex-col text-center w-full mb-20">
      <h1 class="sm:text-4xl text-3xl font-medium title-font mb-2 text-gray-900">Pricing</h1>
      <p class="lg:w-2/3 mx-auto leading-relaxed text-base">Banh mi cornhole echo park skateboard authentic crucifix neutra tilde lyft biodiesel artisan direct trade mumblecore 3 wolf moon twee</p>
    </div> -->
    <div class="lg:w-3/3 w-full mx-auto overflow-auto">
      <table class="table-auto w-full text-left whitespace-no-wrap">
        <thead>
          <tr>
            <th class="px-4 py-3 title-font tracking-wider font-medium text-gray-900 text-sm bg-yellow-500 rounded-tl rounded-bl"><b>Booking_ID</b></th>
            <th class="px-4 py-3 title-font tracking-wider font-medium text-gray-900 text-sm bg-yellow-500"><b>Booking_Date<b></th>
            <th class="px-4 py-3 title-font tracking-wider font-medium text-gray-900 text-sm bg-yellow-500"><b>Passenger_Name<b></th>
            <th class="px-4 py-3 title-font tracking-wider font-medium text-gray-900 text-sm bg-yellow-500"><b>ContactNo<b></th>
             <th class="px-4 py-3 title-font tracking-wider font-medium text-gray-900 text-sm bg-yellow-500"><b>Email<b></th>
              <th class="px-4 py-3 title-font tracking-wider font-medium text-gray-900 text-sm bg-yellow-500"><b>Vehicle_Name<b></th>
               <th class="px-4 py-3 title-font tracking-wider font-medium text-gray-900 text-sm bg-yellow-500"><b>Model<b></th>
                <th class="px-4 py-3 title-font tracking-wider font-medium text-gray-900 text-sm bg-yellow-500"><b>Booking_Status<b></th>
            
          </tr>
        </thead>
        <tbody>
          <?php
        include 'connection.php';
        $Login_mail=$_SESSION['useremail'];
        $Status='pending';
        $query="select * from reservation where Login_Email='$Login_mail'and Booking_Status='$Status'";
        $prepare_query=mysqli_query($con,$query);
        $data_count=mysqli_num_rows($prepare_query);
        if($data_count>0)
        {
        while($fetch=mysqli_fetch_array($prepare_query))
        {
        ?>
          <tr>
            <td class="px-4 py-3 bg-white"><b><?php echo $fetch['Booking_id'];?></b></td>
                <td class="px-4 py-3 bg-white"><b><?php echo $fetch['Booking_Date'];?></b></td>
                <td class="px-4 py-3 bg-white"><b><?php echo $fetch['Pass_Name'];?></b></td>
                <td class="px-4 py-3 bg-white"><b><?php echo $fetch['Pass_Contact'];?></b></td>
                <td class="px-4 py-3 bg-white"><b><?php echo $fetch['Pass_Email'];?></b></td>
                <td class="px-4 py-3 bg-white"><b><?php echo $fetch['Car_Name'];?></b></td>
                <td class="px-4 py-3 bg-white"><b><?php echo $fetch['Car_Model'];?></b></td>
                <td class="px-4 py-3 bg-white"><b><?php echo $fetch['Booking_Status'];?></b></td>
          </tr>
          <?php
            
          }
        }
        else
        {
          ?>
          <h4 class="fontsize-3">No  Records found.</h4>
          <?php
        }



            ?>
         
         
          
        </tbody>
      </table>
    </div>
 <!--    <div class="flex pl-4 mt-4 lg:w-2/3 w-full mx-auto">
      <a class="text-indigo-500 inline-flex items-center md:mb-2 lg:mb-0">Learn More
        <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" class="w-4 h-4 ml-2" viewBox="0 0 24 24">
          <path d="M5 12h14M12 5l7 7-7 7"></path>
        </svg>
      </a>
      <button class="flex ml-auto text-white bg-indigo-500 border-0 py-2 px-6 focus:outline-none hover:bg-indigo-600 rounded">Button</button>
    </div> -->
  </div>
</section>



<section class="text-black-700 body-font">
  <h1 class="fontsize-10">Approved Status:</h1>
  <div class="container">
    <!-- <div class="flex flex-col text-center w-full mb-20">
      <h1 class="sm:text-4xl text-3xl font-medium title-font mb-2 text-gray-900">Pricing</h1>
      <p class="lg:w-2/3 mx-auto leading-relaxed text-base">Banh mi cornhole echo park skateboard authentic crucifix neutra tilde lyft biodiesel artisan direct trade mumblecore 3 wolf moon twee</p>
    </div> -->
    <div class="lg:w-3/3 w-full mx-auto overflow-auto">
      <table class="table-auto w-full text-left whitespace-no-wrap">
        <thead>
          <tr>
            <th class="px-4 py-3 title-font tracking-wider font-medium text-gray-900 text-sm bg-yellow-500 rounded-tl rounded-bl"><b>Booking_ID</b></th>
            <th class="px-4 py-3 title-font tracking-wider font-medium text-gray-900 text-sm bg-yellow-500"><b>Booking_Date<b></th>
            <th class="px-4 py-3 title-font tracking-wider font-medium text-gray-900 text-sm bg-yellow-500"><b>Passenger_Name<b></th>
            <th class="px-4 py-3 title-font tracking-wider font-medium text-gray-900 text-sm bg-yellow-500"><b>ContactNo<b></th>
             <th class="px-4 py-3 title-font tracking-wider font-medium text-gray-900 text-sm bg-yellow-500"><b>Email<b></th>
              <th class="px-4 py-3 title-font tracking-wider font-medium text-gray-900 text-sm bg-yellow-500"><b>Vehicle_Name<b></th>
               <th class="px-4 py-3 title-font tracking-wider font-medium text-gray-900 text-sm bg-yellow-500"><b>Model<b></th>
                <th class="px-4 py-3 title-font tracking-wider font-medium text-gray-900 text-sm bg-yellow-500"><b>Booking_Status<b></th>
            
          </tr>
        </thead>
        <tbody>
          <?php
        include 'connection.php';
        $Login_mail=$_SESSION['useremail'];
        $Status='complete';
        $query="select * from reservation where Login_Email='$Login_mail'and Booking_Status='Approved'";
        $prepare_query=mysqli_query($con,$query);
        $data_count=mysqli_num_rows($prepare_query);
        ?>
        
        <?php
        if($data_count>0)
        {
        while($fetch=mysqli_fetch_array($prepare_query))
        {
        ?>
          <tr>
            <td class="px-4 py-3 bg-white"><b><?php echo $fetch['Booking_id'];?></b></td>
                <td class="px-4 py-3 bg-white"><b><?php echo $fetch['Booking_Date'];?></b></td>
                <td class="px-4 py-3 bg-white"><b><?php echo $fetch['Pass_Name'];?></b></td>
                <td class="px-4 py-3 bg-white"><b><?php echo $fetch['Pass_Contact'];?></b></td>
                <td class="px-4 py-3 bg-white"><b><?php echo $fetch['Pass_Email'];?></b></td>
                <td class="px-4 py-3 bg-white"><b><?php echo $fetch['Car_Name'];?></b></td>
                <td class="px-4 py-3 bg-white"><b><?php echo $fetch['Car_Model'];?></b></td>
                <td class="px-4 py-3 bg-white"><b><?php echo $fetch['Booking_Status'];?></b></td>
          </tr>
          <?php
            
          }
        }
        else
        {
          ?>
          <h4 class="fontsize-3">No  Records found.</h4>
          <?php
        }



            ?>
         
         
          
        </tbody>
      </table>
    </div>
 <!--    <div class="flex pl-4 mt-4 lg:w-2/3 w-full mx-auto">
      <a class="text-indigo-500 inline-flex items-center md:mb-2 lg:mb-0">Learn More
        <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" class="w-4 h-4 ml-2" viewBox="0 0 24 24">
          <path d="M5 12h14M12 5l7 7-7 7"></path>
        </svg>
      </a>
      <button class="flex ml-auto text-white bg-indigo-500 border-0 py-2 px-6 focus:outline-none hover:bg-indigo-600 rounded">Button</button>
    </div> -->
  </div>
</section>




<footer class="text-gray-700 body-font">
  <div class="container px-5 py-2 mx-auto flex items-center sm:flex-row flex-col">
    <a class="flex title-font font-medium items-center md:justify-start justify-center text-gray-900">
      <!-- <svg xmlns="http://www.w3.org/2000/svg" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" class="w-10 h-10 text-white p-2 bg-indigo-500 rounded-full" viewBox="0 0 24 24"> -->
      	<img style="width: 150px;"src="images/logos.png">
        <path d="M12 2L2 7l10 5 10-5-10-5zM2 17l10 5 10-5M2 12l10 5 10-5"></path>
      </svg>
     <!--  <span class="ml-3 text-xl">SK Travels</span> -->
    </a>
    <p class="text-sm text-black-500 sm:ml-4 sm:pl-4 sm:border-l-2 sm:border-gray-200 sm:py-2 sm:mt-0 mt-4"><b>© 2020 SK Travels </b>
    </p>
    <span class="inline-flex sm:ml-auto sm:mt-0 mt-4 justify-center sm:justify-start">
      <a class="text-gray-500">
        <svg fill="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" class="w-5 h-5" viewBox="0 0 24 24">
          <path d="M18 2h-3a5 5 0 00-5 5v3H7v4h3v8h4v-8h3l1-4h-4V7a1 1 0 011-1h3z"></path>
        </svg>
      </a>
      <a class="ml-3 text-gray-500">
        <svg fill="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" class="w-5 h-5" viewBox="0 0 24 24">
          <path d="M23 3a10.9 10.9 0 01-3.14 1.53 4.48 4.48 0 00-7.86 3v1A10.66 10.66 0 013 4s-4 9 5 13a11.64 11.64 0 01-7 2c9 5 20 0 20-11.5a4.5 4.5 0 00-.08-.83A7.72 7.72 0 0023 3z"></path>
        </svg>
      </a>
      <a class="ml-3 text-gray-500">
        <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" class="w-5 h-5" viewBox="0 0 24 24">
          <rect width="20" height="20" x="2" y="2" rx="5" ry="5"></rect>
          <path d="M16 11.37A4 4 0 1112.63 8 4 4 0 0116 11.37zm1.5-4.87h.01"></path>
        </svg>
      </a>
      <a class="ml-3 text-gray-500">
        <svg fill="currentColor" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="0" class="w-5 h-5" viewBox="0 0 24 24">
          <path stroke="none" d="M16 8a6 6 0 016 6v7h-4v-7a2 2 0 00-2-2 2 2 0 00-2 2v7h-4v-7a6 6 0 016-6zM2 9h4v12H2z"></path>
          <circle cx="4" cy="4" r="2" stroke="none"></circle>
        </svg>
      </a>
    </span>
  </div>
</footer>


</div>
</div>
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
      <a href="Vehicle.php" class="block py-1 md:py-3 pl-1 align-middle text-gray-800 no-underline hover:text-pink-500 border-b-2 border-gray-800 md:border-gray-900 hover:border-pink-500">
         <i class="fas fa-link pr-0 md:pr-3"></i><span class="pb-1 md:pb-0 text-xs md:text-base text-gray-600 md:text-gray-400 block md:inline-block"><b>Vehicles</b></span>
      </a>
   </li>
   
   <li class="mr-3 flex-1">
      <a href="Status.php" class="block py-1 md:py-3 pl-1 align-middle text-gray-800 no-underline hover:text-pink-500 border-b-2 border-gray-800 md:border-gray-900 hover:border-pink-500">
         <i class="fas fa-link pr-0 md:pr-3"></i><span class="pb-1 md:pb-0 text-xs md:text-base text-gray-600 md:text-gray-400 block md:inline-block"><b>Status</b></span>
      </a>
   </li>
   <li class="mr-3 flex-1">
      <a href="History.php" class="block py-1 md:py-3 pl-1 align-middle text-gray-800 no-underline hover:text-pink-500 border-b-2 border-gray-800 md:border-gray-900 hover:border-pink-500">
         <i class="fas fa-link pr-0 md:pr-3"></i><span class="pb-1 md:pb-0 text-xs md:text-base text-gray-600 md:text-gray-400 block md:inline-block"><b>History</b></span>
      </a>
   </li>
   <li class="mr-3 flex-1">
      <a href="Logout.php" class="block py-1 md:py-3 pl-1 align-middle text-gray-800 no-underline hover:text-pink-500 border-b-2 border-gray-800 md:border-gray-900 hover:border-pink-500">
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
