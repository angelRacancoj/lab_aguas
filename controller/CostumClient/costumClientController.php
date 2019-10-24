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
        global $entityManager;
        return $entityManager->getRepository('CostumClient')->findAll();
	}
?>