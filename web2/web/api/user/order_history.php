<?php
  function order_history_get($column='',$id='')
  {
    global $chain;
    $chain=true;
$data=where_this(inner_join('tbl_payment_detail=payment_id,order_id,payement_method,payment_txn,payment_date,payment_details,payment_status,created_at|tbl_order_status=order_status_id,order_id,order_status,order_status_date|tbl_order=order_id,vendor_id,cart_id,user_id,order_date|tbl_cart=cart_id,user_id,product_id,product_quantity,cart_other_details,cart_status|tbl_product=product_id,product_name,product_moq,product_old_price,product_current_price,product_qty,product_net_wt,product_gros_wt,product_featured_photo,product_description,product_short_description,product_feature,product_condition,product_return_policy,product_total_view,product_is_featured,product_is_active,gst,color,size,product_availibility,weight,product_expiry,status,product_filter_price,store_token|tbl_shop_to_product=shop_prod_id,vendor_id,product_id,status|tbl_shop=shop_id,role_id,vendor_id,mega_type_id,shop_name,shop_owner,shop_mobile,shop_address,shop_landmark,shop_latitude,shop_longitude,shop_holiday,shop_website,shop_url,shop_banner,shop_image,shop_city,shop_state,shop_country,shop_pin,shop_bussiness,shop_registration_type,shop_level,shop_gst,shop_registrion_no,shop_adhar',[

     'tbl_order_status'=>'tbl_order_status.order_id=tbl_payment_detail.order_id',
     'tbl_order'=>'tbl_order.order_id=tbl_order_status.order_id',
     'tbl_cart'=>'tbl_cart.cart_id=tbl_order.cart_id',
     'tbl_product'=>'tbl_cart.product_id=tbl_product.product_id',
                  'tbl_shop_to_product'=>'tbl_shop_to_product.product_id=tbl_product.product_id',
   'tbl_shop'=>'tbl_shop_to_product.vendor_id=tbl_shop.vendor_id',
                     
                     
                     ]),[
    
    "tbl_order.{$column}"=>"='$id'"
    
    ]);
    prx($data);
    if($data)
      {
   json_bind($data,200,'order_history',true);
        }
    else
      {
        json_bind([],201,'No Order Found',false);
        
        }
   }
  
  
  
  
  ?>