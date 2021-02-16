<?php
function driver_status_get($driver_id='')
{
global $chain;
  $chain=false;
 
 if(doexist('tbl_driver',[
  
  
  'driver_id'=>['=',$driver_id,'AND'],
          

  ]))
  {
   
    $chain=true;
    $data=fetch_records(where_this(inner_join('tbl_driver=driver_id,driver_fname,driver_lname,driver_mobile,email,zone,longitude,status_driver,created_at,updated_by,status_location|tbl_driver_auth=driver_auth_id,driver_id,otp,session_key,driver_token,driver_password,driver_email_verified,driver_login_at,driver_logout_at,driver_route,driver_description,driver_vehichle,deiver_auth_status,created_at',
[
  
  'tbl_driver_auth'=>'tbl_driver.driver_id=tbl_driver_auth.driver_id',
]),[
     
     'tbl_driver.driver_id'=>"='$driver_id' AND",
                                  'tbl_driver.status_location'=>"='1'",
  ]));
    $data1=fetch_records(where_this(inner_join('tbl_driver_doc=driver_id,doc_status|tbl_driver=driver_id',
[
  
  'tbl_driver'=>'tbl_driver.driver_id=tbl_driver_doc.driver_id',
]),[
     
     'tbl_driver.driver_id'=>"='$driver_id'",
  ]));
   if($data)
     {
       json_bind($data,200,'Driver Online',$data1);
     }
         else
         {
           json_bind([],201,'Driver Offline',$data1);
         }
      
}
}



?>