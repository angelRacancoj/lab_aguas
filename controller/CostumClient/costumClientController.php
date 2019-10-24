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

	function getById($id){
		//buscar en base de datos 
		//devuelve listado de clientes
	}

	function getAllCostumClient(){
		//Devuelve todos los clientes
		$CC1 = new CostumClient();
		$CC1->setIdCostumCategory(1);
		$CC1->setNameCostumCategory("Empresa Privada");
		$CC2 = new CostumClient();
		$CC2->setIdCostumCategory(2);
		$CC2->setNameCostumCategory("Empresa Mixta");
		$CC3 = new CostumClient();
		$CC3->setIdCostumCategory(3);
		$CC3->setNameCostumCategory("Gobierno");
		$CC4 = new CostumClient();
		$CC4->setIdCostumCategory(4);
		$CC4->setNameCostumCategory("Estudiante");
		$CC5 = new CostumClient();
		$CC5->setIdCostumCategory(5);
		$CC5->setNameCostumCategory("ONG");
		$CCs = array($CC1,$CC2,$CC3,$CC4,$CC5);
		return $CCs;
	}
?>