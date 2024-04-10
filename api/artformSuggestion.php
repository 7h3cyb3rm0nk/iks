<?php
// artforms suggestions
require_once '../connection.php';
if (isset($_GET['query'])) {
    $input = filter_input(INPUT_GET, 'query', FILTER_SANITIZE_SPECIAL_CHARS);
    $input = trim($input);
    $input = strtolower($input);
    $input = ucwords($input);

    // Corrected SQL syntax and using prepared statement to prevent SQL injection
    $query = "SELECT art_name FROM art_details WHERE art_name LIKE ?";
    $stmt = $mysqli->prepare($query);
    $stmt->bind_param("s", $inputParam);
    $inputParam = "%" . $input . "%";
    $stmt->execute();
    $result = $stmt->get_result();

    if ($result->num_rows > 0) {
        $suggestedNames = [];
        while ($row = $result->fetch_assoc()) {
            $suggestedNames[] = $row['art_name'];
        }
        $suggestedString = implode(', ', $suggestedNames);
        echo '<span class="relative bottom-3">Suggestions: ' . $suggestedString . '</span>';
        echo '<script>
                document.getElementById("artformsuggestion").style.display = "block";
            </script>';
    } else {
        echo '<span class="relative bottom-3"> No Suggestions found </span>';
        echo '<script>
                document.getElementById("artformsuggestion").style.display = "block";
            </script>';
    }
}
