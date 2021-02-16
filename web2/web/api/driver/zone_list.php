<?php
  function zone_list_get()
  {
    global $chain;
    $chain=true;
    $data=fetch_records(getall('tbl_zone'));
    $data1=array();
    for($i=0;$i<count($data);$i++)
        {
   $data1[$i]['value']=$data[$i]['zone_id'];
    $data1[$i]['label']=$data[$i]['zone_list'];
         
        
          }
 
    json_bind($data1,200,'Data found',true);
  }
  
  
  
  
  ?>