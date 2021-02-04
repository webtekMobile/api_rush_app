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
            ],['driver_id'=>$driver_id]))
    {
        json_bind($data,200,'Data Found',true);
    }
    else
    {
      json_bind($data,201,'Data Found',true);
    }

}
function driver_reg_get()
{
  $data=getall('tbl_driver');
  json_bind($data,200,'Data Found',true);
}