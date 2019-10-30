<?php

require "../../vendor/autoload.php";
require_once "../../model/Entity/Provider.php";
require_once "../../bootstrap.php";

function newProvider($newProvider){
    try {
        global $entityManager;
        $entityManager->persist($newProvider);
        $entityManager->flush();
        return true;
    } catch (Exception $exception){
        return false;
    }
}

function updateProvider($modifiedProvider){
    try{
        global $entityManager;
        $entityManager->persist($modifiedProvider);
        $entityManager->flush();
        return true;
    } catch (Exception $exception){
        return false;
    }
}

function getProviderById($providerId){
    global $entityManager;
    $entityManager->getRepository('Provider')->find($providerId);
}

function getAllProviders(){
    global $entityManager;
    return $entityManager->getRepository('Provider')->findAll();
}
