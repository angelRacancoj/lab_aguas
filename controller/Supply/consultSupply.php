<?php
	require 'supply.php';
	$idSupply=POST['id_supply'];
	$nameSupply=POST['name_supply'];
	if (isset($idSupply) && isset($nameSupply)) {
		getByNameAndCode($nameSupply,$idSupply)
	}else if (isset($idSupply)) {
		getById($idSupply);
	}else if (isset($nameSupply)) {
		getByName($nameSupply);
	}else{
		getAllSuppies();
	}
?>