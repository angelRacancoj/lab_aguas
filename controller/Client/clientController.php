<?php

require "../../vendor/autoload.php";
require_once "../../model/Entity/Client.php";
require_once "../../bootstrap.php";

	function newClient($newClient){
    	return entityPersist($newClient);
	}

	function updateClient($modifiedClient){
		return entityPersist($modifiedClient);
	}

	function getClientByNameAndId($name,$id){
		//buscar en base de datos 
		//devuelve listado de clientes
	}

	function getClientByName($name){
		//buscar en base de datos 
		//devuelve listado de clientes
	}

	function getClientById($id){
		global $entityManager;
		return $entityManager->getRepository('Client')->find($id);
	}

	function getAllClient(){
        global $entityManager;
        return $entityManager->getRepository('Client')->findAll();
	}

	function entityPersist($newObject){
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
