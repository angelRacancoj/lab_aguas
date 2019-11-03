<?php

require "../../vendor/autoload.php";
require_once "../../model/Entity/Sample.php";
require_once "../../model/Entity/Department.php";
require_once "../../model/Entity/Municipality.php";
require_once "../../bootstrap.php";

function newSample($newSample){
    return entityPersistSample($newSample);
}

function updateSample($modifiedSample){
    return entityPersistSample($modifiedSample);
}

function getByIdSample($idSample){
    global $entityManager;
    return $entityManager->getRepository('Sample')->find($idSample);
}

function getAllDepartament(){
    global $entityManager;
    return $entityManager->getRepository('Department')->findAll();
}

function getAllMunicipalities(){
    global  $entityManager;
    return $entityManager->getRepository('Municipality')->findAll();
}

function findByIdMunicipality($id){
    global  $entityManager;
    return $entityManager->getRepository('Municipality')->find($id);
}

function getAllSamples(){
    global $entityManager;
    return $entityManager->getRepository('Sample')->findAll();
}

function entityPersistSample($newObject){
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