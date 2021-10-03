<?php

//include ('config.php');

// include('Git.txt');
// include('Git.txt');
//include_once('Git.txt');

//require('Git.txt');
//require_once('Git.txt');

require_once('config.php');

//$id='';
$name=$_POST['user_name'];
$mobile=$_POST['user_mobile'];
$email=$_POST['user_email'];
$password=$_POST['user_password'];
//$date='';

$stmt=$db->prepare("INSERT INTO users (name, mobile, email, password) VALUES (:name, :mobile, :email, :password)");
$stmt->execute(array(':name'=>$name, ':mobile'=>$mobile, ':email'=>$email, ':password'=>$password));

//echo 'data row inserted successfully';

header('Location: php-register.html?form-submitted');


$db=null;

?>