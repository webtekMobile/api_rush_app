<?php
function driver_doc_post()
{
  global $chain;
  $chain=true;
  $driver_id=parsejson()['driver_id'];
  $driver_image=upload_raw(parsejson()['driver_image']);
  $driver_licence=upload_raw(parsejson()['driver_licence']);
  $driver_permit=upload_raw(parsejson()['driver_permit']);
  $driver_personal=upload_raw(parsejson()['driver_personal']);
 

  $driver_id=parsejson()['driver_id'];
  $chain=false;
  if(doexist('tbl_driver_doc',[
  
  
  'driver_id'=>['=',$driver_id],

  ]))
  {
$chain=false;
if(update('tbl_driver_doc',[
    'driver_image' => $driver_image,
    'driver_licence' => $driver_licence,
    'driver_permit' => $driver_permit,
          'driver_personal' => $driver_personal,

  

  ],['driver_id'=>$driver_id]))
  {
    json_bind([],200,'Data update  Successfully',true);

  }
  else
  {
    json_bind([],201,'Data Not Updated',false);
  }
  }
  else
  {
    $chain=true;
    if(insertat('tbl_driver_doc',[
  'driver_image' => $driver_image,
    'driver_licence' => $driver_licence,
    'driver_permit' => $driver_permit,
          'driver_personal' => $driver_personal,
                 'driver_id' => $driver_id,
                'doc_status' => 1

  

  ]))
  {
    json_bind([],200,'Data Inserted Successfully',true);

  }
  else
  {
    json_bind([],201,'Data Not Inserted',false);
  }
  }
  

}
function driver_doc_get()
{
  global $chain;
  $chain=true;
  $data=getall('tbl_driver_doc');
  json_bind($data,200,'Found data',true);
}