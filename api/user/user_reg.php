<?php

function user_reg_post()
{
  global $chain;
  $chain=false;

  if(doexist('tbl_user',[
  
  
  'email'=>['=',parsejson()['email']],

  ]))
    {
     json_bind([],201,'Already Email Register',false);
    }
    else
    {
      $chain=true;
   
  if(insertat('tbl_user',[
              'fname'=>parsejson()['fname'],
               'lname'=>parsejson()['lname'],
                'email'=>parsejson()['email'],
                'mobile'=>parsejson()['mobile'],
                 'password'=>parsejson()['password'],
            ]))
  {
    $user_id=last_inserted_at('tbl_user');
    if(insertat('tbl_user_auth',[
    'otp' => $otp,
    'auth_key' =>$user_token,
    'user_id'=>$user_id,
  

  ]))
    {
    json_bind($user_id,200,'Data Inserted Successfully',true);
    }
  }
  else
  {
      json_bind([],201,'Data Not Inserted',true);
  }
   }

}
function user_reg_get()
{
  $data=getall('tbl_user');
  json_bind($data,200,'Data Found',true);
}