<?php
$id =$_GET['id'];
$name =$_GET['name'];
$mobile =$_GET['mobile'];
$email =$_GET['email'];



?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title></title>
</head>
<body>

<form action= "mysql_update_html.php "  method="POST">
	
ID: <input type="hidden" name="id" value="<?php echo $id; ?>"><br><br>
Name: <input type="text" name="name" value="<?php echo $name; ?> "><br><br>
Mobile: <input type="text" name="mobile" value="<?php echo $mobile; ?> "><br><br>
Email: <input type="text" name="email" value="<?php echo $email; ?>"><br><br>
<input type="submit" name="" value="UPDATE">

</form>

</body>
</html>