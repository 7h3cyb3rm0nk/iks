<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Remedies | Ayurmedics | IKS</title>
    <link rel="stylesheet" href="/css/styles.css">
</head>
<body class="min-h-screen ">
<?php include __DIR__ . "/../header.php"; ?>
<script src="/js/scripts.js"></script>
<section class='plantContent bg-slate-300 w-full overflow-auto min-h-[100vh] py-12 flex flex-row flex-wrap-start gap-3  px-12  justify-center' style="background-image:url('../../../assets/jpgs/plants-bg.jpg');">

<!-- section to display content -->


    <?php
    require_once __DIR__ . "/../../connection.php";
    if(filter_has_var(INPUT_GET, 'diseaseSubmit')) {
        $diseaseName = strtolower(htmlspecialchars($_GET['diseaseName']));

       

        $sql = "select plants.name, plants.scientific_name,plants.image, details.usagedetails from plants inner join details on details.plant = plants.name where details.disease = ?";
        $stmt = $mysqli->prepare($sql);
        $stmt->bind_param("s", $diseaseName);
        $stmt->execute();   
        $result = $stmt->get_result();
      
       if($result->num_rows > 0){
        while($row = $result->fetch_assoc()){
            $plantName = htmlspecialchars($row['name']);
            $plantScientificName = htmlspecialchars($row['scientific_name']);
            $usageDetails = $row['usagedetails'];

            // display as list
            echo "
            
            <section class='bg-gray-100 w-[40%] h-[50vh] hover:scale-105 overflow-auto mx-auto rounded-md shadow-md p-4 grid grid-cols-8 gap-8 grid-rows-2 '>
            <div class='text-3xl flex flex-col col-span-2 font-extrabold text-zinc-800 '>$plantName
            <img src='/{$row['image']}'  class='h-[8em] w-[6em] rounded'>
            </div>
            <div class='col-span-6 flex  ml-8 text-2xl items-center justify-start'>
            <section class='font-semibold self-center'>Scientific Name: <span class='text-slate-700 font-bold'> $plantScientificName </span></section>
            
            </div>
            <!-- description -->
            <div class='col-span-8 text-left font-semibold text-xl px-8 text-slate-800'>
            $usageDetails
            </div>
            </section>
            ";


        }
       } else{
        echo "<h1 class='text-3xl font-bold text-orange-900 bg-slate-200 rounded-lg h-fit p-4'>NO REMEDIES FOUND</h1>";
       }
       $stmt->close();
        

    }
    ?>
</section>

<!-- plantContent Section ends -->
</body>
</html>
