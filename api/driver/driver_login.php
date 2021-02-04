<?php
 
     function driver_login_post(){
   
  global $chain;
  $chain=false;
$mobile=parsejson()['mobile'];
$otp=rand(999999,9999999);
 $token1 = openssl_random_pseudo_bytes(20);

//Convert the binary data into hexadecimal representation.

$driver_token = bin2hex($token1);

  if(doexist('tbl_driver',[
  
  
  'driver_mobile'=>['=',$mobile],

  ]))
  {
$sms_text = urlencode('Your verification code is '. $otp);

$api_url="http://sendsms.designhost.in/index.php/smsapi/httpapi/?uname=aaratechnologies&password=123456&sender=ATAARA&receiver=".$mobile."&route=TA&msgtype=3&sms=".$sms_text;
//Submit to server



$response = file_get_contents( $api_url);
 

if($response['msgid']=='M')
{
  $chain=true;

	$data=fetch_records(where_this(inner_join('tbl_driver=driver_id,driver_fname,driver_lname,driver_mobile,email,latitude,longitude,status_driver,created_at,updated_by,status_location|tbl_driver_auth=driver_auth_id,driver_id,otp,session_key,driver_token,driver_password,driver_email_verified,driver_login_at,driver_logout_at,driver_route,driver_description,driver_vehichle,deiver_auth_status',
[
  
  'tbl_driver_auth'=>'tbl_driver.driver_id=tbl_driver_auth.driver_id',
]),[
     
     'tbl_driver.driver_mobile'=>"='$mobile' ",
  ]));


		json_bind($data,200,'Otp Send Successfully',true);
}
else
{
		json_bind([],201,'Otp Not Send ',true);
}
  }
  else 
  {
       $product_image=upload_raw($_POST['image']);
      
    if(insertat('tbl_driver',[
    'driver_mobile' => $mobile,
  

  ])){
       $driver_id=last_inserted_id('tbl_driver');
        insertat('tbl_driver_auth',[
    'otp' => $otp,
    'driver_token' =>$driver_token,
    'driver_id'=>$driver_id,
  

  ]);
    $sms_text = urlencode('Your verification code is '. $otp);

$api_url="http://sendsms.designhost.in/index.php/smsapi/httpapi/?uname=aaratechnologies&password=123456&sender=ATAARA&receiver=".$mobile."&route=TA&msgtype=3&sms=".$sms_text;
//Submit to server


$response = file_get_contents( $api_url);
// print_r($response['msgid']);
// exit;

//return $response['msgid'];
if($response['msgid']=='M')
{
  json_bind($driver_id,200,'Otp Send Successfully',true);
}
  else
  {
json_bind($driver_id,201,'Otp Not Send',false);
  }
    }
  
   
   
  }
}
 






?>