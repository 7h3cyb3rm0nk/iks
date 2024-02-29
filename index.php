<?php
include "connection.php";
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title class=>AyurMeds</title>
    <link rel="stylesheet" href="./css/styles.css">
    
</head>
<body class="min-h-screen h-screen " >
    <h1 class="bg-slate-900 text-gray-200 text-center text-4xl">Indian Knowledge System</h1>
    <nav class="bg-slate-900 text-7xl min-h-[3.8rem] max-h-[5.3rem]">
     <section class="title text-6xl text-gray-200  montserrat-600 py-4 text-center">Ayur Meds</section>
     <section class="admin-login flex py-6">
<button href="admin/" class="text-4xl bg-slate-700  rounded-lg p-2 hover:text-slate-300 text-gray-100 relative bottom-[6.5rem] left-[92rem] ">Admin Login</button>
  
     </section>

     <div>
        
     </div>
    </nav>

    <main class="h-screen py-[9em] bg-slate-200 flex justify-center flex-col items-center gap-5" style="background: url('./assets/pngs/main-bg.png')">
    <section class="search flex py-[7rem]  opacity-80 w-[50%] bg-zinc-600 text-gray-200 text-2xl gap-3 h-[30%] justify-center rounded-lg items-center shadow-lg">
        <form action="" method="get" class="w-[100%] h-fit gap-4 flex justify-center align-center ">
       
        
        <p class=" self-center font-bold" >Search Remedies for</p>
            <select name="disease" id="disease" class="py-[0.2rem] h-[2em] text-slate-900 self-center px-2 rounded-lg">
            <?php
            
            $sql = "select * from diseases;";
            $result = $mysqli->query($sql);
            while($row  = $result->fetch_assoc()){
                $value = $row['name'];
                echo "
                <option value='$value'>$value</option>
                ";
            }

            ?>
            </select>
            <input type="submit" name="submit" value="search" class="rounded-lg bg-slate-800 text-gray-50 h-[2em] self-center px-2 hover:cursor-pointer ">
            </form>
            </section>
            <section class="search flex py-[7rem]  opacity-80  w-[50%] items-center  bg-zinc-600 text-gray-200 text-2xl gap-3 h-[30%] justify-center rounded-lg shadow-lg">
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
        <section class="result">
            hello
            <?php
            if( isset($_GET['submit'])){
                $disease = $_GET['disease'];
                echo $disease;
            }
            ?>

        </section>


</main>
    
</body>
</html>