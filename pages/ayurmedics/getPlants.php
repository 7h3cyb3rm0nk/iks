<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Plants | Ayurmedics | IKS</title>
    <link rel="stylesheet" href="/css/styles.css">
</head>
<body class="min-h-screen h-screen max-h-fit">
<?php include __DIR__ . "/../header.php"; ?> 
<!-- section to display content -->

<section class="plantContent bg-slate-300 h-full py-12 flex justify-center" style="background-image:url('../../assets/jpgs/plants-bg.jpg');">
    <?php
    require_once __DIR__ . "/../../connection.php";
    if(filter_has_var(INPUT_GET, 'plantName')) {
        $plantName = strtolower(htmlspecialchars($_GET['plantName']));

       

        $sql = "select distinct plants.name , plants.scientific_name, plants.description, plants.image from plants where plants.name = ?";
        $stmt = $mysqli->prepare($sql);
        $stmt->bind_param("s", $plantName);
        $stmt->execute();   
        $result = $stmt->get_result();
      
       if($result->num_rows > 0){
        while($row = $result->fetch_assoc()){
            $plantName = htmlspecialchars($row['name']);
            $plantScientificName = htmlspecialchars($row['scientific_name']);
            $plantDescription = $row['description'];

            // display as list
            echo "
            <section class='bg-gray-100 bg-opacity-90  w-[80%] min-h-[65vh] overflow-auto mx-auto rounded-md shadow-lg p-4 grid grid-cols-1 sm:grid-cols-8 gap-8 grid-rows-2' >
            <div class='text-3xl flex flex-col sm:col-span-2 font-extrabold text-zinc-800 col-span-4'>$plantName
            <img src='/{$row['image']}'  class='sm:h-[8em] h-[4em] sm:w-fit mt-4 w-[6em] rounded'>
            </div>
            <div class='sm:col-span-6 flex  ml-8 text-2xl items-center justify-start'>
            <section class='font-semibold self-center'>Scientific Name: <span class='text-slate-700 font-bold'> $plantScientificName </span></section>
            
            </div>
            <!-- description -->
            <div class='col-span-8 text-left font-semibold text-xl px-8 text-slate-800'>
            $plantDescription
            </div>
            
            ";


        }
       } else{
        echo "<h1 class='text-3xl font-bold text-orange-900 bg-slate-200 rounded-lg h-fit p-4'>NO PLANTS FOUND</h1>";
       }
       $stmt->close();
        

    }
    ?>

</section>
<!-- plantContent Section ends -->
</body>
</html>
