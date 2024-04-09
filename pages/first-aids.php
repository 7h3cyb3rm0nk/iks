<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://unpkg.com/tailwindcss@1.9.6/dist/tailwind.min.css" rel="stylesheet">
    <link rel="stylesheet" href="../css/styles.css">
    <link rel="stylesheet" href="../css/first.css">
    <link rel="stylesheet"  href="https://unpkg.com/@material-tailwind/html@latest/styles/material-tailwind.css"/>
    <script src="https://unpkg.com/@material-tailwind/html@latest/scripts/ripple.js"></script>
</head>
<body class="h-screen overflow-hidden flex items-center justify-center bg-amber-950">
<!-- <section class="h-[100h] max-h-full w-[100vh] max-w-full">
    <div class=" w-full h-full rounded-lg" id="search-section">
     <div class="pt-2 mx-auto text-gray-600"> 
        <input class="border-2 border-gray-300 bg-white h-10 px-5 pr-16 rounded-lg text-sm focus:outline-none"
          type="search" name="search" placeholder="Search">
        <button type="submit" class="relative right-12   mt-5 ml-4">
          <svg class="text-gray-600 h-4 w-4 fill-current" xmlns="http://www.w3.org/2000/svg"
            xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1" id="Capa_1" x="0px" y="0px"
            viewBox="0 0 56.966 56.966" style="enable-background:new 0 0 56.966 56.966;" xml:space="preserve"
            width="512px" height="512px">
            <path
              d="M55.146,51.887L41.588,37.786c3.486-4.144,5.396-9.358,5.396-14.786c0-12.682-10.318-23-23-23s-23,10.318-23,23  s10.318,23,23,23c4.761,0,9.298-1.436,13.177-4.162l13.661,14.208c0.571,0.593,1.339,0.92,2.162,0.92  c0.779,0,1.518-0.297,2.079-0.837C56.255,54.982,56.293,53.08,55.146,51.887z M23.984,6c9.374,0,17,7.626,17,17s-7.626,17-17,17  s-17-7.626-17-17S14.61,6,23.984,6z" />
          </svg>
        </button>
      </div>
      </div>
</section>   -->
<section class="search-section">
        <form action="first-aids-values/injuryDisplay.php" method="get">

            <input class="border-1 border-gray-300 bg-white h-12 w-[30rem] px-5 pr-18 rounded-full text-sm hover:scale-105 active: scale-110 delay-[50] outline:none ease-in-out transition-all placeholder:text-gray-600 hover:ring-white"
            type="search" name="health" placeholder="Enter your health issue">
            <button type="submit" class="right-12 mt-5 ml-4">
            <svg class="text-gray-600 h-4 w-4 fill-current" xmlns="http://www.w3.org/2000/svg"
                xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1" id="Capa_1" x="0px" y="0px"
                viewBox="0 0 56.966 56.966" style="enable-background:new 0 0 56.966 56.966;" xml:space="preserve"
                width="512px" height="512px">
            </svg>
            </button>
            <button
                class="middle none center rounded-full bg-purple-700 py-3 px-8 hover:scale-105 hover:bg-purple-800 font-sans text-lg font-bold uppercase text-white transition-all focus:opacity-[0.85] focus:shadow-none active:opacity-[0.85] active:shadow-none disabled:pointer-events-none disabled:opacity-50 disabled:shadow-none"
            data-ripple-light="true"
            >
            SEARCH
            </button>

        </form> 
</section>    
</body>
</html>
