<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Plants | Ayurmedics | IKS</title>
    <link rel="stylesheet" href="../../css/styles.css">
</head>
<body class="min-h-screen h-screen max-h-fit">
<?php include __DIR__ . "/../header.php"; ?> 
<!-- section to display content -->

<section class="plantContent bg-slate-300 h-full py-12 flex justify-center">
    <?php
    require_once __DIR__ . "/../../connection.php";
    if(filter_has_var(INPUT_GET, 'plantName')) {
        $plantName = strtolower(htmlspecialchars($_GET['plantName']));

       

        $sql = "select distinct plants.name , plants.scientific_name ,details.category from plants inner join details on plants.name = details.plant where plants.name = ?";
        $stmt = $mysqli->prepare($sql);
        $stmt->bind_param("s", $plantName);
        $stmt->execute();   
        $result = $stmt->get_result();
      

        while($row = $result->fetch_assoc()){
            $plantName = htmlspecialchars($row['name']);
            $plantScientificName = htmlspecialchars($row['scientific_name']);
            $plantCategory = htmlspecialchars($row['category']);

            // display as list
            echo "
            <section class='bg-gray-100 w-[80%] h-[10em] max-h-fit mx-auto rounded-md shadow-md p-4 grid grid-cols-8'>
            <div class='text-3xl flex flex-col col-span-1 font-extrabold text-zinc-800 '>$plantName
            <img src='https://pixabay.com/vectors/group-user-icon-person-personal-2935521/' class='h-[3em] w-[3em]'>
            </div>
            <div class='col-span-7'>
            <section class='font-semibold'>Scientific Name: <span class='text-slate-800 font-bold'> $plantScientificName </span></section>
            
            </div>
            
            <section>
            ";


        }
        

    }
    ?>

</section>
<!-- plantContent Section ends -->
</body>
</html>
