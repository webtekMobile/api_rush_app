<?php
  function add_cart_post()
  {
    global $chain;
    $chain=true;
    $user_id = parsejson()['user_id'];
  $p_id = parsejson()['p_id'];
  $p_qty = parsejson()['p_qty'];
    $data=fetch_records(where_this(getall('tbl_cart'),[
     
     'tbl_cart.user_id'=>"='$user_id' AND",
     'tbl_cart.product_id'=>"='$p_id'",
] ));           

    
    if($data)
      {
        //$final_qty= $data[0]['product_quantity'] + $p_qty;
      
        $chain=false;
        
          if(update('tbl_cart',[
    'product_quantity' => $p_qty,
                    'cart_status'=>1,
     ],  
     ['tbl_cart.user_id'=>"$user_id AND",
     'tbl_cart.product_id'=>"$p_id",]))
            {
                
              $chain=true;
               $data1=fetch_records(where_this(getall('tbl_cart'),[
     
     'tbl_cart.user_id'=>"='$user_id' AND",
     'tbl_cart.product_id'=>"='$p_id' AND",
                                                'tbl_cart.cart_status'=>"='1'",
] ));
      json_bind($data1,CONST_HTTP_STATUS_OK,'Cart Update Successfully',true);
            }
       
       
      }
    else
      {
        if(insertat('tbl_cart',[
          
              'user_id'=>parsejson()['user_id'],
               'product_id'=>parsejson()['p_id'],
                'product_quantity'=>parsejson()['p_qty'],
                'cart_status'=>1,
            ]))
          {
          json_bind([],CONST_HTTP_STATUS_OK,'Cart Added Successfully',true);
          }
    else
      {
         json_bind([],201,'Cart Not Added',false);
      }
        
      }
    
  }
  
  
  
  
  ?>