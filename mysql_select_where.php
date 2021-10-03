<?php

require_once('config.php');

//echo 'hello world';
$query_id =5;
$query_name ='Puneeth';
$query_mobile =1111111111;
$query_email ='puneethgowdar10@gmail.com';
$query_password ='123';

$stmt =$db->query("SELECT * FROM users WHERE id < $query_id LIMIT 3");

while ($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
	 echo $id =$row['id'].'-';
	 echo $name =$row['name'].'-';
	 echo $mobile =$row['mobile'].'-';
	 echo $email =$row['email'].'-';
	 echo $password =$row['password'].'<br>';
}

?>