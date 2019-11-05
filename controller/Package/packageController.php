<?php

require "../../vendor/autoload.php";
require_once "../../model/Entity/Package.php";
require_once "../../bootstrap.php";

function newPackage($newPackage){
    return entityPersist($newPackage);
}

function updatePackage($modifiedPackage){
    return entityPersist($modifiedPackage);
}

function getPackageById($packageId){
    global $entityManager;
    return $entityManager->getRepository('Package')->find($packageId);
}

function getAllPackages(){
    global $entityManager;
    return $entityManager->getRepository('Package')->findAll();
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