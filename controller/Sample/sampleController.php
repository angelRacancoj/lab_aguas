<?php

require "../../vendor/autoload.php";
require_once "../../model/Entity/Sample.php";
require_once "../../model/Entity/Department.php";
require_once "../../bootstrap.php";

function newSample($newSample){
    try {
        global $entityManager;
        $entityManager->persist($newSample);
        $entityManager->flush();
        return true;
    } catch (Exception $exception){
        return false;
    }
}

function updateSample($modifiedSample){
    try{
        global $entityManager;
        $entityManager->persist($modifiedSample);
        $entityManager->flush();
        return true;
    } catch (Exception $exception){
        return false;
    }
}

function getByIdSample($idSample){
    global $entityManager;
    return $entityManager->getRepository('Sample')->find($idSample);
}

function getAllDepartament(){
    global $entityManager;
    return $entityManager->getRepository('Department')->findAll();
}