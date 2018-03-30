<?php
include_once 'connection.php';
$param = $_GET['param'];

$outputColumnData = '{"data":[{"OUTPUT_COL_NAME":"EVENT_NODE","QUERY_COLUMN":"EVENT_NODE"},{"OUTPUT_COL_NAME":"EVENT_NAME","QUERY_COLUMN":"EVENT_NAME"},{"OUTPUT_COL_NAME":"EVENT_STATUS","QUERY_COLUMN":"EVENT_STATUS"}],"success":true,"errmsg":null,"errorCode":null,"metaData":null,"userMessage":[]}';

echo $outputColumnData;