<?php
  
  function otp_verify_post()
  {
    gloabl $chain;
    $chain=true;
    $user_id=parsejson()['user_id'];
 $data=fetch_records(where_this(inner_join('tbl_user=role_id,fname,lname,email,mobile,password,meta_values,status,created_by,created_at|tbl_user_auth=user_id,otp,email_token,otp_verified,email_verified,session_key,meta_values,status,auth_key,login_time,logout_time,is_login',
[
  
  'tbl_user_auth'=>'tbl_user.user_id=tbl_user_auth.user_id',
]),[
     
     'tbl_user.user_id'=>"='$id' ",
  ]));
    prx($data);

 
  }
  ?>