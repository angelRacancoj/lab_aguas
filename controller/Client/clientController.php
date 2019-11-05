<?php

require "../../vendor/autoload.php";
require_once "../../model/Entity/Client.php";
require_once "../../bootstrap.php";

	function newClient($newClient){
    	return entityPersistClient($newClient);
	}

	function updateClient($modifiedClient){
		return entityPersistClient($modifiedClient);
	}

	function getClientByNameAndId($name,$id){
		global $entityManager;
		$predicates = [];
		if (!empty($id)){
			$predicates[] = ('a.dpiClient LIKE ' . '\'%'.addcslashes($id,'%').'%\'');
		}
		if (!empty($name)){
			$predicates[] = ('a.nameClient LIKE ' . '\'%'.addcslashes($name,'%').'%\'');
		}
		if (empty($predicates)){
			$query = $entityManager->createQueryBuilder('a')
				->select('a')
				->from('Client','a');
		} else {
			$query = $entityManager->createQueryBuilder();
			$and = $query->expr()->andX();
			foreach ($predicates as $predicateWhere){
				$and->add($predicateWhere);
			}
			$query
				->select('a')
				->from('Client','a')
				->where($and);
		}
		return $query->getQuery()->getResult();
	}

	function getClientByName($name){
		global $entityManager;
		$query = $entityManager->getRepository('Client')->createQueryBuilder('a')
			->where('a.nameClient LIKE :name')
			->setParameter('name', $name);
		return $query->getQuery()->getResult();
	}

	function getClientById($id){
		global $entityManager;
		return $entityManager->getRepository('Client')->find($id);
	}

	function getAllClient(){
        global $entityManager;
        return $entityManager->getRepository('Client')->findAll();
	}

	function entityPersistClient($newObject){
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
