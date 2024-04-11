<?php
require_once __DIR__ . "/../connection.php";


if(filter_has_var(INPUT_GET, 'query')){
    $query = $_GET['query'];
    $queryLike = "%$query%";

    $stmt = $mysqli->prepare("select distinct name from diseases,details where  diseases.name = details.disease and diseases.name like ? limit 5  ");
    $stmt->bind_param("s", $queryLike);
    $stmt->execute();
    $result = $stmt->get_result();
    if($result->num_rows > 0){
        $suggestions = array();
        while($row = $result->fetch_assoc()){
            $suggestions[] = ucfirst($row['name']);
        }
        echo json_encode($suggestions);
    }
    else {
        echo "";
    }
    $stmt->close();
    
}
$mysqli->close();
?>