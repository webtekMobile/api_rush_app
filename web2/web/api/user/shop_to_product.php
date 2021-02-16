<?php

function shop_to_product_get($field='',$id='')
{
 
  global $chain;
  $chain = true;
  if($id=='' && $field=''):
    $page_url = seek_url('shop_product');
    $total_rows = total_rows(getall('tbl_product'));
    $data = fetch_records(limit(getall('tbl_product')));
    json_bind($data,CONST_HTTP_STATUS_OK,'All Products',true,$total_rows);
  else:
   
    $page_url = seek_url('shop_product',$id);
    $like=array();
   $like['lk']=total_rows(where_this(getall('tbl_like'),[
                     "tbl_like.{$field}"=>"='$id'",
                    ]));
     $like['gallery']=fetch_records(where_this(getall('tbl_gallery'),[
                     "tbl_gallery.{$field}"=>"='$id'",
                    ]));
     $like['offer']=fetch_records(where_this(getall('tbl_shop_offer'),[
                     "tbl_shop_offer.{$field}"=>"='$id'",
                    ]));
     $like['review']=fetch_records(where_this(inner_join('tbl_review=review_id,vendor_id,user_id,review_message,review_rate,review_date,created_at,review_status|tbl_user=user_id,role_id,fname,lname,email,mobile',[
                                                  'tbl_user'=>'tbl_user.user_id=tbl_review.user_id',         
                                                         
                                                         ]),[
                     "tbl_review.{$field}"=>"='$id'",
                    ]));
    $like['order']=fetch_records(where_this(inner_join('tbl_order=order_id,vendor_id,cart_id,user_id,order_date|tbl_cart=cart_id,user_id,product_id|tbl_product=product_name,product_old_price,product_current_price,product_qty,product_net_wt,product_gros_wt,product_featured_photo,product_description',[
                                                  'tbl_cart'=>'tbl_cart.cart_id=tbl_order.cart_id',
                                               'tbl_product'=>'tbl_product.product_id=tbl_cart.product_id',          
                                                         
                                                         ]),[
                     "tbl_order.{$field}"=>"='$id'",
                    ]));
  //  prx($like);

    

   $catdata=fetch_records(where_this(inner_join('tbl_shop_to_product=product_id|tbl_product=product_name,product_old_price,product_current_price,product_qty,product_net_wt,product_gros_wt,product_featured_photo,product_description,product_short_description,product_feature,product_condition,product_return_policy| tbl_product_to_cat=prod_cat_id,product_id,cat_id|tbl_category=cat_id,mega_cat_id,title,status,category,description,image_path',
[
  
  'tbl_product'=>'tbl_shop_to_product.product_id=tbl_product.product_id',
  'tbl_product_to_cat'=>'tbl_product_to_cat.product_id=tbl_product.product_id',
                                                        'tbl_category'=>'tbl_product_to_cat.cat_id=tbl_category.cat_id',
]),[
      "tbl_shop_to_product.{$field}"=>"='$id' AND",
                                      "tbl_product.status"=>"='1'", ]));
                      

    $new=array();
   
  for($i=0;$i<count($catdata);$i++)
      {
        $title[]=$catdata[$i]['title'];
        }
    
  
  
    for($j=0;$j<count($title);$j++)
      
      {
       $alldata[][$title[$j]]=fetch_records(where_this(inner_join('tbl_shop_to_product=product_id|tbl_product=product_name,product_old_price,product_current_price,product_qty,product_net_wt,product_gros_wt,product_featured_photo,product_description,product_short_description,product_feature,product_condition,product_return_policy| tbl_product_to_cat=prod_cat_id,product_id,cat_id|tbl_category=cat_id,mega_cat_id,title,status,category,description,image_path',
[
  'tbl_product'=>'tbl_shop_to_product.product_id=tbl_product.product_id',
  'tbl_product_to_cat'=>'tbl_product_to_cat.product_id=tbl_product.product_id',
                                                        'tbl_category'=>'tbl_product_to_cat.cat_id=tbl_category.cat_id',
]),[
      "tbl_shop_to_product.{$field}"=>"='$id' AND",
                                                     "tbl_category.title"=>"='$title[$j]' AND",
       "tbl_product.status"=>"='1'",
                                           
                                                     
                                                     ]));
         }
    
   
        $data=fetch_records(where_this(inner_join('tbl_shop_to_product=product_id|tbl_product=product_name,product_old_price,product_current_price,product_qty,product_net_wt,product_gros_wt,product_featured_photo,product_description,product_short_description,product_feature,product_condition,product_return_policy',
[
  
  'tbl_product'=>'tbl_shop_to_product.product_id=tbl_product.product_id',
]),[
      "tbl_shop_to_product.{$field}"=>"='$id'", ]));

   
$shop=fetch_records(where_this(inner_join('tbl_shop=shop_id,vendor_id,shop_name,shop_mobile,shop_address,shop_latitude,shop_longitude,shop_open,shop_close,shop_holiday,shop_website,shop_url,shop_banner,shop_display_name,shop_description|tbl_vendor=vendor_id,role_id,mega_cat_id,plans_id,username,mobile,email|tbl_review=vendor_id,review_rate,review_date,review_status',
[
  
  'tbl_vendor'=>'tbl_shop.vendor_id=tbl_vendor.vendor_id',
                                            'tbl_review'=>'tbl_review.vendor_id=tbl_vendor.vendor_id',
]),[
      "tbl_shop.{$field}"=>"='$id'", ]));
             
       array_push($shop,$like);
    //$alldata1=json_encode($alldata);
    
                  
  
    json_bind($alldata,CONST_HTTP_STATUS_OK,'All Products',$shop);
  endif;
}