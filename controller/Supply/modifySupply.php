<?php
require 'supply.php';
$nameSupply=POST['name_supply'];
$dateExpiry=POST['date_expiry'];
$cuantityAvailable=POST['cuantity_available'];
$securitySheet=POST['secure_sheet'];
$measureId=POST['measure_id'];
if (isset($nameSupply)) {
	modifyName($nameSupply);
}
if (isset($dateExpiry)) {
	modifyName($dateExpiry);
}
if (isset($cuantityAvailable)) {
	modifyName($cuantityAvailable);
}
if (isset($securitySheet)) {
	modifyName($securitySheet);
}
if (isset($measureId)) {
	modifyName($measureId);
}
?>