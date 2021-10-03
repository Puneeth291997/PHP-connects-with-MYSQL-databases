<style>
th {background: silver;}
td {padding: 5px; border: 1px solid silver;}
</style>



<?php

require_once('config.php');

//echo 'hello world';

$stmt =$db->query("SELECT cart.cart_id, items.item_name, items.item_price ,users.name 
	               FROM cart, items, users 
                   WHERE cart.user_id =users.id And cart.item_id =items.item_id
                   ORDER by cart.cart_id ASC");

?>

<table>
	<thead>
		<tr>
			<th>Cart ID</th>
			<th>User ID</th>
			<th>Item ID</th>
			<th>Price</th>
		</tr>
	</thead>
	<tbody>
	


<?php

 while ($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
	
    	       $cart_id=$row['cart_id'];
    	       $user_name=$row['name'];
    	       $item_name=$row['item_name'];  
    	       $item_price=$row['item_price'];

?>

<tr>
			<td><?php echo $cart_id; ?></td>
			<td><?php echo $user_name; ?></td>
			<td><?php echo $item_name; ?></td>
			<td><?php echo $item_price; ?></td>
		</tr>


<?php	

}


?>	

</tbody>

</table>
