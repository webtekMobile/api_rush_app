<?php
  function product_view_get($id='')
  {
    global $chain;
    $chain=true;
    $data=array();
    $data['records']=fetch_records(where_this(inner_join('tbl_shop=shop_id,vendor_id,shop_name,shop_mobile,shop_address,shop_latitude,shop_longitude,shop_open,shop_close,shop_holiday,shop_website,shop_url,shop_banner,shop_display_name,shop_description|tbl_shop_to_product=product_id,vendor_id|tbl_product=product_name,product_old_price,product_current_price,product_qty,product_net_wt,product_gros_wt,product_featured_photo,product_description,product_short_description,product_feature,product_condition,product_return_policy| tbl_product_to_cat=prod_cat_id,product_id,cat_id|tbl_category=cat_id,mega_cat_id,title,status,category,description,image_path',
[
   'tbl_shop_to_product'=>'tbl_shop_to_product.vendor_id=tbl_shop.vendor_id',
  'tbl_product'=>'tbl_shop_to_product.product_id=tbl_product.product_id',
  'tbl_product_to_cat'=>'tbl_product_to_cat.product_id=tbl_product.product_id',
                                                        'tbl_category'=>'tbl_product_to_cat.cat_id=tbl_category.cat_id',
]),[
      "tbl_shop_to_product.product_id"=>"='$id' AND",
                                      "tbl_product.status"=>"='1'", ]));
    //prx($data['records']);
     $catdata=fetch_records(where_this(inner_join('tbl_shop_to_product=product_id|tbl_product=product_name,product_old_price,product_current_price,product_qty,product_net_wt,product_gros_wt,product_featured_photo,product_description,product_short_description,product_feature,product_condition,product_return_policy| tbl_product_to_cat=prod_cat_id,product_id,cat_id|tbl_category=cat_id,mega_cat_id,title,status,category,description,image_path',
[
  
  'tbl_product'=>'tbl_shop_to_product.product_id=tbl_product.product_id',
  'tbl_product_to_cat'=>'tbl_product_to_cat.product_id=tbl_product.product_id',
                                                        'tbl_category'=>'tbl_product_to_cat.cat_id=tbl_category.cat_id',
]),[
      "tbl_shop_to_product.product_id"=>"='$id' AND",
                                      "tbl_product.status"=>"='1'", ]));

    $new=array();
      $data['review']=fetch_records(where_this(inner_join('tbl_product_review=product_review_id,product_id,user_id,review_message,review_rate,review_date,created_at,review_status|tbl_user=user_id,role_id,username,email,mobile',[
                                                  'tbl_user'=>'tbl_user.user_id=tbl_product_review.user_id',         
                                                         
                                                         ]),[
                     "tbl_product_review.product_id"=>"='$id'",
                    ]));
    $alldata=fetch_records(where_this(inner_join('tbl_variants=variants_id,variants_name,sub_id,created_at,status|tbl_variants_value=variant_value_id,variant_id,product_id,variant_value,status,created_at',[
                                                  'tbl_variants_value'=>'tbl_variants_value.variant_id=tbl_variants.variants_id',         
                                                         
                                                         ]),[
                     "tbl_variants_value.product_id"=>"='$id'",
                    ]));
                          

    if($data)
      {
        json_bind($data,200,'Data Found',$alldata);
      }
  else
    {
       json_bind([],201,'No Data Found',$alldata);
    }
  }
  
  
  
  ?>