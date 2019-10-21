<?php
require 'supply.php';
$nameSupply=POST['name_supply'];
$dateExpiry=POST['date_expiry'];
$cuantityAvailable=POST['cuantity_available'];
$measureId=POST['measure_id'];
if (isset($nameSupply)) {
	modifyName($nameSupply);
}
if (isset($dateExpiry)) {
	modifyDateExpired($dateExpiry);
}
if (isset($cuantityAvailable)) {
	modifyQuantityAvailable($cuantityAvailable);
}
if (isset($measureId)) {
	modifyMeasure($measureId);
}
?>