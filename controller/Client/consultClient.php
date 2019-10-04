<?php
	require 'Client.php';
	$idClient=POST['id_client'];
	$nameClient=POST['name_client'];

	if (isset($idClient) && isset($nameClient)) {
		getByNameAndId($nameClient,$idClient);
	} elseif (isset($idClient)) {
		getById($idClient);
	} elseif (isset($nameClient)){
		getByName($getByName);
	} else {
		getAllClient();
	}

?>