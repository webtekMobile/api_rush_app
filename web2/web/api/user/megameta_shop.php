<?php


function megameta_shop_get($key='')
{
  global $chain;
  if($key=='')
  {
 
    $chain = true;
   $data = fetch_records(where_this(inner_join('tbl_shop_meta_data=shop_meta_id,shop_id,in_offer_id,is_metakey_id,rel_pair|tbl_shop_to_meta_key=metakey_name,description,status,key_badge,key_heading,sort_order',[
      'tbl_shop_to_meta_key'=>'tbl_shop_meta_data.is_metakey_id=tbl_shop_to_meta_key.is_metakey_id',
    ]),[
     
       "tbl_shop_meta_data.shop_id"=>"=1",
    
  ]));

    
    json_bind($data,200,'All Record',true);
  }
  else
  {
   
    
         $chain = true;
    
     $data = fetch_records(where_this(inner_join('tbl_shop_meta_data=shop_meta_id,shop_id as shop_meta_product_id,in_offer_id as shop_meta_offer_id,is_metakey_id as shop_meta_metakey_id,rel_pair as shop_meta_rel_pair|tbl_shop=vendor_id,shop_name,shop_mobile,shop_address,shop_open,shop_close,shop_holiday,shop_website,shop_banner,shop_display_name,shop_description,shop_unicode',[
      'tbl_shop_to_meta_key'=>'tbl_shop_meta_data.is_metakey_id=tbl_shop_to_meta_key.is_metakey_id',
      'tbl_shop'=>'tbl_shop_meta_data.shop_id=tbl_shop.shop_id',
    ]),[
     
       "tbl_shop_to_meta_key.metakey_name"=>"='$key'",
    
  ]));
    if($data)
      {
         json_bind($data,CONST_HTTP_STATUS_OK,'All Record ',true);
      }
    else
      {
        json_bind([],201,'No Data Found ',false);
      }
  
      
      
   
    
  }
  
  
}