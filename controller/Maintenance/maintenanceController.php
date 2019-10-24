<?php

require "../../vendor/autoload.php";
require_once "../../model/Entity/Maintenance.php";
require_once "../../bootstrap.php";

function newMaintenance($newMaintenance){
    try {
        global $entityManager;
        $entityManager->persist($newMaintenance);
        $entityManager->flush();
        return true;
    } catch (Exception $exception){
        return false;
    }
}

function getAllMaintenances(){
    //buscar en base de datos
    //devolver cargos de empleado
    global $entityManager;
    return $entityManager->getRepository('Maintenance')->findAll();
}