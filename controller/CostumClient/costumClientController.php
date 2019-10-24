<?php
require "../../vendor/autoload.php";
require_once "../../model/Entity/CostumClient.php";
require_once "../../bootstrap.php";

	function newCostumClient($newCostumClient){
	    try {
	        global $entityManager;
	        $entityManager->persist($newCostumClient);
	        $entityManager->flush();
	        return true;
	    } catch (Exception $exception){
	        return false;
	    }
	}

	function getCostumClientById($id){
		//buscar en base de datos 
		//devuelve listado de clientes
		$CC1 = new CostumClient();
		$CC1->setIdCostumCategory(1);
		$CC1->setNameCostumCategory("Empresa Privada");
		return $CC1;
	}

	function getAllCostumClient(){
        global $entityManager;
        return $entityManager->getRepository('CostumClient')->findAll();
	}
?>