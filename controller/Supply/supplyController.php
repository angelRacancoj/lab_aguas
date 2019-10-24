<?php

require "../../vendor/autoload.php";
require_once "../../model/Entity/Supply.php";
require_once "../../bootstrap.php";

function newSupply($newSupply){
    try {
        global $entityManager;
        $entityManager->persist($newSupply);
        $entityManager->flush();
        return true;
    } catch (Exception $exception){
        return false;
    }
}

	function modifySupplyName($name){
		//actualizar en base de datos
	}

	function modifySupplyDateExpired($date_expired){
		//actualizar en base de datos
	}

	function modifySupplyQuantityAvailable($quantity_available){
		//actualizar en base de datos
	}

	function getSupplyByName($name){
		//buscar en base de datos
        //devolver Insumos
	}

	function modifySupplyMeasure($measure){
		//actualizar en base de datos
	}

	function getSupplyByCode($code){
		//buscar en base de datos
		//devolver Insumos
	}

	function getSupplyAvailableByCode($available,$code){
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

	function getSupplyAvailableByName($available,$name){
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

	function getSupplyByNameAndCode($name,$code){
		//buscar en base de datos
		//devolver Insumos
	}

	function getSupplyByAvailableNameCode($available,$code,$name){
		//la logica implementada en:
		getAvailableByName();
		getAvailableByCode();
	}

	function getAllSuppies(){
		//buscar en base de datos
		//devolver Insumos
	}
?>