<?php
include_once 'connection.php';

$data = file_get_contents("DEMOASSETS\DEMOASSETS\metadata.json");

echo $data;