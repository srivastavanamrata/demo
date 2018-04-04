<?php
include_once 'connection.php';

#header("Access-Control-Allow-Origin: *");
#header("Content-Type: application/json; charset=UTF-8"); 

$fh = file_get_contents('file.txt');
$response = array(
    "status"=> "200",
    "statusText"=> "200 No Error",
    "headers"=> "",
    "responseText"=> $fh,
    "responseState"=> "DONE"
    );
echo json_encode($response);

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