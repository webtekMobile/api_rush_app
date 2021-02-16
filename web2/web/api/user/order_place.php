<?php
  
  function order_place_post()
  {

    global $chain;
    $chain=false;
    //$data=where_this(inner_join('tbl_order='));
    $cart_id=$_POST['cart_id'];
    $cart=implode(",",array_values($cart_id));
 
   
    $vendor_id=$_POST['vendor_id'];
    if(insertat('tbl_order',[
          
              'user_id'=>$_POST['user_id'],
               'vendor_id'=>$_POST['vendor_id'],
                'cart_id'=>$cart,
            ]))
      {
       
        $order=last_inserted_id('tbl_order');
          if(insertat('tbl_order_status',[
          
              'order_id'=>$order,
               'order_status'=>"op",
             
            ]))
      {
          if(insertat('tbl_payment_detail',[
          
              'order_id'=>$order,
               'payement_method  '=>$_POST['method'],
                      'payment_txn'=>$_POST['pay_id'],
                      'payment_details'=>$_POST['detail'],
                      'payment_status'=>1,
             
            ]))
      {
         json_bind([],200,'order placed',true);
        
      }
      }
        
      }
          else
          {
         json_bind([],201,'order not  placed',false);
          }
  
  }
  
  
  
  ?>