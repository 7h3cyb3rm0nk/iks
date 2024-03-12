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
    <nav class="bg-gray-500 bg-opacity-80 grid  text-6xl py-5 montserrat-600  grid-cols-10   ">
    <div class="menu col-span-1 p-3 h-full px-4  cursor-pointer focus:animate-spin "i id="menu">
        <svg viewBox="0 0 100 80" width="40" height="40">
          <rect class="rounded-lg" width="100" height="20"></rect>
          <rect class="rounded-lg" y="30" width="100" height="20"></rect>
          <rect class="rounded-lg" y="60" width="100" height="20"></rect>
        </svg>
        <div class="menu-list translate-x-[-150%] fixed left-0 px-3  text-xl min-h-screen bg-slate-700 ml-0 ">
           sample content
       </div>
    </div>
        <div class="text-gray-300 col-span-9 text-center">Indian Knowledge System</div>
        
    </nav>
    <section class="grid grid-cols-8">
        

    </section>
<script>
    let menu = document.querySelector("#menu");
    let menuList = document.querySelector(".menu-list");

    menu.addEventListener("click", () => {
        menuList.classList.toggle("translate-x-0")
        menu.classList.toggle("bg-slate-700");
        menu.classList.toggle("fixed");
        menu.classList.toggle("top-0");
        menu.classList.toggle("w-[5em]");
        menu.classList.toggle("pt-8");
        menuList.classList.toggle("transition-all");
        menuList.classList.toggle("duration-500")
    })
    </script>
    
</body> 
</html>