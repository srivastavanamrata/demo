<?php
$param = $_GET['param'];
$data = "";
if($param == 'read') {

    $data = file_get_contents('file.txt');

} elseif ($param == 'application') {

    include_once 'connection.php';

    $data = '{"data":[{"APP_NAME":"18 - Genesis","APP_ID":18},{"APP_NAME":"19 - Tech Support","APP_ID":19}],"success":true,"errmsg":null,"errorCode":null,"metaData":null,"userMessage":[]}';

} elseif ($param == 'dashboard') {

    include_once 'connection.php';

    $data = '{"data":[{"LABEL":"Test Dash","ID":1903},{"LABEL":"FEED Analysis","ID":1801},{"LABEL":"SLA Status By Region","ID":1803},{"LABEL":"Test Demo","ID":1905},{"LABEL":"Rejection Rates","ID":1806},{"LABEL":"IFW Dashboard","ID":1900},{"LABEL":"Report Dashboard","ID":1907},{"LABEL":"Filter  Analysis","ID":1802},{"LABEL":"SLA Status By Feed ID","ID":1805},{"LABEL":"Test Dash","ID":1901},{"LABEL":"Most Active DataSources","ID":1804},{"LABEL":"SLA Analysis","ID":1800},{"LABEL":"Test Dash","ID":1904}],"success":true,"errmsg":null,"errorCode":null,"metaData":null,"userMessage":[]}';
} elseif ($param == "emptyMetaData") {
    
    include_once 'connection.php';

    $data = '{"data":[{"apiVersion":{"version":"0.4.1"},"mobileapp":{"appName":"Digital Apps Mobile","appId":"DAM2","applications":[{"appId":"19","applicationName":"Tech Support","dashboards":[{"default":true,"showFilter":true,"pages":[{"defaultSizeY":1,"defaultSizeX":2,"index":1,"pageId":"18063","columns":6,"grid":[{"col":0,"sizeY":2,"width":300,"sizeX":3,"table":false,"stabColumns":[],"type":"pie","row":2,"chartId":"C180611","title":"Rejection Rates","height":300,"toShow":true,"dimensionsKeys":["LABEL"],"groupKeys":["COUNT"],"filter":[{"filters":["all"],"filterCategory":"Rejection Rates"}]},{"col":3,"sizeY":2,"width":300,"sizeX":3,"table":false,"stabColumns":[],"type":"pie","row":2,"chartId":"C180612","title":"Example1","height":300,"toShow":true,"dimensionsKeys":["LABEL"],"groupKeys":["COUNT"],"filter":[{"filters":["all"],"filterCategory":"Rejection Rates"}]},{"col":0,"sizeY":2,"width":300,"sizeX":3,"table":false,"stabColumns":[],"type":"pie","row":0,"chartId":"C180612","title":"Example2","height":300,"toShow":true,"dimensionsKeys":["LABEL"],"groupKeys":["COUNT"],"filter":[{"filters":["all"],"filterCategory":"Rejection Rates"}]},{"col":2,"sizeY":2,"width":300,"sizeX":3,"table":false,"stabColumns":[],"type":"pie","row":0,"chartId":"C180612","title":"Example0","height":300,"toShow":true,"dimensionsKeys":["LABEL"],"groupKeys":["COUNT"],"filter":[{"filters":["all"],"filterCategory":"Rejection Rates"}]}],"margins":[20,20]}],"dashboardName":"Empty Dashboard","subscribed":true,"dashboardVersion":8,"filters":[{"filterParams":{"values":[]},"filterId":1,"filterLabel":"Domain","mandatory":true,"defaultValue":null,"filterPrompt":"DOMAIN_CODE","filterType":"STRING"}],"dashboardId":"D1806"}]}]},"themes":{"themeName":"Smoke","backGroundColor":"Grey"},"user":{"userId":"hs28651","userName":"hs28651"}}],"success":true,"errmsg":null,"errorCode":null,"metaData":null,"userMessage":[]}';
} elseif ($param == "myDashboardData") {
    include_once 'connection.php';
    $data = '{"data":[{"APP_NAME":"Tech Support","DASHBOARD_NAME":"Empty Dashboard","DASHBOARD_ID":1909,"APP_ID":19},{"APP_NAME":"Genesis","DASHBOARD_NAME":"FEED Analysis","DASHBOARD_ID":1801,"APP_ID":18},{"APP_NAME":"Tech Support","DASHBOARD_NAME":"Test New Dashboard","DASHBOARD_ID":1908,"APP_ID":19},{"APP_NAME":"Genesis","DASHBOARD_NAME":"Most Active DataSources","DASHBOARD_ID":1804,"APP_ID":18},{"APP_NAME":"Tech Support","DASHBOARD_NAME":"IFW Dashboard","DASHBOARD_ID":1900,"APP_ID":19},{"APP_NAME":"Tech Support","DASHBOARD_NAME":"Report Dashboard","DASHBOARD_ID":1907,"APP_ID":19},{"APP_NAME":"Tech Support","DASHBOARD_NAME":"CLONE_1903","DASHBOARD_ID":1906,"APP_ID":19},{"APP_NAME":"Genesis","DASHBOARD_NAME":"SLA Status By Region","DASHBOARD_ID":1803,"APP_ID":18},{"APP_NAME":"Genesis","DASHBOARD_NAME":"Rejection Rates","DASHBOARD_ID":1806,"APP_ID":18}],"success":true,"errmsg":null,"errorCode":null,"metaData":null,"userMessage":[]}';
} elseif ($param == "outputColumnData") {
    include_once 'connection.php';
    $data = '{"data":[{"OUTPUT_COL_NAME":"EVENT_NODE","QUERY_COLUMN":"EVENT_NODE"},{"OUTPUT_COL_NAME":"EVENT_NAME","QUERY_COLUMN":"EVENT_NAME"},{"OUTPUT_COL_NAME":"EVENT_STATUS","QUERY_COLUMN":"EVENT_STATUS"}],"success":true,"errmsg":null,"errorCode":null,"metaData":null,"userMessage":[]}';
}

echo $data;
/*$response = array(
    "status"=> "200",
    "statusText"=> "200 No Error",
    "headers"=> "",
    "responseText"=> $data,
    "responseState"=> "DONE"
    );
echo json_encode($response);*/

// query products
/*$stmt = $product->read();
$num = $stmt->rowCount();
 
// check if more than 0 record found
if($num>0){
 
    // products array
    $products_arr=array();
    $products_arr["records"]=array();
 
    // retrieve our table contents
    // fetch() is faster than fetchAll()
    // http://stackoverflow.com/questions/2770630/pdofetchall-vs-pdofetch-in-a-loop
    while ($row = $stmt->fetch(PDO::FETCH_ASSOC)){
        // extract row
        // this will make $row['name'] to
        // just $name only
        extract($row);
 
        $product_item=array(
            #"id" => $id,
            "dashboardJson" => $dashboardJson
        );
 
        array_push($products_arr["records"], $product_item);
    }
 
    echo json_encode($products_arr);
}
 
else{
    echo json_encode(
        array("message" => "No products found.")
    );
}*/