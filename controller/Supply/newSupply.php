<?php
	require 'supply.php';
	$nameSupply=POST['name_supply'];
	$dateExpiry=POST['date_expiry'];
	$cuantityAvailable=POST['cuantity_available'];
	$securitySheet=POST['secure_sheet'];
	$measureId=POST['measure_id'];
	newSupply($nameSupply,$dateExpiry,$cuantityAvailable,$measureId,$securitySheet);
?>