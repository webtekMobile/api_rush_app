<?php

function user_reg_post()
{
  
  global $chain;
  $chain=true;
  if(insertat('tbl_user',[
              'role_id'=>1,
              'fname'=>parsejson()['fname'],
               'lname'=>parsejson()['lname'],
                'email'=>parsejson()['email'],
                'mobile'=>parsejson()['mobile'],
                 'password'=>parsejson()['password'],
            ]))
  {
            
    $user_id=last_inserted_id('tbl_user');
    if(insertat('tbl_user_auth',[ 
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
function user_reg_get($id='')
{
  global $chain;
  $chain=false;
  
  if($id=='')
    {
      $data=getall('tbl_user');
    }
  else
    {
      $chain=true;
      
  $data=fetch_records(where_this(inner_join('tbl_user=role_id,fname,lname,email,mobile,password,meta_values,status,created_by,created_at|tbl_user_auth=user_id,otp,email_token,otp_verified,email_verified,session_key,meta_values,status,auth_key,login_time,logout_time,is_login',
[
  
  'tbl_user_auth'=>'tbl_user.user_id=tbl_user_auth.user_id',
]),[
     
     'tbl_user.user_id'=>"='$id' ",
  ]));

    }
 
      json_bind($data,200,'Data Found',true);
 
  
}