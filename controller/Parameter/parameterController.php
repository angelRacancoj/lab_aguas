<?php

require "../../vendor/autoload.php";
require_once "../../model/Entity/Parameter.php";
require_once "../../bootstrap.php";

function newParameter($newParameter){
   return entityPersist($newParameter);
}

function updateParameter($modifiedParameter){
    return entityPersist($modifiedParameter);
}

function getParameterById($parameterId){
    global $entityManager;
    return $entityManager->getRepository('Parameter')->find($parameterId);
}

function getAllParameters(){
    global $entityManager;
    return $entityManager->getRepository('Parameter')->findAll();
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