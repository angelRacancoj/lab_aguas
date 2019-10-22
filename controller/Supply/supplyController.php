<?php
	require_once("../../model/src/Entity/Supply.php");
	function newSupply($name,$date_expire,$quantity_available,$measure){
		//Agregar en la base de datos
	}

	function newSupply($name,$date_expire,$quantity_available,$measure,$secure_sheet){
		//Agregar en la base de datos
	}	

	function modifyName($name){
		//actualizar en base de datos
	}

	function modifyDateExpired($date_expired){
		//actualizar en base de datos
	}

	function modifyQuantityAvailable($quantity_available){
		//actualizar en base de datos
	}

	function getByName($name){
		//buscar en base de datos
        //devolver Insumos
	}

	function modifyMeasure($measure){
		//actualizar en base de datos
	}

	function getByCode($code){
		//buscar en base de datos
		//devolver Insumos
	}

	function getAvailableByCode($available,$code){
		//Esta es la estructura del funcionamiento, si lo consideras necesario la podes eliminar
		if (isset($available)) {
			if ($available == true) {
				//Elegir los insumos con cantidad mayor a 0 y q la fecha de expiracion sea mayor a la actual
			} else {
				//Elegir los insumos con cantidad igual a 0 y q la fecha de expiracion sea menor a la actual
			}
		} else {
			return getByCode($code);
		}
	}

	function getAvailableByName($available,$name){
		//Esta es la estructura del funcionamiento, si lo consideras necesario la podes eliminar
		if (isset($available)) {
			if ($available == true) {
				//Elegir los insumos con cantidad mayor a 0 y q la fecha de expiracion sea mayor a la actual
			} else {
				//Elegir los insumos con cantidad igual a 0 y q la fecha de expiracion sea menor a la actual
			}
		} else {
			return getByName($code);
		}
	}

	function getByNameAndCode($name,$code){
		//buscar en base de datos
		//devolver Insumos
	}

	function getByAvailableNameCode($available,$code,$name){
		//la logica implementada en:
		getAvailableByName();
		getAvailableByCode();
	}

	function getAllSuppies(){
		//buscar en base de datos
		//devolver Insumos
	}
?>