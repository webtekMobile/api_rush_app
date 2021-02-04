<?php
  
  function otp_verify_post()
  {
    global $chain;
    $chain=true;
    $user_id=parsejson()['user_id'];
    $otp=parsejson()['otp'];
   
 $data=fetch_records(where_this(inner_join('tbl_user=user_id,role_id,fname,lname,email,mobile,password,meta_values,status,created_by,created_at|tbl_user_auth=user_id,otp,email_token,otp_verified,email_verified,session_key,meta_values,status,auth_key,login_time,logout_time,is_login',
[
  
  'tbl_user_auth'=>'tbl_user.user_id=tbl_user_auth.user_id',
]),[
     
     'tbl_user.user_id'=>"='$user_id' AND",
                                 'tbl_user_auth.otp'=>"='$otp'",
  ]));
    if($data)
      {
        json_bind($data,200,'otp verify',true);
      }
    else
      {
        json_bind(false,201,'otp not verify',false);
      }
 
  }
  ?>