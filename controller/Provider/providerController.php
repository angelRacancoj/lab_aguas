<?php

require "../../vendor/autoload.php";
require_once "../../model/Entity/Provider.php";
require_once "../../bootstrap.php";

function newProvider($newProvider){
   return entityPersist($newProvider);
}

function updateProvider($modifiedProvider){
    return entityPersist($modifiedProvider);
}

function getProviderById($providerId){
    global $entityManager;
    $entityManager->getRepository('Provider')->find($providerId);
}

function getAllProviders(){
    global $entityManager;
    return $entityManager->getRepository('Provider')->findAll();
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
