
<?php
  
  function otp_verify_post()
  {
    global $chain;
    $chain=true;
    $driver_id=parsejson()['driver_id'];
    $otp=parsejson()['otp'];
   
 $data=fetch_records(where_this(inner_join('tbl_driver=driver_id,driver_fname,driver_lname,driver_mobile,email,zone,longitude,status_driver,created_at,updated_by,status_location|tbl_driver_auth=driver_id,otp,session_key,driver_token,driver_password,driver_email_verified,driver_login_at,driver_logout_at,driver_route,driver_description,driver_vehichle,deiver_auth_status,created_at',
[
  
  'tbl_driver_auth'=>'tbl_driver.driver_id=tbl_driver_auth.driver_id',
]),[
     
     'tbl_driver_auth.driver_id'=>"='$driver_id' AND",
                                 'tbl_driver_auth.otp'=>"='$otp'",
  ]));
                     //prx($data);
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