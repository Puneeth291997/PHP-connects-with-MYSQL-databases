<?php

try{
$database = 'phplearn';
$db_user = 'root';
$db_pw = '';
$host = 'localhost';
$charset = 'utf8';

$db =new PDO ('mysql:host=' . $host . ';dbname=' . $database . ';charset=' . $charset, $db_user, $db_pw);
$db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
$db->setAttribute(PDO::ATTR_EMULATE_PREPARES, false);




}
catch(exception $exception){

//echo $exception;
//echo $exception->getMessage();

	echo 'database error';

}




?>