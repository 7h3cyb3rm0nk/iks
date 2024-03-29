<?php
require_once __DIR__ . "/../../connection.php";


if(filter_has_var(INPUT_GET, 'query')){
    $query = $_GET['query'];
    $queryLike = "%$query%";

    $stmt = $mysqli->prepare("select name from plants where name like ? limit 5");
    $stmt->bind_param("s", $queryLike);
    $stmt->execute();
    $result = $stmt->get_result();
    if($result->num_rows > 0){
        $suggestions = array();
        while($row = $result->fetch_assoc()){
            $suggestions[] = $row['name'];
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