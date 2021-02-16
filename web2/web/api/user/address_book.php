<?php
  function address_book_post()
  {
    global $chain;
    $chain=true;
    if(insertat('tbl_address_book',[
                 'user_id'=>parsejson()['user_id'],
              'shipping_cat_id'=>parsejson()['shipping_cat_id'],
               'flat'=>parsejson()['flat'],
                'adress'=>parsejson()['adress'],
                'latitude'=>parsejson()['latitude'],
                 'longitude'=>parsejson()['longitude'],
            ]))
              {
                 json_bind([],200,'Address Add Sucessfully',true);
    
              }
  else
    {
       json_bind([],201,'Address Not Add',true);
    }
  }
  function address_book_get($id='')
  {
    global $chain;
    $chain=true;
    $data=fetch_records(where_this(inner_join('tbl_address_book=address_book_id,shipping_cat_id,flat,adress,latitude,longitude,address_add_date|tbl_shipping_cat=shipping_cat_id,shipping_cat,shipping_icon',[
  
  'tbl_shipping_cat'=>'tbl_shipping_cat.shipping_cat_id=tbl_address_book.shipping_cat_id',
                                          
]),[
      "tbl_address_book.user_id"=>"='$id'", ]));
                     
    if($data)
      {
        json_bind($data,200,'Data Found',true);
      }
    else
      {
         json_bind([],201,'Data Not Found',true);
      }
      
  }
  
  
  
  ?>