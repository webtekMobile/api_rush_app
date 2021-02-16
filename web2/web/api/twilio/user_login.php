<?php
  

   include 'vendor/autoload.php';
use Twilio\Rest\Client;
global $chain;
$chain=true;

$otp=rand(1001,9999);
$mobile=parsejson()['mobile'];
 $token1 = openssl_random_pseudo_bytes(20);
$user_token = bin2hex($token1);
  $chain=false;
  if(doexist('tbl_user',[
  
  
  'mobile'=>['=',$mobile],

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
    //prx($message);
 if($message->sid)
{
 $chain=true;
    $data12=fetch_records(where_this(getall('tbl_user'),[
      'tbl_user.mobile'=>"='$mobile' ",
  ]));
 
 
  $chain=false;
  $chain=false;
   if(update('tbl_user_auth',[
    'otp' => $otp,
    'auth_key' =>$user_token,
     ],['user_id'=>$data12[0]['user_id'],]))
     {
   
     
       json_bind($data12[0]['user_id'],200,'Otp Send Successfully',true);
     }  


 
}
else
{
  json_bind([],201,'Otp Not Send ',false);
}
  }
//Convert the binary data into hexadecimal representation.

 
 

  else
  {
    json_bind([],201,'User Not Register',false);
  }



?>