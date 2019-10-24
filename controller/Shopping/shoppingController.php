<?php
	require_once("../../model/src/Entity/Shopping.php");


	function newShopping($amount, $dateShopping, $noteShopping, $equipment, $provider){
		//Agregar en la base de datos
	}

	function newShopping($amount, $dateShopping, $noteShopping, $supply, $provider){
		//Agregar en la base de datos
	}

	function newShopping($amount, $dateShopping, $equipment, $provider){
		//Agregar en la base de datos
	}

	function newShopping($amount, $dateShopping, $supply, $provider){
		//Agregar en la base de datos
	}
	

	function modifyProvider($provider){
		//actualizar en base de datos
	}

	function modifySupplyId($supply){
		//actualizar en base de datos
	}

	function modifyEquipmentId($equipment){
		//actualizar en base de datos
	}

	function modifyAmountPurchased($amount){
		//actualizar en base de datos
	}

	function modifynNoteShopping($noteShopping){
		//actualizar en base de datos
	}

	function modifyDateShopping($dateShopping){
		//actualizar en base de datos
	}



	function getByProviderId($provider){
		//buscar en base de datos
        //devolver Compras
	}

	function getBySupplyId($supply){
		//buscar en base de datos
        //devolver Compras
	}

	function getShoppingsByDate($dateShopping){
		//buscar en base de datos
        //devolver Compras
	}

	function getByEquipmentId($equipment){
		//buscar en base de datos
		//devolver Compras
	}

	function getByProviderAndSupplyId($provider,$supply){
		//buscar en base de datos
        //devolver Compras
	}

	function getByProviderAndEquipmentId($provider,$equipment){
		//buscar en base de datos
        //devolver Compras
	}

	function getAllShoppings(){
		//buscar en base de datos
		//devolver Compras
	}

	
?>