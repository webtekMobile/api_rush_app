<?php
define('allow_multiple_db',true,1);


$db_config['hostname'] = 'localhost';
$db_config['username'] = 'c2rush2';
$db_config['password'] = 'kT9Gq#rchUF';

$default_db = 'c2rush2';

#Add the Database Environments#######

// $local_db['supply'] ='aaracgzs_easy_supply';
// $local_db['services'] ='aaracgzs_easy_services';
// $local_db['taxi'] ='aaracgzs_easy_taxi';

$env_n = 'Default';





#############################|Setting DB Env |###################
function DBEnv($dbname=''){

  global $local_db;
  global $config;
  global $default_db;
  global $env_n;

  if(allow_multiple_db==true){

      $uri=explode("/",$_SERVER['REQUEST_URI']);
      $envname=$uri[$config['module_name']];
      if(array_key_exists($envname, $local_db)){
        $database = $local_db[$envname];
        $env_n = " $envname Environment ";
      }else{

        $database = $default_db;
        
        $env_n=$env_n." DB Environment ";
      }
    
      return $database;
  }
  if($dbname==''){
    die('Set Single database or Enable Multiple database Allow true');
  }else{
    return $dbname;
  }
  
}




