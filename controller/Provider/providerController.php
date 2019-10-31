<?php

require "../../vendor/autoload.php";
require_once "../../model/Entity/Provider.php";
require_once "../../bootstrap.php";

function newProvider($newProvider){
   return entityPersistProvider($newProvider);
}

function updateProvider($modifiedProvider){
    return entityPersistProvider($modifiedProvider);
}

function getProviderById($providerId){
    global $entityManager;
    $entityManager->getRepository('Provider')->find($providerId);
}

function getAllProviders(){
    global $entityManager;
    return $entityManager->getRepository('Provider')->findAll();
}

function entityPersistProvider($newObject){
    try{
        global $entityManager;
        $entityManager->persist($newObject);
        $entityManager->flush();
        return true;
    } catch (Exception $exception){
        return false;
    }
}

function findWithFilters($idProvider, $nameProvider){
    global $entityManager;
    $predicates = [];
    if (!empty($idProvider)){
        $predicates[] = ('a.idProvider LIKE ' . '\'%'.addcslashes($idProvider,'%').'%\'');
    }
    if (!empty($nameProvider)){
        $predicates[] = ('a.nameProvider LIKE ' . '\'%'.addcslashes($nameProvider,'%').'%\'');
    }
    if (empty($predicates)){
        $query = $entityManager->createQueryBuilder('a')
            ->select('a')
            ->from('Provider','a');
    } else {
        $query = $entityManager->createQueryBuilder();
        $and = $query->expr()->andX();
        foreach ($predicates as $predicateWhere){
            $and->add($predicateWhere);
        }
        $query
            ->select('a')
            ->from('Provider','a')
            ->where($and);
    }
    return $query->getQuery()->getResult();
}
?>
