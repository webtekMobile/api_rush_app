<?php
function driver_doc_post()
{
	global $chain;
	$chain=true;
	$driver_image=upload_raw(parsejson()['driver_doc_image']);
	$driver_no=upload_raw(parsejson()['driver_doc_id_no']);
	$driver_expiry=upload_raw(parsejson()['driver_expiry_date']);

	$driver_id=parsejson()['driver_id'];
	if(doexist('tbl_driver_document',[
  
  
  'driver_id'=>['=',$driver_id],

  ]))
	{

if(update('tbl_driver_doc',[
    'driver_doc_image' => $driver_image,
    'driver_doc_id_no' => $driver_licence,
    'driver_expiry_date' => $driver_permit,

  

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
		if(insertat('tbl_driver_doc',[
   	'driver_doc_image' => $driver_image,
    'driver_doc_id_no' => $driver_licence,
    'driver_expiry_date' => $driver_permit,
    'driver_id' =>$driver_id

  

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