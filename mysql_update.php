<?php

require_once('config.php');

//echo 'hello world';
$id =10;
$name ='Punee';
$mobile =4444444444;
$email ='Punee@gmail.com';
$password =999;




$stmt =$db->prepare("UPDATE users SET name = ?, mobile =?, email =?, password =? WHERE id =?");
$stmt->execute(array($name, $mobile, $email, $password, $id));

echo 'Row updated';







?>