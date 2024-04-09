<?php
// connection line
require_once "../connection.php";
if (isset($_GET['query'])) {
    $input = filter_input(INPUT_GET, 'query', FILTER_SANITIZE_SPECIAL_CHARS);
    $input = trim($input);
    $input = ucwords($input);
    $query = "SELECT * FROM art_details WHERE art_name = '$input'";
    $result = mysqli_query($mysqli, $query);
    if (mysqli_num_rows($result) > 0) {
        $result = mysqli_query($mysqli, $query);
        $artdetails = mysqli_fetch_assoc($result);
        echo '<section class="search-result-section" id="search-result-section" style="display: none;">
        <img src="../assets/images-art-forms-jpg/' . $artdetails['art_name'] . '.jpg" alt="' . $artdetails['art_name'] . '" class="search-result-img">
        <div class="result-details">
            <h2 class="result-heading">' . $artdetails['art_name'] . "(" . $artdetails['time_period'] . ")" .  '</h2>
            <div class="result-content">
                ' . $artdetails['art_description'] . '
            </div>
        </div>
      </section>' .
            '<script>
            document.getElementById("search-result-section").style.display = "block";
            document.getElementById("search-result-section").scrollIntoView({ behavior: "smooth" });
          </script>';
    } else {
        $artdetails = "The artform that you have entered " . $input . " does not exist in our database";
        echo '<section class="search-result-section" id="search-result-section" style="display: none;">
              <div class="result-content">
                  ' . $artdetails . '
              </div>
          </div>
        </section>' .
            '<script>
              document.getElementById("search-result-section").style.display = "block";
              document.getElementById("search-result-section").scrollIntoView({ behavior: "smooth" });
            </script>';
    }
}
