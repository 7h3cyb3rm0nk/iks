<?php
require("connection.php");

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin | AyurMeds</title>
    <link rel="stylesheet" href="../css/styles.css?v=<?=time();?>">
</head>
<body class="min-h-screen bg-gray-200 ">
    <nav class="bg-gray-500 bg-opacity-80 grid  text-6xl py-5 montserrat-600 transition-all duration-500 grid-cols-10   ">
    <div class="menu col-span-1 p-3 h-full px-4  cursor-pointer focus:animate-spin "i id="menu">
        <svg viewBox="0 0 100 80" width="40" height="40" class="stroke-slate-50">
          <rect class="rounded-lg" width="100" height="20"></rect>
          <rect class="rounded-lg" y="30" width="100" height="20"></rect>
          <rect class="rounded-lg" y="60" width="100" height="20"></rect>
        </svg>
        <div class="menu-list rounded-lg text-gray-200 translate-x-[-150%] fixed left-0 px-3 pt-8 transition-all duration-500 text-xl min-h-screen bg-slate-700 ml-0 ">
           sample
       </div>
    </div>
        <div class="text-gray-300 col-span-9 text-center navText transition-all duration-500  px-auto md:text-center md:pr-5 md:py-2">Indian Knowledge System</div>
        
    </nav>
    <section class="grid grid-cols-8">
        

    </section>

    <!-- scripts -->
<script>
    let menu = document.querySelector("#menu");
    let menuList = document.querySelector(".menu-list");
    let navText = document.querySelector(".navText");

    menu.addEventListener("click", () => {
        menuList.classList.toggle("translate-x-0")
        menu.classList.toggle("bg-slate-700");
        menu.classList.toggle("fixed");
        menu.classList.toggle("top-0");
        menu.classList.toggle("w-[5em]");
        menu.classList.toggle("pt-8");
        // menuList.classList.toggle("transition-all");
        // menuList.classList.toggle("duration-500");
        // navText.classList.toggle("transition-all");
        navText.classList.toggle("lg:text-7xl");
        menu.classList.toggle("text-gray-200");
        // menuList.toggle("rounded-lg")
        
        // navText.classList.toggle("duration-500")
    })
    </script>
    
</body> 
</html>