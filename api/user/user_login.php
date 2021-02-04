<?php
function user_login_post()
{
global $chain;
$chain=true;
$otp=rand(1001,9999);
$mobile=parsejson()['mobile'];
 $token1 = openssl_random_pseudo_bytes(20);
 

 
//Convert the binary data into hexadecimal representation.

$user_token = bin2hex($token1);
  if(doexist('tbl_user',[
  
  
  'mobile'=>['=',$mobile],

  ]))
  {
  $sms_text = urlencode('Your verification code is '. $otp);
  $api_url="http://sendsms.designhost.in/index.php/smsapi/httpapi/?uname=aaratechnologies&password=123456&sender=ATAARA&receiver=".$mobile."&route=TA&msgtype=3&sms=".$sms_text;



$response = file_get_contents($api_url);
 

if($response['msgid']=='M')
{
 $chain=true;
    $data12=fetch_records(where_this(getall('tbl_user'),[
      'tbl_user.mobile'=>"='$mobile' ",
  ]));
 
 
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
  else
  {
    json_bind([],201,'User Not Register',false);
  }
}
function user_login_get()
{
  //prx("hello");
}


?>