<?php

function driver_reg_post()
{

  global $chain;
  $chain=true;
  
  $driver_id=parsejson()['driver_id'];
$chain=false;
  
    if(update('tbl_driver',[
              'driver_fname'=>parsejson()['fname'],
               'driver_lname'=>parsejson()['lname'],
                'email'=>parsejson()['email'],
                 'zone'=>parsejson()['zone'],
       'status_driver'=>1,
            ],['driver_id'=>$driver_id]))
    {
              $chain=true;
                $data=fetch_records(where_this(getall('tbl_driver'),[
      'tbl_driver.driver_id'=>"='$driver_id' ",
  ]));
 
        json_bind($data,200,'Registration Successfully',true);
    }
    else
    {
      json_bind($data,201,'Data Not Found',true);
    }

}
function driver_reg_get()
{
  $data=getall('tbl_driver');
  json_bind($data,200,'Data Found',true);
}