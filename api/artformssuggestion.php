<?php
require_once '../connection.php';
$input = filter_input(INPUT_GET, 'query', FILTER_SANITIZE_SPECIAL_CHARS);
$input = trim($input);
$input = ucwords($input);
