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
    <script src="../js/jquery.js"></script>
</head>
<body class="bg-gray-50 min-h-screen h-screen">

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
    <section class=" m-5 bg-gray-300 shadow-lg min-h-[80vh] overflow-hidden h-[50vh] min-w-[80vw] snap-always snap-center  rounded-lg p-4 ">   
       <div class="head w-full md:w-fit shadow-md mx-auto  bg-slate-800 h-11 px-4 rounded-lg text-gray-100 font-bold text-center py-2 text-lg md:text-2xl flex items-center justify-center flex-row">Search Plants/Remedies</div>



    <!-- section containing forms -->
    <section class="flex flex-col items-center justify-center h-full text-2xl ">
    <div class="forms flex flex-col gap-12 align-start">
    <!-- plant search form -->
    <section class="plantSearchform text-left">
    <form action="ayurmedics/getPlants.php" method="get" class="flex flex-row gap-4 justify-start" autocomplete="off">
        <label for="plantName" class="text-slate-800 font-bold mb-2">Search Plants:</label>
        <div class="flex">
            <input type="text" name="plantName" id="plantName"  class="rounded-md px-2 mr-2">
            <input type="submit" value="Search" name="plantSubmit" class="bg-slate-800 text-gray-200 px-2 rounded-md font-bold">
            
        </div>
        
    </form>
    <aside class="flex-none font-bold text-xl mt-2 text-gray-700 "  >Suggestions:<span id="plantSuggestion"></span></aside>
    </section>

    <!-- remedies search form -->
    <section class="remediesSearchForm  flex flex-col text-left">
    <form action="ayurmedics/getDiseases.php" method="get" class="flex flex-row gap-4 justify-start" autocomplete="off">
        <label for="diseaseName" class="text-slate-800 font-bold mb-2">Search Remedies for:</label>
        <div class="flex">
            <input type="text" name="diseaseName" id="diseaseName" class="rounded-md px-2 mr-2">
            <input type="submit" value="Search" name="diseaseSubmit" class="bg-slate-800 text-gray-200 px-2 rounded-md font-bold">
        </div>
        
    </form>
    <aside class="flex-none font-bold text-xl mt-2 text-gray-700 " >Suggestions: <span id="diseaseSuggestion"> </span></aside>
    </section>
    </div>
    </section>
    
   
    </section>
    

<!-- Plants List -->
    <section class=" m-5 bg-gray-300 shadow-lg min-h-[80vh] min-w-[80vw] snap-center snap-always   rounded-lg p-4 ">
    <div class="head w-full md:w-fit shadow-md mx-auto  bg-slate-800 h-11 px-4 rounded-lg text-gray-100 font-bold text-center py-2 text-lg md:text-2xl flex items-center justify-center flex-row">Plants</div>
    

    </section>
    <section class=" m-5 bg-gray-300 shadow-lg min-h-[80vh] min-w-[80vw] snap-center snap-always rounded-lg p-4 ">
    <div class="head w-full md:w-fit shadow-md mx-auto  bg-slate-800 h-11 px-4 rounded-lg text-gray-100 font-bold text-center py-2 text-lg md:text-2xl flex items-center justify-center flex-row"></div>

    </section>
    <section class=" m-5 bg-gray-300 shadow-lg min-h-[80vh] min-w-[80vw] snap-center snap-always rounded-lg p-4 ">
        <div class="head w-full md:w-fit shadow-md mx-auto  bg-slate-800 h-11 px-4 rounded-lg text-gray-100 font-bold text-center py-2 text-lg md:text-2xl flex items-center justify-center flex-row"></div>
    

    </section>
</section>
<script>

    // script to give suggestions
//    plant suggestions
    $('#plantName').keyup(function() {
        var query = $(this).val();
        if(query.length > 0) {
            $.ajax({
                url:"ayurmedics/plantSuggestions.php",
                type:'GET',
                data: { 'query': query},
                success: function(data){
                    if(data !== ""){
                        console.log(data);
                        var suggestions = JSON.parse(data);
                        var suggestionsHtml = '';
                        for(var i=0; i<suggestions.length; i++){
                            suggestionsHtml +=  " " + suggestions[i] + "  " ;
                        }
                        $('#plantSuggestion').html(suggestionsHtml);
                    }else {
                        $('#plantSuggestion').html('');
                    }
                }
            });
        }else{
            $("#plantSuggestion").html('');
        }
        
    });


   // disease suggestion ajax call
    $('#diseaseName').keyup(function() {
        var query = $(this).val();
        if(query.length > 0) {
            $.ajax({
                url:"ayurmedics/diseaseSuggestions.php",
                type:'GET',
                data: { 'query': query},
                success: function(data){
                    if(data !== ""){
                        console.log(data);
                        var suggestions = JSON.parse(data);
                        var suggestionsHtml = '';
                        for(var i=0; i<suggestions.length; i++){
                            suggestionsHtml +=  " " + suggestions[i] + "  " ;
                        }
                        $('#diseaseSuggestion').html(suggestionsHtml);
                    }else {
                        $('#diseaseSuggestion').html('');
                    }
                }
            });
        }else{
            $("#diseaseSuggestion").html('');
        }
        
    });
   
</script>
</body>
</html>


