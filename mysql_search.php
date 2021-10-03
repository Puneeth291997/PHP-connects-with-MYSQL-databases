<?Php

require_once('config.php');

$search = '666';

$stmt = $db->prepare("SELECT * FROM users WHERE mobile LIKE ?");
$stmt->bindvalue(1, "%$search%", PDO::PARAM_STR);
//$stmt->bindvalue(2, "%$search%", PDO::PARAM_STR);
$stmt->execute();

?>

<table>
	<thead>
		<tr>
			<th>ID</th>
			<th>Name</th>
			<th>Mobile</th>
			<th>Email</th>
			<th></th>
		</tr>
	</thead>
	<tbody>
	


<?php

 while ($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
	
    	       $id=$row['id'];
    	       $name=$row['name'];
    	       $mobile=$row['mobile'];
               $email=$row['email'].'<br>';  

?>

<tr>
			<td><?php echo $id; ?></td>
			<td><?php echo $name; ?></td>
			<td><?php echo $mobile; ?></td>
			<td><?php echo $email; ?></td>
			<td><a href="mysql_update_form.php?id=<?php echo $id ; ?>&name=<?php echo $name ; ?>&mobile=<?php echo $mobile ; ?>&email=<?php echo $email;?>">Edit</a></td>
		</tr>


<?php	

}


?>	

</tbody>

</table>