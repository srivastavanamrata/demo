<?php
include_once 'connection.php';
$param = $_GET['param'];

$myDashboardData = '{"data":[{"APP_NAME":"Tech Support","DASHBOARD_NAME":"Empty Dashboard","DASHBOARD_ID":1909,"APP_ID":19},{"APP_NAME":"Genesis","DASHBOARD_NAME":"FEED Analysis","DASHBOARD_ID":1801,"APP_ID":18},{"APP_NAME":"Tech Support","DASHBOARD_NAME":"Test New Dashboard","DASHBOARD_ID":1908,"APP_ID":19},{"APP_NAME":"Genesis","DASHBOARD_NAME":"Most Active DataSources","DASHBOARD_ID":1804,"APP_ID":18},{"APP_NAME":"Tech Support","DASHBOARD_NAME":"IFW Dashboard","DASHBOARD_ID":1900,"APP_ID":19},{"APP_NAME":"Tech Support","DASHBOARD_NAME":"Report Dashboard","DASHBOARD_ID":1907,"APP_ID":19},{"APP_NAME":"Tech Support","DASHBOARD_NAME":"CLONE_1903","DASHBOARD_ID":1906,"APP_ID":19},{"APP_NAME":"Genesis","DASHBOARD_NAME":"SLA Status By Region","DASHBOARD_ID":1803,"APP_ID":18},{"APP_NAME":"Genesis","DASHBOARD_NAME":"Rejection Rates","DASHBOARD_ID":1806,"APP_ID":18}],"success":true,"errmsg":null,"errorCode":null,"metaData":null,"userMessage":[]}';

echo $myDashboardData;