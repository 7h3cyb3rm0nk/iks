    <!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>First-Aid | IKS</title>
        <link rel="stylesheet" href="../../css/styles.css">
    </head>
    <body class='bg-slate-300 text-slate-900 text-2xl'>

        <?php
        require "../../connection.php";
        if(filter_has_var(INPUT_GET, 'health')) {
            // echo "yea were in";
            $healthIssue = strtolower($_GET['health']);
            $sql = "select plantName,injuryProcedure,injuryType from `first-aid` where injuryType = '$healthIssue'";
            $result = mysqli_query($mysqli,$sql);
        
        if($result->num_rows > 0){
            while($row = $result->fetch_assoc()){   
                $plant = strtolower($row['plantName']);
                $healthProcedure = $row['injuryProcedure']; 
                $injuryType = $row['injuryType'];

                echo "
                    <center>
                    <div class='py-10 uppercase underline font-bold'>$plant</div>
                    <img height='630' width='630' alt='herbs photo' src='../../assets/first-aids-img/$plant.jpg'>
                    <div class='uppercase font-bold underline pt-10'>Remedie for $injuryType using $plant</div>
                    <div class='px-10 mx-6'>$healthProcedure</div>
                    </center>
                    ";



            }
        } else{
            echo "<h1 class='text-4xl font-bold text-orange-900 bg-slate-200 rounded-lg h-fit p-4'>NO REMEDIES FOUND</h1>";
        }
           

        }
        ?>

    </body>
    </html>
