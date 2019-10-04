<?php
require 'shopping.php';
$providerId=$_POST['provider_id'];
$supplyId=$_POST['supply_id'];
$equipmentId=$_POST['equipment_id'];
$amountPurchased=$_POST['amount_purchased'];

if (isset($providerId)) {
	modifyName($providerId);
}
if (isset($supplyId)) {
	modifyDateExpired($supplyId);
}
if (isset($equipmentId)) {
	modifyQuantityAvailable($equipmentId);
}
if (isset($amountPurchased)) {
	modifyMeasure($amountPurchased);
}
?>