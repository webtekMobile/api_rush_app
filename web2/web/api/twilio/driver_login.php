<?php
 
 include 'vendor/autoload.php';
use Twilio\Rest\Client;
 
$mobile=parsejson()['mobile'];
$otp=rand(1001,9999);
 $token1 = openssl_random_pseudo_bytes(20);

//Convert the binary data into hexadecimal representation.

$driver_token = bin2hex($token1);
  $chain=false;


  if(doexist('tbl_driver',[
  
  
  'driver_mobile'=>['=',$mobile],

  ]))
  {
   
   
 $sms_text = 'Rush Login verification code is '. $otp;

 
$sid    = "ACedd5f913a4f5123ddfbcb4a3744886bb";
$token  = "422680c1e24675f7b374fa355f8c2010";
$twilio = new Client($sid, $token);
 
$message = $twilio->messages
                  ->create($mobile, // to
                           array(  
                               "messagingServiceSid" => "MGec5f4b57781b02e6cd043f8dbb598dfd",      
                               "body" => $sms_text
                           )
                  );
 if($message->sid)
{
  $chain=true;

  $data=fetch_records(where_this(inner_join('tbl_driver=driver_id,driver_fname,driver_lname,driver_mobile,email,latitude,longitude,status_driver,created_at,updated_by,status_location|tbl_driver_auth=driver_auth_id,driver_id,otp,session_key,driver_token,driver_password,driver_email_verified,driver_login_at,driver_logout_at,driver_route,driver_description,driver_vehichle,deiver_auth_status',
[
  
  'tbl_driver_auth'=>'tbl_driver.driver_id=tbl_driver_auth.driver_id',
]),[
     
     'tbl_driver.driver_mobile'=>"='$mobile' ",
  ]));

                      


  $chain=false;
   if(update('tbl_driver_auth',[
    'otp' => $otp,
    'driver_token' =>$driver_token,
     ],['driver_id'=>$data[0]['driver_id'],]))
     {
   
     
       json_bind($data[0]['driver_id'],200,'Otp Send Successfully',true);
     } 
    else
      {
         json_bind($data[0]['driver_id'],200,'Otp Send Successfully',true);
      }



   
}
else
{
    json_bind([],201,'Otp Not Send ',true);
}
  }
  else
  {
            
    if(insertat('tbl_driver',[
    'driver_mobile' => $mobile,
  

  ])){
       $driver_id=last_inserted_id('tbl_driver');
 insertat('tbl_driver_auth',[
    'otp' => $otp,
    'driver_token' =>$driver_token,
    'driver_id'=>$driver_id,
  

  ]);
    $sms_text = 'Rusher Login verification code is '. $otp;

 
$sid    = "ACedd5f913a4f5123ddfbcb4a3744886bb";
$token  = "422680c1e24675f7b374fa355f8c2010";
$twilio = new Client($sid, $token);
 
$message = $twilio->messages
                  ->create($mobile, // to
                           array(  
                             "messagingServiceSid" => "MG1210fe83130b2b5fe9512aacd10df8b1",      
                               "body" => $sms_text
                           )
                  );
 if($message->sid)
{
  json_bind($driver_id,200,'Otp Send Successfully',true);
}
  else
  {
json_bind($driver_id,201,'Otp Not Send',false);
  }
    }
  
   
   
  }

 






?>