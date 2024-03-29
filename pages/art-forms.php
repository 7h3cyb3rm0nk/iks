<?php
require "../connection.php";
?>
<!DOCTYPE html>
<html lang="en" class="scroll-smooth">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Art-Forms</title>
    <link rel="stylesheet" href="../css/styles.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@24,400,0,0" />
</head>

<body class="min-h-screen h-screen bg-gray-50 *:box-border p-0 m-0">

    <?php
    require "header.php";
    ?>

    <section class="flex w-[90vw] h-[100vh] justify-center items-center bg-gray-800 rounded-2xl mt-[2rem] mb-[2rem] ml-[5vw] shadow-lg">
        <div class="rounded-xl p-[20px] bg-gray-100">

        </div>
    </section>

    <section class="flex w-[90vw] h-[100vh] justify-center items-center rounded-2xl mb-[2rem] ml-[5vw] shadow-lg bg-gradient-to-r from-[#bfc7d9] to-[#b4bbca]">
        <div class="flex items-center justify-center rounded-xl p-[20px] bg-gradient-to-t from-[#e6e9f0,0%] to-[#eef1f5,100%] min-w-[36rem] min-h-[20rem]">
            <form action="" method="get" class="flex flex-col lg:flex-row items-center justify-center">
                <label for="art" class="text-[20px]">Enter the name of the Art-Form:</label>
                <div class="flex max-w-max rounded-[30px] bg-[#f6f6f6] p-[14px] mt-4 lg:mt-0 ml-[1rem] hover:translate-y-[-2px] transition-[0.4s] active:translate-y-[-1px]">
                    <input type="text" placeholder="Search the Art-form" class="text-[16px] bg-transparent border-none outline-none w-[15rem] align-middle placeholder:text-[#00000073]">
                    <button>
                        <span class="material-symbols-outlined align-middle text-[#00000073]">
                            search
                        </span>
                    </button>
                </div>
            </form>
        </div>
    </section>

    <section class="flex w-[90vw] h-[100vh] justify-center items-center bg-gray-800 rounded-2xl mb-[2rem] ml-[5vw] shadow-lg">
        <div class="rounded-xl p-[20px] bg-gray-100">

        </div>
    </section>

    <script src="../js/scripts.js"></script>
</body>

</html>