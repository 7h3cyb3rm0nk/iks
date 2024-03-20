<?php
include("../connection.php");
?>
<!DOCTYPE html>
<html lang="en" class="scroll-smooth snap-y snap-mandatory ">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>IKS | Ayurmedics</title>
    <link rel="stylesheet" href="../css/styles.css">
</head>
<body class="bg-gray-50">

<?php
include("header.php");
?>
<section class="snap-y snap-mandatory scroll-smooth scroll-pb-4 z-[-12] w-full  mb-10">
   <section class=" bg-no-repeat bg-cover bg-bottom m-5 shadow-lg min-h-[60vh] snap-center snap-always  min-w-[80vw] rounded-lg  flex items-end sm:justify-center font-bold px-12  pb-2 text-2xl stroke-gray-400 " style="background-image:url(' ../assets/jpgs/ayurveda.jpg');">
   <p class="bg-gradient-to-b  from-slate-300 from-50%  text-slate-900 to-transparent  opacity-90 p-4 rounded-lg shadow-md ">
   Ayurveda, often referred to as the "Science of Life," is an ancient healing system that originated in India more than 5,000 years ago. It is considered the oldest healing science and is deeply rooted in the Vedic culture. Ayurveda is not just a system of medicine but a comprehensive approach to health and wellness that encompasses diet, lifestyle, and the use of herbs and natural remedies. The principles of Ayurveda have influenced many natural healing systems in the West, including Homeopathy and Polarity Therapy.

    </p>
    </section>


    <section class=" m-5 bg-gray-300 shadow-lg min-h-[80vh] overflow-hidden h-full min-w-[80vw] snap-center snap-always rounded-lg p-4 ">
    <div class="head w-full md:w-72 shadow-md mx-auto  bg-slate-800 h-11 px-4 rounded-lg text-gray-100 font-bold text-center py-2 text-lg md:text-2xl flex items-center justify-center flex-row">Search Plants</div>
    <section class="search flex py-[7rem] md:mx-auto sm:mx-auto mx-6 sm:min-w-fit  px-10 opacity-80 min-w-fit   my-20 md:w-[50%] items-center  bg-zinc-600 text-gray-200 text-xl sm:md:text-xl gap-3 h-[30%] justify-center rounded-lg shadow-lg sm:max-w-50">
        <form action="" method="get" class="w-[100%] h-fit gap-4 flex justify-center align-center">
       
        
        <p class=" self-center font-bold" >Search By plant</p>
            <select name="plant" id="plant" class="py-[0.2rem] h-[2em]  text-slate-900 self-center px-2 rounded-lg">
            <?php
            
            $sql = "select name from plants;";
            $result = $mysqli->query($sql);
            while($row  = $result->fetch_assoc()){
                $value = $row['name'];
                echo "
                <option value='$value'>$value</option>
                ";
            }

            ?>
            </select>
            <input type="submit" name="plant-submit" value="search" class="rounded-lg bg-slate-800 text-gray-50 h-[2em] self-center px-2 hover:cursor-pointer ">
            </form>
    </section>
    </section>


    <section class=" m-5 bg-gray-300 shadow-lg min-h-[80vh] min-w-[80vw] snap-start snap-always   rounded-lg p-4 ">
    <div class="head w-full bg-slate-800 h-11 rounded-lg text-gray-100 font-bold"></div>
    

    </section>
    <section class=" m-5 bg-gray-300 shadow-lg min-h-[80vh] min-w-[80vw] snap-start snap-always rounded-lg p-4 ">
    <div class="head w-full bg-slate-800 h-11 rounded-lg"></div>

    </section>
    <section class=" m-5 bg-gray-300 shadow-lg min-h-[80vh] min-w-[80vw] snap-start snap-always rounded-lg p-4 ">
        <div class="head w-full bg-slate-800 h-11 rounded-lg"></div>
    

    </section>
</section>
</body>
</html>


