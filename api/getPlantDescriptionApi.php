<?php
require_once __DIR__ . "/../connection.php";
if(filter_has_var(INPUT_GET, "query")) {

    $query = htmlspecialchars($_GET['query']);

    $sql = "select description from plants where name = ? limit 1;";
    $stmt = $mysqli->prepare($sql);
    $stmt->bind_param("s", $query);
    $stmt->execute();
    $result = $stmt->get_result();


    if($result->num_rows > 0) {
        while($row = $result->fetch_assoc()) {
            echo $row['description'];
        }
    }
    $stmt->close();
}
?>