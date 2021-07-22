<?php
session_start();

?>
 <!DOCTYPE html>
 <html>
 <head>
 	 <meta charset="UTF-8">
     <meta name="viewport" content="width=device-width, initial-scale=1.0">
 	 <meta http-equiv="X-UA-Compatible" content="ie=edge">
 	<link href="https://unpkg.com/tailwindcss@^1.0/dist/tailwind.min.css" rel="stylesheet">
 	
 	<title>SK Travels</title>
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
    <button class="inline-flex items-center bg-orange-400 border-0 py-1 px-5 mr-3 focus:outline-none hover:bg-gray-300 rounded text-base mt-4 md:mt-0"><b><a href="Login.php">Login</a></b>
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

<!--   <section class="text-black-400 body-font" style="background-image:url(images/design5.png);background-size: 100% 100% "> -->
  <section class="text-black-400 body-font" >
  <div class="container bg-white-400 px-5 py-24 mx-auto flex flex-col">
    <div class="lg:w-6/8 mx-auto">
      <div class="rounded-lg h-64 overflow-hidden ">
        <img alt="content" class="object-cover object-center  h-full w-full" src="images/front3.jpg">
      </div>
      <div class="flex flex-col sm:flex-row mt-10">
        <div class="sm:w-1/3 text-center sm:pr-8 sm:py-8">
          <div class="w-20 h-20 rounded-full inline-flex items-center justify-center bg-gray-200 text-gray-400">
            <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" class="w-10 h-10" viewBox="0 0 24 24">
              <path d="M20 21v-2a4 4 0 00-4-4H8a4 4 0 00-4 4v2"></path>
              <circle cx="12" cy="7" r="4"></circle>
            </svg>
          </div>
          <div class="flex flex-col items-center text-center justify-center">
            <h2 class="font-medium title-font mt-4 text-gray-900 text-lg">SK Travels</h2>
            <div class="w-12 h-1 bg-orange-500 rounded mt-2 mb-4"></div>
            <p class="text-base text-gray-600">It is good to have an end to journey toward; but it is the journey that matters, in the end.” –SK Travels</p>
          </div>
        </div>
        <div class="sm:w-2/3 sm:pl-8 sm:py-8 sm:border-l border-gray-300 sm:border-t-0 border-t mt-4 pt-4 sm:mt-0 text-center sm:text-left">
          <p class="leading-relaxed text-lg mb-4">Welcome to SK Travels
Established in 1996, we operate a fleet of over 800 cars and all our chauffeurs are in uniform and professionally trained to provide the highest standards of service in the industry. Fluent english speaking chauffeurs are also provided on request.. We have one of the largest fleets in India comprising of brand new Mercedes S-Class, Mercedes E-Class, Toyota Camry, Honda Accord, Honda CRV, Toyota Corolla, Toyota Innova, Ford Endeavor, Maruti Baleno, Ford Ikon, Tata Indica and Luxury Vans like Toyota Commuter, Mercedes Viano and Volkswagen Crafter and Caravelle . We also provide mini-buses and large coaches upon request .</p>
          <a class="text-orange-500 inline-flex items-center">Learn More
            <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" class="w-4 h-4 ml-2" viewBox="0 0 24 24">
              <path d="M5 12h14M12 5l7 7-7 7"></path>
            </svg>
          </a>
        </div>
      </div>
    </div>
  </div>
</section>
</header>


 
 </body>
 </html>
 