<?php


	
		
	  include 'config/dbConfig.php';
		$latitude = $_POST['shop_latitude'];
		$longitude = $_POST['shop_longitude'];
		$distance_km = 10;
		
		
		$radius_km = $distance_km;
		$sql_distance = " ,(((acos(sin((".$latitude."*pi()/180)) * sin((`a`.`shop_latitude`*pi()/180))+cos((".$latitude."*pi()/180)) * cos((`a`.`shop_latitude`*pi()/180)) * cos(((".$longitude."-`a`.`shop_longitude`)*pi()/180))))*180/pi())*60*1.1515*1.609344) as distance ";
		$having = " HAVING (distance <= $radius_km) "; 
		$order_by = ' distance ASC ';
		$sql = "SELECT a.*".$sql_distance." FROM tbl_seller a $having ORDER BY $order_by";
	
		$res = mysqli_query($con,$sql);
		if(mysqli_num_rows($res)>0)
		{
			while($row = mysqli_fetch_assoc($res))
			{
				$data[] = $row;
			}
			json_bind($data,200,'Record Found',true);
		}
		else
		{
			json_bind([],CONST_HTTP_STATUS_OK,'Record Not Found',true);
		}
