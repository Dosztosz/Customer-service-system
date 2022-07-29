<?php

//metoda do parametru
$methodParams = '{
    "storage_id": "bl_1"
}';
//polaczenie z mysql
require_once "../connect.php";
require_once "../api.php";
//polaczenie z baselinkerem
$apiParams = [
    "token" => $token,
    "method" => "getProductsQuantity",
    "parameters" => $methodParams
];

$curl =
curl_init("https://api.baselinker.com/connector.php");
curl_setopt($curl, CURLOPT_POST, 1);
curl_setopt($curl, CURLOPT_POSTFIELDS,
http_build_query($apiParams));
curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);
$response = curl_exec($curl);

$out = json_decode($response, true);

$order = $out['products'];
foreach($out['products'] as $order){

    foreach($order['variants'] as $wariant)
    {
    //zebranie informacji z JSONA
    $id = $wariant['variant_id'];
    $ilosc = $wariant['quantity'];
    $sql = "UPDATE warehouse_baselinker SET ilosc = $ilosc WHERE id_baselinker=$id";
    if(!mysqli_query($conn, $sql))
        {
         die('Error : ' . mysql_error());
        }
        else{
            header('location: ../baselinker_warehouse.php');
        }
    }

}
?>