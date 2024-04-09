    <!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>First-Aid | IKS</title>
        <link rel="stylesheet" href="../../css/styles.css">
    </head>
    <body class='bg-amber-700 text-amber-950 text-2xl'>

        <?php
        ini_set('display_errors', 1);   
        ini_set('display_startup_errors', 1);
        error_reporting(E_ALL);
        require "../../connection.php";
        if(filter_has_var(INPUT_GET, 'health')) {
            $healthIssue = strtolower(htmlspecialchars($_GET['health']));
            $sql = "select plantName,injuryProcedure,injuryType from `first-aid` where injuryType = '$healthIssue'";
            $result = mysqli_query($mysqli,$sql);
        
        if($result->num_rows > 0){
            while($row = $result->fetch_assoc()){   
                $plant = htmlspecialchars($row['plantName']);
                $healthProcedure = htmlspecialchars($row['injuryProcedure']);
                $injuryType = $row['injuryType'];


                echo "
                    <center>
                    <div class='py-10 uppercase underline font-bold'>$plant</div>
                    <br>
                    <div class='uppercase font-bold underline'>Remedie for $injuryType</div>
                    <br>
                    <div>$healthProcedure</div>
                    </center>
                    ";



            }
        } else{
            echo "<h1 class='text-3xl font-bold text-orange-900 bg-slate-200 rounded-lg h-fit p-4'>NO REMEDIES FOUND</h1>";
        }
           

        }
        ?>

    </body>
    </html>
