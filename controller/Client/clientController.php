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

	function modifyId($id){
		//actualizar en base de datos
	}

	function modifyName($name){
		//actualizar en base de datos
	}

	function modifyDirection($direction){
		//actualizar en base de datos
	}

	function modifyCity($city){
		//actualizar en base de datos
	}

	function modifyCompany($company){
		//actualizar en base de datos
	}

	function modifyPhone($phone){
		//actualizar en base de datos
	}

	function modifyExtraPhone($phone){
		//actualizar en base de datos
	}

	function modifyFax($fax){
		//actualizar en base de datos
	}

	function modifyEmail($email){
		//actualizar en base de datos
	}

	function modifyWevSite($web){
		//actualizar en base de datos
	}

	function getByNameAndId($name,$id){
		//buscar en base de datos 
		//devuelve listado de clientes
	}

	function getByName($name){
		//buscar en base de datos 
		//devuelve listado de clientes
	}

	function getById($id){
		//buscar en base de datos 
		//devuelve listado de clientes
	}

	function getAllClient(){
        global $entityManager;
        return $entityManager->getRepository('Client')->findAll();
	}
?>