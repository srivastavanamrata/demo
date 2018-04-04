<?php
include_once 'connection.php';
$param = $_GET['param'];

$dashboardData = '{"data":[{"LABEL":"Test Dash","ID":1903},{"LABEL":"FEED Analysis","ID":1801},{"LABEL":"SLA Status By Region","ID":1803},{"LABEL":"Test Demo","ID":1905},{"LABEL":"Rejection Rates","ID":1806},{"LABEL":"IFW Dashboard","ID":1900},{"LABEL":"Report Dashboard","ID":1907},{"LABEL":"Filter  Analysis","ID":1802},{"LABEL":"SLA Status By Feed ID","ID":1805},{"LABEL":"Test Dash","ID":1901},{"LABEL":"Most Active DataSources","ID":1804},{"LABEL":"SLA Analysis","ID":1800},{"LABEL":"Test Dash","ID":1904}],"success":true,"errmsg":null,"errorCode":null,"metaData":null,"userMessage":[]}';

$response = array(
    "status"=> "200",
    "statusText"=> "200 No Error",
    "headers"=> "",
    "responseText"=> $dashboardData,
    "responseState"=> "DONE"
    );
echo json_encode($response);