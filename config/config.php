<?php
define('autoloading',TRUE,1);

define('BASE_URL','https://rush.aaratechnologies.in/web2/web/',1);
#define('BASE_URL','http://localhost/easybug/web/',1);

define('API_DIR','api');

$autoload['define']=array('lang','error','http_status');

$autoload['config']=array('php_ini','api_routes','dbenv','database','define','auth','pagination','page_routes','tables/supply/table_root','tables/services/table_root','tables/taxi/table_root');

$autoload['library'] =array('query-builder.class','model-loader.class');

#Helpers Loaders

$autoload['helper'] =array('debugger','ajax','uri_segment','htaccess','json','password','package','raw_upload'); #_helper

$autoload['model'] = array(); #_model

$db['prefix'] = 'tbl_';

#All the modular projects projects

$modular['admin']='admin';
$modular['ajax']='ajax';

#Add the Code Snippet
#$autoload['snippet']=array('code');

##############################| To Add Any New Extensions |###########################

array_push($autoload['config'],'globals');
array_push($autoload['config'],'make_global');




















































?>