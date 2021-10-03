<?php

 if (isset ( $_POST['post_submit'])){
	
	$user_name=$_POST['user_name'] ;
	$user_mobile=$_POST['user_mobile'];
	$user_email=$_POST['user_email'];
	$gender=$_POST['gender'];
	echo 'Name: '.$user_name.'<br/>';
	echo 'Mobile: '.$user_mobile.'<br/>';
	echo 'Email: '.$user_email.'<br/>';
	echo 'Gender:'.$gender.'<br/>';
	if (isset($_POST['agree'])) {
	echo $agree = $_POST['agree'];
 } else {
 	echo 'you should agree our terms and condition';
 }//else{
   // echo 'nothing here!';
 }

 //echo $_SERVER['PHP_SELF'];
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>form</title>
</head>
<body>
<form action="<?php echo $_SERVER['PHP_SELF'];?>" method="POST">
	Name: <input type="text" name="user_name" required="" ><br><br>
	Mobile: <input type="number" name="user_mobile" required=""><br><br>
	Email: <input type="email" name="user_email" required=""><br><br>
	Gender: <label><input type="radio" name="gender" value="Male" required="">Male</label>
	        <label><input type="radio" name="gender" value="Female">Female</label>
	        <label><input type="radio" name="gender" value="other">other</label><br><br>
	        <label><input type="checkbox" name="agree" value="agree">I agree your terms and conditions</label><br><br>
	<input type="submit" name="post_submit"/>
</form>
</body>
</html>