<?php
function user_login_post()
{
global $chain;
$chain=false;
$otp=rand(1001,9999);
$mobile=parsejson()['mobile'];
 $token1 = openssl_random_pseudo_bytes(20);
  $chain=true;
  $data12=fetch_records(where_this(getall('tbl_user'),[
      'tbl_user.mobile'=>"='$mobile' ",
  ]));
 
  $chain=true;
  

  if(update('tbl_user_auth',[
    'otp' => $otp,
    'auth_key' =>$user_token,
     ],['user_id'=>$data12[0]['user_id'],]))
     {
   
     
       json_bind($data12[0]['user_id'],200,'Otp Send Successfully',true);
     }  
 
  
//Convert the binary data into hexadecimal representation.

}
function user_login_get()
{
  //prx("hello");
}


?>