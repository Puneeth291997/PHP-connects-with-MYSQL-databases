<?php

require_once('config.php');

if(isset($_POST['id'])){

	$id = $_POST['id'];
	$name = $_POST['name'];
	$mobile = $_POST['mobile'];
	$email = $_POST['email'];







$stmt =$db->prepare("UPDATE users SET name = ?, mobile =?, email =? WHERE id =?");
$stmt->execute(array($name, $mobile, $email, $id));

echo 'Row updated';




}else{
	echo 'Something wrong';
}


?>