<?php
   include 'twilio/vendor/autoload.php';
use Twilio\Rest\Client;
function user_login_post()
{
  
global $chain;
$chain=true;

$otp=rand(1001,9999);
$mobile=parsejson()['mobile'];
 $token1 = openssl_random_pseudo_bytes(20);


 
$sid    = "ACedd5f913a4f5123ddfbcb4a3744886bb"; 
$token  = "422680c1e24675f7b374fa355f8c2010"; 
$twilio = new Client($sid, $token); 
 
$message = $twilio->messages 
                  ->create($mobile, // to 
                           array(  
                               "messagingServiceSid" => "MG1210fe83130b2b5fe9512aacd10df8b1",      
                               "body" => $otp
                           ) 
                  ); 
 if($message->sid)
{
  echo "Message Sent!";
}
else
{
  echo "Message Not Sent";
}
//Convert the binary data into hexadecimal representation.


}
function user_login_get()
{
  //prx("hello");
}


?>