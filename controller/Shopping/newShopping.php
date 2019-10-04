<?php
	require 'shopping.php';

	$providerId=$_POST['provider_id'];
	$supplyId=$_POST['supply_id'];
	$equipmentId=$_POST['equipment_id'];
	$amountPurchased=$_POST['amount_purchased'];	

	if(isset($supplyId)){
		newShopping1($providerId,$supplyId,$amountPurchased);
	}else if(isset($equipmentId)){
		newShopping2($providerId,$equipmentId,$amountPurchased);
	}



?>