<?php
include "../connection.php"
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin | AyurMeds</title>
    <link rel="stylesheet" href="../css/styles.css">
</head>
<body>
    
<nav class=" flex bg-slate-900  text-gray-400   justify-end text-4xl py-3 pb-4 ">
    <main class="text-gray-200 mr-[7em] text-6xl  montserrat-600 font-bold">AyurMeds</main> <aside class="text-gray-200 self-end bg-slate-700 rounded-lg p-2 ">Admin Dashboard</aside> 
</nav>
    <section class="content">
        <section class="add">
            <h1>Add</h1>
            <form action="">
                <select name="plants" id="plants" class="plants">
                    
                    <?php
                    $sql = "select name from plants";
                    $result = $mysqli->query($sql);
                    
                    if(!$result) {
                        die("Error: ". $mysqli->error);
                    }
                    if($result->num_rows > 0){
                    while($row = $result->fetch_assoc())
                    {
                        
                        $value = $row['name'];
                        echo "
                        <option value='$value'>$value</option>
                        ";
                    }
                    }
                    else {
                        echo "No plants found";
                    }
                    // $mysqli->close();
                    ?>
                   
                    
                </select>
                <select name="category" id="" class="category">
                <?php
                    $sql = "select type from categories";
                    $result = $mysqli->query($sql);
                    
                    if(!$result) {
                        die("Error: ". $mysqli->error);
                    }
                    if($result->num_rows > 0){
                    while($row = $result->fetch_assoc())
                    {
                        
                        $value = $row['type'];
                        echo "
                        <option value='$value'>$value</option>
                        ";
                    }
                    }
                    else {
                        echo "No categories found";
                    }
                    // $mysqli->close();
                    ?>
                </select>
            </form>
        </section>
    </section>
</body> 
</html>