<?php
include_once 'connection.php';
$param = $_GET['param'];

$emptyMetaData = '{"data":[{"apiVersion":{"version":"0.4.1"},"mobileapp":{"appName":"Digital Apps Mobile","appId":"DAM2","applications":[{"appId":"19","applicationName":"Tech Support","dashboards":[{"default":true,"showFilter":true,"pages":[{"defaultSizeY":1,"defaultSizeX":2,"index":1,"pageId":"18063","columns":6,"grid":[{"col":0,"sizeY":2,"width":300,"sizeX":3,"table":false,"stabColumns":[],"type":"pie","row":2,"chartId":"C180611","title":"Rejection Rates","height":300,"toShow":true,"dimensionsKeys":["LABEL"],"groupKeys":["COUNT"],"filter":[{"filters":["all"],"filterCategory":"Rejection Rates"}]},{"col":3,"sizeY":2,"width":300,"sizeX":3,"table":false,"stabColumns":[],"type":"pie","row":2,"chartId":"C180612","title":"Example1","height":300,"toShow":true,"dimensionsKeys":["LABEL"],"groupKeys":["COUNT"],"filter":[{"filters":["all"],"filterCategory":"Rejection Rates"}]},{"col":0,"sizeY":2,"width":300,"sizeX":3,"table":false,"stabColumns":[],"type":"pie","row":0,"chartId":"C180612","title":"Example2","height":300,"toShow":true,"dimensionsKeys":["LABEL"],"groupKeys":["COUNT"],"filter":[{"filters":["all"],"filterCategory":"Rejection Rates"}]},{"col":2,"sizeY":2,"width":300,"sizeX":3,"table":false,"stabColumns":[],"type":"pie","row":0,"chartId":"C180612","title":"Example0","height":300,"toShow":true,"dimensionsKeys":["LABEL"],"groupKeys":["COUNT"],"filter":[{"filters":["all"],"filterCategory":"Rejection Rates"}]}],"margins":[20,20]}],"dashboardName":"Empty Dashboard","subscribed":true,"dashboardVersion":8,"filters":[{"filterParams":{"values":[]},"filterId":1,"filterLabel":"Domain","mandatory":true,"defaultValue":null,"filterPrompt":"DOMAIN_CODE","filterType":"STRING"}],"dashboardId":"D1806"}]}]},"themes":{"themeName":"Smoke","backGroundColor":"Grey"},"user":{"userId":"hs28651","userName":"hs28651"}}],"success":true,"errmsg":null,"errorCode":null,"metaData":null,"userMessage":[]}';

$response = array(
    "status"=> "200",
    "statusText"=> "200 No Error",
    "headers"=> "",
    "responseText"=> $emptyMetaData,
    "responseState"=> "DONE"
    );
echo json_encode($response);
