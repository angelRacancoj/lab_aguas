<?php
	require 'supply.php';
	$idSupply=POST['id_supply'];
	$nameSupply=POST['name_supply'];
	if (isset($idSupply) && isset($nameSupply)) {
		getByNameAndCode($nameSupply,$idSupply)
	}elseif (isset($idSupply)) {
		getById($idSupply);
	}elseif (isset($nameSupply)) {
		getByName($nameSupply);
	}else{
		getAllSuppies();
	}
?>