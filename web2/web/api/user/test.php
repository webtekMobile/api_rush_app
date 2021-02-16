<?php


function test_get($meta_category='',$key='')
{
  global $chain;
  if($key=='' or $meta_category=='')
  {
    error_log();
    $chain = true;
    $user=where_this(inner_join('tbl_subscribe=subscibe_id,vendor_id,user_id,subscribe_time|tbl_user=tbl_user=user_id,name',
[
  'tbl_user'=>'tbl_user.user_id=tbl_subscribe.user_id',
  
]),[
     
     "tbl_subscribe.vendor_id"=>"='10'",
    
  ]);
    prx($user);
  }
  else if($key and $meta_category)
  {
    
    //$chain = true;
    $data = poly_join("tbl_shop_meta_data=shop_meta_id,shop_id as shop_meta_product_id,in_offer_id as shop_meta_offer_id,is_metakey_id as shop_meta_metakey_id,rel_pair as shop_meta_rel_pair|tbl_shop=shop_id as sid,shop_name|tbl_shop_to_meta_key=metakey_name,description as meta_description,status as meta_satus,sort_order|tbl_shop_to_product=shop_id|tbl_shop=vendor_id as vid,shop_name,shop_mobile,shop_address,shop_open,shop_close,shop_holiday,shop_website,shop_banner,shop_display_name,shop_description,shop_unicode|tbl_vendor=username,mega_cat_id|tbl_mega_category=name",['product_id','is_metakey_id','product_id','shop_id','vendor_id','mega_cat_id'],'inner',['tbl_product_to_meta_key.metakey_name'=>['=',$key],'tbl_mega_category.name'=>['=',$meta_category]]);
  prx($data);
    json_bind($data,CONST_HTTP_STATUS_OK,'All Record ',true);
  }
  
  
}