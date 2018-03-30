<?php

header("Access-Control-Allow-Methods: POST");
header("Access-Control-Max-Age: 3600");
header("Access-Control-Allow-Headers: Content-Type, Access-Control-Allow-Headers, Authorization, X-Requested-With");

include_once 'connection.php';

// get posted data

$content = file_get_contents("php://input");

$data = file_put_contents('file.txt', $content); 
#echo $fileData = file_get_contents('file.txt');
echo '{';
        echo '"message": "Product was created."';
        #echo '"data":'.$fileData;
    echo '}';
 exit;   
// set product property values
$product->dashboardJson = $data;
 
// create the product
if($product->update()){
    echo '{';
        echo '"message": "Product was created."';
    echo '}';
}
 
// if unable to create the product, tell the user
else{
    echo '{';
        echo '"message": "Unable to create product."';
    echo '}';
}