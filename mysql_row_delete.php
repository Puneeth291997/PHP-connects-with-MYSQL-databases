<?php

require_once('config.php');

$id =4;
$mobile =4444444444;
$email ='bGeetha@gmail.com';

$stmt = $db->prepare("DELETE FROM users WHERE mobile =:mobile and email =:email");
$stmt->bindValue(':mobile', $mobile, PDO::PARAM_STR);
$stmt->bindValue(':email', $email, PDO::PARAM_STR);
$stmt->execute();


echo 'row deleted';


?>