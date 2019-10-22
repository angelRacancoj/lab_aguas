
<?php
	require 'shopping.php';
	$idSupply=$_POST['id_shopping'];
	if (isset($idSupply)) {
		getById($idSupply);
	}else{
		getAllSuppies();
	}
?>