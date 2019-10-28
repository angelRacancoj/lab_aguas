<?php

require "../../vendor/autoload.php";
require_once "../../model/Entity/Parameter.php";
require_once "../../bootstrap.php";

function newParameter($newParameter){
    try {
        global $entityManager;
        $entityManager->persist($newParameter);
        $entityManager->flush();
        return true;
    } catch (Exception $exception){
        return false;
    }
}

function getParameterById($parameterId){
    global $entityManager;
    $entityManager->getRepository('Parameter')->find($parameterId);
}

function getAllParameters(){
    global $entityManager;
    return $entityManager->getRepository('Parameter')->findAll();
}