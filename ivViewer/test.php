<?php
error_reporting( E_ALL );
ini_set( "display_errors", 1 );
$data = file_get_contents('./config.json',true);
$logindata = json_decode($data,true);
#$logindatauser = $logindata[user];
#$logindatapass =$logindata[pass];
#var_dump($logindata)
$logindatauser = var_dump($logindata['user']);
echo $logindatauser
?>
