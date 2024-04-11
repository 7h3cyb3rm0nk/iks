<?php
include("../connection.php");
?>
<!DOCTYPE html>
<html lang="en" class="scroll-smooth snap-y snap-mandatory ">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>IKS | Ayurmedics</title>
    <link rel="stylesheet" href="/css/styles.css">
    <script src="/js/jquery.js"></script>
</head>
<body class="bg-slate-200 min-h-screen h-screen">

<body class="bg-slate-200 min-h-screen h-screen">

    <?php
    include("header.php");
    ?>


    <!-- intro section -->
    <section class=" bg-no-repeat bg-cover bg-bottom m-5 shadow-lg min-h-[60vh] snap-center snap-always  min-w-[80vw] rounded-lg  flex items-end sm:justify-center font-bold px-12  pb-2 text-2xl stroke-gray-400 " style="background-image:url(' ../assets/jpgs/ayurveda.jpg');">
        <p class="bg-gradient-to-b  from-slate-300 from-50%  text-slate-900 to-transparent  opacity-90 p-4 rounded-lg shadow-md ">
            Ayurveda, often referred to as the "Science of Life," is an ancient healing system that originated in India more than 5,000 years ago. It is considered the oldest healing science and is deeply rooted in the Vedic culture. Ayurveda is not just a system of medicine but a comprehensive approach to health and wellness that encompasses diet, lifestyle, and the use of herbs and natural remedies. The principles of Ayurveda have influenced many natural healing systems in the West, including Homeopathy and Polarity Therapy.

        </p>
    </section>

<!-- search for plants/ remedies -->
    <section class=" m-5 bg-cover shadow-lg min-h-[80vh] overflow-hidden h-[50vh] min-w-[80vw] snap-always snap-center  rounded-lg p-4 " style="background-image: url('/assets/jpgs/search-bg.jpg');">   
       <div class="head w-full md:w-fit shadow-md mx-auto  bg-slate-900 h-11 px-4 rounded-lg text-gray-100 font-bold text-center py-2 text-lg md:text-2xl flex items-center justify-center flex-row bg-opacity-90">Search Plants/Remedies</div>



    <!-- section containing forms -->
    <section class="flex flex-col items-center justify-center h-full text-2xl ">
    <div class="forms flex flex-col gap-12 align-start bg-gray-200 p-5 rounded-lg bg-opacity-85 shadow-xl">
    <!-- plant search form -->
    <section class="plantSearchform text-left ">
    <form action="ayurmedics/getPlants.php" method="get" class="flex flex-row gap-4 justify-start" autocomplete="off">
        <label for="plantName" class="text-slate-900 font-bold mb-2">Search Plants:</label>
        <div class="flex">
            <input type="text" name="plantName" id="plantName"  class="rounded-md px-2 mr-2">
            <input type="submit" value="Search" name="plantSubmit" class="bg-slate-800 text-gray-200 px-2 rounded-md font-bold">
            
        </div>
        
    </form>
    <aside class="flex-none font-bold text-xl mt-2 text-gray-800 "  >Suggestions:<span id="plantSuggestion"></span></aside>
    </section>

    <!-- remedies search form -->
    <section class="remediesSearchForm  flex flex-col text-left">
    <form action="ayurmedics/getDiseases.php" method="get" class="flex flex-row gap-4 justify-start" autocomplete="off">
        <label for="diseaseName" class="text-slate-900 font-bold mb-2">Search Remedies for:</label>
        <div class="flex">
            <input type="text" name="diseaseName" id="diseaseName" class="rounded-md px-2 mr-2">
            <input type="submit" value="Search" name="diseaseSubmit" class="bg-slate-800 text-gray-200 px-2 rounded-md font-bold">
        </div>
        
    </form>
    <aside class="flex-none font-bold text-xl mt-2 text-gray-800 " >Suggestions: <span id="diseaseSuggestion"> </span></aside>
    </section>

<!-- Plants List -->
    <section class=" m-5 bg-gray-300 shadow-lg h-[80vh] bg-cover bg-center min-w-[80vw] snap-center snap-always   rounded-lg p-4 overflow-scroll  scroll-smooth snap-y snap-mandatory " style="background-image: url('/assets/jpgs/plants-bg.jpg');">
    <div class="head w-full md:w-fit shadow-md mx-auto  bg-slate-800 h-11 px-4 rounded-lg text-gray-100 font-bold text-center py-2 text-lg md:text-2xl flex items-center justify-center flex-row ">Plants</div>
    <!-- this container holds all the list of plants -->
    <div class="plantsListContainer overflow-y-auto h-fit grid sm:grid-cols-3 items-start justify-center gap-12 py-[3em]  sm:px-[3em]">
        <?php
        $sql = "select * from plants order by name asc";
        $stmt = $mysqli->prepare($sql);
        $stmt->execute();
        $result = $stmt->get_result();
        // functions to parse spaces for id names
        function replace_spaces($string) {
            $string = str_replace(" ", "-", $string);
            return $string;
        }
        function replace_dashes($string) {
            $string = str_replace("-", " ", $string);
            return $string;
        }

        if($result->num_rows > 0) {
            while($row = $result->fetch_assoc()){
                $sectionId = replace_spaces($row['name']);
                echo "
                <div class='bg-white  rounded-md shadow-xl p-4 grid grid-cols-2 hover:scale-105  bg-opacity-90 snap-always snap-start grid-flow-row-dense ' >
                <section class='text-slate-800 font-bold text-2xl plantName col-span-2'>{$row['name']}</section>
                <div class='col-span-2 flex items-center justify-start  '>
                <section class='w-[7em] h-[8em]'>
                <img src='/{$row['image']}' class='h-[100%] w-[100%] rounded-lg'>
                </section>
                <section class='plantScientificName text-slate-700 ml-4 text-xl font-semibold'><span class='text-slate-950'>Scientific Name:</span> {$row['scientific_name']}</section>
                </div>
               
                <section class='col-span-2 hidden mt-6' id='{$sectionId}-desc'>
                
                </section>
                <section id='{$row['name']}' class='show-more text-sky-800 font-semibold cursor-pointer mt-4 col-span-2 ml-4 hover:text-sky-950'>Show more...</section>
                </div>

                ";
                }
            }




            ?>

        </div>



    </section>

    // script to give suggestions
//    plant suggestions
    $('#plantName').keyup(function() {
        var query = $(this).val();
        if(query.length > 0) {
            $.ajax({
                url:"../api/plantSuggestionsApi.php",
                type:'GET',
                data: { 'query': query},
                success: function(data){
                    if(data !== ""){
                        console.log(data);
                        var suggestions = JSON.parse(data);
                        var suggestionsHtml = '';
                        for(var i=0; i<suggestions.length; i++){
                            i==0?(suggestionsHtml +=  " " + suggestions[i]):(suggestionsHtml += ", " + suggestions[i] );
                        }
                    }
                });
            } else {
                $("#plantSuggestion").html('');
            }

        });

   // disease suggestion ajax call
    $('#diseaseName').keyup(function() {
        var query = $(this).val();
        if(query.length > 0) {
            $.ajax({
                url:"../api/diseaseSuggestionsApi.php",
                type:'GET',
                data: { 'query': query},
                success: function(data){
                    if(data !== ""){
                        console.log(data);
                        var suggestions = JSON.parse(data);
                        var suggestionsHtml = '';
                        for(var i=0; i<suggestions.length; i++){
                            i==0?(suggestionsHtml +=  " " + suggestions[i]):(suggestionsHtml += ", " + suggestions[i] );
                        }
                    }
                });
            } else {
                $("#diseaseSuggestion").html('');
            }

        });

    $(".show-more").click(function() {
        
        var plantName = $(this).attr('id');
        var plantDesc = plantName.replace(/\s+/g, '-');
        var descContainer = $(this).siblings(`#${plantDesc}-desc`);
        var showContainer = $(this)

        $.ajax({
            url:"../api/getPlantDescriptionApi.php",
            type: "get",
            data: {"query": plantName},
            success: function(data) {
                descContainer.html(data);
                descContainer.toggleClass('hidden');
                if(descContainer.hasClass('hidden')) {
                    showContainer.html('Show more...');
                    
                }
                else {
                    showContainer.html('Show less');
                }
            },
            error: function(xhr, status, error) {
                console.error(error);
            },
        });

            var plantName = $(this).attr('id');
            var descContainer = $(this).siblings(`#${plantName}-desc`);
            var showContainer = $(this)

            $.ajax({
                url: "../api/getPlantDescriptionApi.php",
                type: "get",
                data: {
                    "query": plantName
                },
                success: function(data) {
                    descContainer.html(data);
                    descContainer.toggleClass('hidden');
                    if (descContainer.hasClass('hidden')) {
                        showContainer.html('Show more...');

                    } else {
                        showContainer.html('Show less');
                    }
                },
                error: function(xhr, status, error) {
                    console.error(error);
                },
            });

        });
    </script>
</body>

</html>