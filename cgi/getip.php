<?php
ini_set("display_errors", "On");
error_reporting(E_ALL | E_STRICT);

include '../.include.php';
if(!get('myip'))die('127.0.0.8');
$r=new Base\Res();
$ip=Base\Comm::getClientIP();
$table='getip';
if($db->has($table,["ip" => $ip])){
$db->exec("UPDATE `$table` set `count`=`count`+1 where ip='$ip'");  
}
else
{
$db->exec("INSERT INTO `$table` (`ip`) VALUES ('" .$ip. "')");     
}
$r->o($ip);