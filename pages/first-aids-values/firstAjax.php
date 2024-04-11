<?php
require "../../connection.php";
$search = $_POST["query"];

// Perform your SQL query here to fetch suggestions based on the user's input
// Example SQL query: SELECT * FROM suggestions WHERE suggestion_column LIKE '%$search%'

// Replace the following lines with your actual SQL query
$sql = "SELECT * FROM `first-aid` WHERE injuryType LIKE '$search%'";
$result = mysqli_query($mysqli, $sql);

if(mysqli_num_rows($result) > 0){
    while($row = mysqli_fetch_assoc($result)){
        echo "$row[injuryType]";
    }
} else{
    echo "<p>No suggestions found</p>";
}
?>
