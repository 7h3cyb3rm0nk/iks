<!DOCTYPE html>
<html lang="en" class="scroll-smooth">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Art-Forms</title>
    <link rel="stylesheet" href="../css/styles.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@24,400,0,0" />
</head>

<body class="*:box-border p-0 m-0 font-['Poppins'] antialiased text-base">

    <?php
    require "header.php";
    ?>
    <!-- section containing photos -->
    <section class="snap-y snap-mandatory scroll-smooth scroll-pb-4 w-screen h-screen max-w-full max-h-full relative">
        <!-- list named div contains all the background photos and their respective descriptions -->
        <div>
            <div>
                <img src="../assets/images-art-forms-jpg/Kathakali.jpg" alt="Kathakali" class="rounded object-cover w-full h-full">
                <div class="absolute max-w-[1140px] w-[51%] top-[10%] left-[3%] text-white drop-shadow-md">
                    <div class=" text-3xl font-bold pb-2">Kathakali (16th Century)</div>
                    <div class="space-y-4">
                        <p>
                            Kathakali, a vibrant classical dance-drama form, emerged in Kerala, India during the 16th century. While its exact origins are debated, scholars believe it developed from temple rituals and folk art traditions, reaching its fully elaborated style around this period.
                        </p>
                        <p>
                            Early performances were likely linked to temple offerings, specifically Krishnanattam, a dance drama dedicated to the Hindu god Krishna. Over time, themes broadened to encompass stories from the Mahabharata, Ramayana, and other Hindu mythology.
                        </p>
                    </div>
                    <form action="" method="get" class="mt-8">
                        <input type="submit" class="bg-transparent text-white border-white border px-4 py-2 rounded-md hover:text-black hover:bg-white active:bg-transparent active:text-black active:bg-white focus:ring-2 focus:ring-slate-500 hover:translate-y-[-4px] active:translate-y-[-5px] hover:scale-105 active:scale-110 transition-all ease-in-out delay-50 tracking-widest" value="SHOW MORE">
                    </form>
                </div>
            </div>
        </div>
        <!-- div element containing the arrow keys -->
        <div class="absolute bottom-[5%] left-8 w-[300px] max-w-[30%] flex items-center gap-2 z-20">
            <button id="prev" class="w-16 h-16 rounded-[50%] bg-[#eee6] text-white hover:bg-white hover:text-black transition-all ease-in-out delay-75 hover:scale-105 active:scale-110">&#60;</button>
            <button id="next" class="w-16 h-16 rounded-[50%] bg-[#eee6] text-white hover:bg-white hover:text-black transition-all ease-in-out delay-75 hover:scale-105 active:scale-110">&#62;</button>
        </div>
        <!-- div element containing the thumbnails -->
        <div class="absolute flex z-10 gap-3 bottom-3 right-9">
            <div class="relative h-36 w-24 rounded-xl">
                <img src="../assets/images-art-forms-jpg/Kathakali.jpg" alt="Kathakali" class="object-cover w-full h-full">
                <div class="absolute bottom-0 left-0 w-full bg-black/50 text-white text-sm p-1">Kathakali</div>
            </div>
            <!-- Add more thumbnail containers here -->
        </div>

    </section>



    <!-- section containing search -->
    <!-- <section class="m-5 bg-gray-300 shadow-lg min-h-[80vh] snap-center snap-always min-w-[80vw] rounded-lg p-4 flex justify-center items-center">
        <form action="" method="get" class="flex max-w-max max-h-[80w] items-center rounded-lg">
            <div class="flex max-w-max rounded-[30px] bg-[#f6f6f6] p-[14px] hover:translate-y-[-2px] transition-[0.4s] active:translate-y-[-1px]">
                <input type="text" placeholder="Search the Art-form" class="text-[16px] bg-transparent border-none outline-none w-[15rem] align-middle placeholder:text-[#00000073] rounded-l-lg">
                <span class="material-symbols-outlined align-middle text-[#00000073]">
                    search
                </span>
            </div>
            <input type="submit" value="Search" class="w-32 px-[10px] py-[8px] bg-gray-700 text-white rounded-3xl ml-12">
        </form>
    </section> -->

    <script src="../js/scripts.js"></script>
</body>

</html>