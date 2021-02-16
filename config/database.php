<?php

$hostname = 'localhost';
$username = 'c2rush';
$password = 'kT9Gq#rchUF';
$dbname='c2rush';


$con=mysqli_connect($hostname,$username,$password,$dbname);
if(!$con){

    echo 'Connection Error'.mysqli_error($con);
    exit;

}else{
  #echo 'Connection created'.mysqli_error($con);

}

 ?>