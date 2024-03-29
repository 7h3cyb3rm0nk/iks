<?php
$env = parse_ini_file('.env');

$username = $env['USERNAME'];
$password = $env['PASSWORD'];
$host = "localhost";
$database = "indian-knowledge-system";


$mysqli = new mysqli($host, $username, $password, $database);
