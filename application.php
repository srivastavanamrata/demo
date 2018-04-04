<?php
include_once 'connection.php';
$param = $_GET['param'];

$applicationData = '{"data":[{"APP_NAME":"18 - Genesis","APP_ID":18},{"APP_NAME":"19 - Tech Support","APP_ID":19}],"success":true,"errmsg":null,"errorCode":null,"metaData":null,"userMessage":[]}';

$response = array(
    "status"=> "200",
    "statusText"=> "200 No Error",
    "headers"=> "",
    "responseText"=> $applicationData,
    "responseState"=> "DONE"
    );
echo json_encode($response);