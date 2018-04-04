<?php
include_once 'connection.php';
$param = $_GET['param'];


$data = file_get_contents("DEMOASSETS\DEMOASSETS\\".$param."\data.json");
/*if($param == 'feedAnalysis') {
	$demoAssets ='filterAnalysis'
	$data = file_get_contents("DEMOASSETS\DEMOASSETS\FEEDAnalysis\data.json");
} else if() {

}*/


echo $data;