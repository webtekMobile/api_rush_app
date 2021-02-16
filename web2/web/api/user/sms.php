<?php
function createShipment($params)
{
try{
$json_params = json_encode( $params );
$url = 'https://www.pickrr.com/api/place-order/';
//open connection
$ch = curl_init();
//set the url, number of POST vars, POST data
curl_setopt($ch,CURLOPT_URL, $url);
curl_setopt($ch,CURLOPT_POSTFIELDS, $json_params);
curl_setopt( $ch, CURLOPT_HTTPHEADER, array('Content-Type:application/json'));
curl_setopt( $ch, CURLOPT_RETURNTRANSFER, true );
//execute post
$result = curl_exec($ch);
$result = json_decode($result, true);
//close connection
curl_close($ch);
if(gettype($result)!="array")
throw new \Exception( print_r($result, true) . "Problem in connecting with Pickrr");
if($result['err']!="")
throw new \Exception($result['err']);
return $result['tracking_id'];
}
catch (\Exception $e) {
echo $e;
}
}
  ?>