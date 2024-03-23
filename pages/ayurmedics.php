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

<?php
//using filter has var to conditionally exclude content
if(!filter_has_var(INPUT_GET, 'plantSubmit')){
    echo "

   <section class=\" bg-no-repeat bg-cover bg-bottom m-5 shadow-lg min-h-[60vh] snap-center snap-always  min-w-[80vw] rounded-lg  flex items-end sm:justify-center font-bold px-12  pb-2 text-2xl stroke-gray-400 \" style=\"background-image:url(' ../assets/jpgs/ayurveda.jpg');\">
   <p class=\"bg-gradient-to-b  from-slate-300 from-50%  text-slate-900 to-transparent  opacity-90 p-4 rounded-lg shadow-md \">
   Ayurveda, often referred to as the \"Science of Life,\" is an ancient healing system that originated in India more than 5,000 years ago. It is considered the oldest healing science and is deeply rooted in the Vedic culture. Ayurveda is not just a system of medicine but a comprehensive approach to health and wellness that encompasses diet, lifestyle, and the use of herbs and natural remedies. The principles of Ayurveda have influenced many natural healing systems in the West, including Homeopathy and Polarity Therapy.

    </p>
    </section>
    ";
}

?>

    <section class=" m-5 bg-gray-300 shadow-lg min-h-[80vh] overflow-hidden h-full min-w-[80vw] snap-always snap-start  rounded-lg p-4 ">
        
    <div class="head w-full md:w-72 shadow-md mx-auto  bg-slate-800 h-11 px-4 rounded-lg text-gray-100 font-bold text-center py-2 text-lg md:text-2xl flex items-center justify-center flex-row">Search Plants</div>
    <?php
    if(!filter_has_var(INPUT_GET, 'plantSubmit')){

   echo "
    <section class='search flex py-[7rem] md:mx-auto sm:mx-auto mx-6 sm:min-w-fit  px-10 opacity-80 min-w-fit   my-20 md:w-[50%] items-center  bg-zinc-600 text-gray-200 text-xl sm:md:text-xl gap-3 h-[30%] justify-center rounded-lg shadow-lg sm:max-w-50'>
      <form action='' method='get' class='w-[100%] h-fit gap-4 flex justify-center align-center'>";
       
        echo "
        <p class=' self-center font-bold' >Search By plant</p>
            <select name='plant' id='plant' class='py-[0.2rem] h-[2em]  text-slate-900 self-center px-2 rounded-lg'>";
            
            
            $sql = 'select name from plants;';
            $result = $mysqli->query($sql);
            while($row  = $result->fetch_assoc()){
                $value = $row['name'];
                echo "
                <option value='$value'>$value</option>
                ";
            }

            echo "
            </select>
            <input type='submit' name='plantSubmit' value='search' class='rounded-lg bg-slate-800 text-gray-50 h-[2em] self-center px-2 hover:cursor-pointer'>
            </form>
         ";   
        }
        // using filter_has_var instead of isset()
        // to exclusively check for form input
        if(filter_has_var(INPUT_GET, 'plantSubmit')){
            //unsetting remediesSubmit whenever the plant search is done
            unset($GET['remediesSubmit']);

            echo "
            <section class='bg-slate-400 m-2 rounded-lg  min-h-[70vh] py-12 text-2xl'>

            ";
            $plant_name = $_GET['plant'];
            $sql = "select * from details where plant ='$plant_name'";
            $result = $mysqli->query($sql);
            echo "
            <table class='text-left mx-auto table max-w-min bg-gray-200 table-auto p-3 rounded-lg shadow-md outline-none border-none my-3 '>
            <tr class=''>
            <th class='px-4 pb-3 pt-8  mx-4 border-b-2 border-slate-300'>Plant</th>
            <th class='px-4 pb-3 pt-8 mx-4 border-b-2 border-slate-300'>Category</th>
            <th class='px-4 pb-3 pt-8 mx-4 border-b-2 border-slate-300'>Diseases</th>
            <th class='px-4 pb-3 pt-8 mx-4 border-b-2 border-slate-300'>Usage</th>
            </tr>
            

            ";
            while($row = $result->fetch_assoc()) {
              echo "<tr class=' ' >
              <td class='px-4 pb-3 pt-8 mx-4 border-b-2  border-slate-300'>{$row['plant']}</td>
              <td class='px-4 pb-3 pt-8 mx-4 border-b-2 border-slate-300'>{$row['category']}</td>
              <td class='px-4 pb-3 pt-8 mx-4 border-b-2 border-slate-300'>{$row['disease']}</td>
              <td class='px-4 pb-3 pt-8 break-all text-wrap mx-4 border-b-2 border-slate-300'>{$row['usagedetails']}</td>
              </tr>
              ";
            }
            echo "</table>
            </section>";

        }
        ?>
    </section>
    </section>


    <section class=" m-5 bg-gray-300 shadow-lg min-h-[80vh] min-w-[80vw] snap-start snap-always   rounded-lg p-4 ">
    <div class="head w-full md:w-72 shadow-md mx-auto  bg-slate-800 h-11 px-4 rounded-lg text-gray-100 font-bold text-center py-2 text-lg md:text-2xl flex items-center justify-center flex-row">Remedies</div>
    

    </section>
    <section class=" m-5 bg-gray-300 shadow-lg min-h-[80vh] min-w-[80vw] snap-start snap-always rounded-lg p-4 ">
    <div class="head w-full bg-slate-800 h-11 rounded-lg text-gray-200"></div>

    </section>
    <section class=" m-5 bg-gray-300 shadow-lg min-h-[80vh] min-w-[80vw] snap-start snap-always rounded-lg p-4 ">
        <div class="head w-full bg-slate-800 h-11 rounded-lg"></div>
    

    </section>
</section>
<script>
   
</script>
</body>
</html>


