<?php
require "../../vendor/autoload.php";
require_once "../../model/Entity/CostumClient.php";
require_once "../../bootstrap.php";

	function getCostumClientById($id){
		global $entityManager;
		return $entityManager->getRepository('CostumClient')->find($id);
	}

	function getAllCostumClient(){
        global $entityManager;
        return $entityManager->getRepository('CostumClient')->findAll();
	}
?>