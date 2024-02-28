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
<body class="h-screen">
    
<nav class=" flex bg-slate-900  text-gray-400   justify-end text-4xl py-3 pb-4 ">
    <main class="text-gray-200 mr-[7em] text-6xl  montserrat-600 font-bold">AyurMeds</main> <aside class="text-gray-200 self-end bg-slate-700 rounded-lg p-2 ">Admin Dashboard</aside> 
</nav>
    <section class="content h-full bg-gray-200 ">
        <section class="add flex flex-col gap-[4em] items-center">
            <h1 class="text-slate-900 text-2xl w-[35%] mt-3 rounded-lg text-center bg-slate-500 font-bold">Add</h1>
            <div class="container max-w-fit bg-gray-300 p-4 rounded-lg ">
            <form action="" method="post" class="flex flex-col gap-3 text-center">
                <select name="plants" id="plants" class="plants text-center rounded-md" >
                    
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
                        <option value='$value' class='text-center'>$value</option>
                        ";
                    }
                    }
                    else {
                        echo "No plants found";
                    }
                    // $mysqli->close();
                    ?>
                   
                    
                </select>
                <select name="category" id="" class="category text-center rounded-md">
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
                <select name="disease" id="" class="disease text-center rounded-md">
                <?php
                    $sql = "select name from diseases";
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
                        echo "No categories found";
                    }
                    // $mysqli->close();
                    ?>
                </select>
                <textarea name="usage" id="usage" cols="30" rows="10" placeholder="Usage Details" class="text-center rounded-md"></textarea>
                <input type="submit" value="submit" class="bg-slate-900 text-gray-100 px-1 py-1 rounded-lg hover:cursor-pointer" name="submit">
                
            </form>
            <?php
            if(isset($_POST['submit']))
            {
                $plant_name = $_POST['plants'];
                $plant_category = $_POST['category'];
                $disease = $_POST['disease'];
                $plant_usage = $_POST['usage'];

                // echo "$plant_name:$plant_category:$disease:$plant_usage";

                // $sql = "insert into details values('$plant_name', $plant_category', '$disease', ?)";
                $stmt = $mysqli->prepare("insert into details values(?, ?, ?, ?)");
                $stmt->bind_param("ssss", $plant_name, $plant_category, $disease, $plant_usage);
                $stmt->execute();
                $result = $stmt->get_result();
                echo $result;



            }
            ?>
            </div>
        </section>
    </section>
</body> 
</html>