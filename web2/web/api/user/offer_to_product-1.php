<?php
  function offer_to_product_get($id='')
  {
    global $chain;
    $chain=true;
     $data=fetch_records(where_this(getall('tbl_product_to_offer'),[
      "tbl_product_to_offer.shop_offer_id"=>"='$id'" ]));
     $catdata=fetch_records(where_this(inner_join('tbl_product_to_offer=in_offer_id,offer_name,description,offer_start,status,shop_offer_id,created_by,offer_end ,offer_start_time,offer_end_time|tbl_shop_offer=shop_offer_id,offer_name,offer_starting,offer_end,vendor_id,offer_status,offer_date|tbl_shop_product=shop_prod_id,vendor_id,product_id,status|tbl_product=product_name,product_old_price,product_current_price,product_qty,product_net_wt,product_gros_wt,product_featured_photo,product_description,product_short_description,product_feature,product_condition,product_return_policy',
[
  
  'tbl_shop_offer'=>'tbl_shop_offer.shop_offer_id=tbl_product_to_offer.shop_offer_id',
  'tbl_shop_product'=>'tbl_shop_offer.vendor_id=tbl_shop_product.vendor_id',
                                                        'tbl_product'=>'tbl_shop_product.product_id=tbl_product.product_id',
]),[
      "tbl_shop_to_product.product_id"=>"='$id' AND",
                                      "tbl_product.status"=>"='1'", ]));
    if($data)
      {
        json_bind($data,200,'Data Found',true);
      }
    else
      {
         json_bind([],201,'Data Not Found',false);
      }
  }
  
  
  
  ?>