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
    <script src="../js/jquery.js"></script>
    <script async src="../js/first-aids.js"></script>

    <script>
      $(document).ready(function(){
        $("input").keyup(function(){  
          var query = $(this).val();
            if(query != ''){
              $("#suggest").load("first-aids-values/firstAjax.php",{
              query:query
             })
            }
            else{
            $("#suggest").html("<p>Suggestions will appear here</p>")
            }  
            })
          
          
        }); 
    </script>
</head>
<body class="h-screen overflow-hidden flex items-center justify-center bg-amber-950">


<section class="search-section">
        <form id = "form" action="first-aids-values/injuryDisplay.php" method="get">

            <input id = "textInput" class="border-1 border-gray-300 bg-white h-12 w-[30rem] px-5 pr-18 rounded-full text-lg hover:scale-105 active: scale-110 delay-[50] outline:none ease-in-out transition-all placeholder:text-gray-600 hover:ring-white"
            type="search" name="health" id="health" placeholder="Enter your health issue">
            <button type="submit" class="right-12 mt-5 ml-4">
            <svg class="text-gray-600 h-4 w-4 fill-current" xmlns="http://www.w3.org/2000/svg"
                xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1" id="Capa_1" x="0px" y="0px"
                viewBox="0 0 56.966 56.966" style="enable-background:new 0 0 56.966 56.966;" xml:space="preserve"
                width="512px" height="512px">
            </svg>
            </button>
            <button
                id = "submit" class="middle none center rounded-full bg-purple-700 py-3 px-8 hover:scale-105 hover:bg-purple-800 font-sans text-lg font-bold uppercase text-white transition-all focus:opacity-[0.85] focus:shadow-none active:opacity-[0.85] active:shadow-none disabled:pointer-events-none disabled:opacity-50 disabled:shadow-none"
            data-ripple-light="true"
            >   
            SEARCH
            </button>
            <div>
              <h1 id="suggest" class="bg-gray-50 border-gray-500 text-slate-950 text-lg text-center font-bold w-96 border-4 border-solid rounded-full mt-8 ml-20 hover:scale-105">Suggestions will appear here</h1>
            </div>

        </form> 
</section>    
</body>
</html>
