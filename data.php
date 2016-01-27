<?php
header("Content-Type: application/json;charset=utf8");
$movies = file_get_contents('./movies.json');
echo $movies;
?>
