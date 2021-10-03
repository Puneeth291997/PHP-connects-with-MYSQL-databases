<?php 


//function page
function tax_counter($item_amount, $tax){
	$total_amount = $item_amount * $tax/100;

	return $total_amount;
}


// page code
//include ('functions.php');
$item1 = 4500;
$item2 = 500;

$tax1 = 5;
$tax2 = 12;

$item1_tax = tax_counter($item1,$tax1);
$item2_tax = tax_counter($item2,$tax2);


echo $item1_total = $item1 + $item1_tax;
echo '<br>';
echo $item2_total = $item2 + $item2_tax;
?>