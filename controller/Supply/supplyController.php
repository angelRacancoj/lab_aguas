<?php

require "../../vendor/autoload.php";
require_once "../../model/Entity/Supply.php";
require_once "../../model/Entity/Measure.php";
require_once "../../bootstrap.php";

    function newSupply($newSupply){
        return entityPersistSupply($newSupply);
    }

    function updateSupply($modifiedSupply){
        return entityPersistSupply($modifiedSupply);
    }

	function getSupplyByName($name){
		//buscar en base de datos
        //devolver Insumos
	}

	function modifySupplyMeasure($measure){
		//actualizar en base de datos
	}

	function getSupplyByCode($code){
		global $entityManager;
		return $entityManager->getRepository('Supply')->find($code);
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

	function getAllSupplies(){
        global $entityManager;
  	  	return $entityManager->getRepository('Supply')->findAll();
	}

    function entityPersistSupply($newObject){
        try{
            global $entityManager;
            $entityManager->persist($newObject);
            $entityManager->flush();
            return true;
        } catch (Exception $exception){
            return false;
        }
    }
?>