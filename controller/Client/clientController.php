<?php

require "../../vendor/autoload.php";
require_once "../../model/Entity/Client.php";
require_once "../../bootstrap.php";

function newClient($newClient){
    try {
        global $entityManager;
        $entityManager->persist($newClient);
        $entityManager->flush();
        return true;
    } catch (Exception $exception){
        return false;
    }
}

	function modifyClientId($id){
		//actualizar en base de datos
	}

	function modifyClientName($name){
		//actualizar en base de datos
	}

	function modifyClientDirection($direction){
		//actualizar en base de datos
	}

	function modifyClientCity($city){
		//actualizar en base de datos
	}

	function modifyClientCompany($company){
		//actualizar en base de datos
	}

	function modifyClientPhone($phone){
		//actualizar en base de datos
	}

	function modifyClientExtra($phone){
		//actualizar en base de datos
	}

	function modifyClientExtraPhone($phone){
		//actualizar en base de datos
	}

	function modifyClientFax($fax){
		//actualizar en base de datos
	}

	function modifyClientEmail($email){
		//actualizar en base de datos
	}

	function modifyClientWevSite($web){
		//actualizar en base de datos
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
		//buscar en base de datos 
		//devuelve listado de clientes
	}

	function getClientAllClient(){
		//Devuelve todos los clientes
	}
?>