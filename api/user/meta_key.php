
  <?php


function meta_key_get($key='')
{
  global $chain;
 
  
  if($key=='')
  {
    $chain = false;
     $data=getall('tbl_megacategory_to_meta_key');
    json_bind($data,CONST_HTTP_STATUS_OK,'All Record',true);
  }
  else if($key)
  {
    $chain = true;
    
     $data=where_this(inner_join('tbl_product_meta_data=product_id,in_offer_id,is_metakey_id,rel_pair|tbl_product=product_id,product_name',
[
  
  'tbl_product'=>'tbl_product_meta_data.product_id=tbl_product.product_id',
]),[
     
     'tbl_product_meta_data.metakey_name'=>"='$key'",
  ]);
    //$chain = true;
    
  prx($data);
    json_bind($data,CONST_HTTP_STATUS_OK,'All Record ',true);
  }
  
  
}
  
  
  
  ?>