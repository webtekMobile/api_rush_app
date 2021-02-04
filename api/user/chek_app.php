<?php
  function edit_product_get()
{
  global $chain;
  $chain=true;
  

  token1 = openssl_random_pseudo_bytes(20);

//Convert the binary data into hexadecimal representation.

$store_token = bin2hex($token1);
       $product_image=upload_raw($_POST['image']);
      
    update('tbl_product',[
    'product_name' => $_POST['p_name'],
    'product_old_price' =>$_POST['p_old_price'],
    'product_current_price' => $_POST['p_current_price'],
    'product_qty' =>"null",
    'product_featured_photo' =>  $product_image,
    'product_description' =>$_POST['p_description'],
    'product_short_description' => $_POST['p_short_description'],
    'product_feature' => $_POST['p_feature'],
    'product_condition' =>$_POST['p_condition'],
    'product_return_policy' => $_POST['p_return_policy'],
    'product_total_view' => "null",
    'product_is_featured' => 1,
    'product_is_active' => 1,
    'product_availibility' => "yes",
    'product_expiry' => $_POST['product_expiry'],
    'store_token' => $store_token,
    'gst' => $_POST['gst'],
    'color' => $_POST['color'],
    'weight' => $_POST['weight'],
    'size' => $_POST['size'],
         'status'=>1
  ],['product_id'=>$id]);
       
   
}
  ?>