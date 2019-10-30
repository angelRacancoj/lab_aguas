<?php

require "../../vendor/autoload.php";
require_once "../../model/Entity/Sample.php";
require_once "../../model/Entity/Department.php";
require_once "../../bootstrap.php";

function newSample($newSample){
    return entityPersist($newSample);
}

function updateSample($modifiedSample){
    return entityPersist($modifiedSample);
}

function getByIdSample($idSample){
    global $entityManager;
    return $entityManager->getRepository('Sample')->find($idSample);
}

function getAllDepartament(){
    global $entityManager;
    return $entityManager->getRepository('Department')->findAll();
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