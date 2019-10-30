<?php
  //requiere base de datos y otras herramientas
require "../../vendor/autoload.php";
require_once "../../model/Entity/Equipment.php";
require_once "../../bootstrap.php";

    function newEquipment($newEquipment){
        try {
            global $entityManager;
            $entityManager->persist($newEquipment);
            $entityManager->flush();
            return true;
        } catch (Exception $exception){
            return false;
        }
    }

    function updateEquipment($modifiedEquipment){
        try{
            global $entityManager;
            $entityManager->persist($modifiedEquipment);
            $entityManager->flush();
            return true;
        } catch (Exception $exception){
            return false;
        }
    }

    function getByNameAndModel($equipment){
            //buscar en base de datos
        //devolver Equipos
    }

    function getByName($equipment){
        //buscar en base de datos
        //devolver Equipos
    }

    function getByModel($equipment){
      //buscar en base de datos
      //devolver Equipos
    }

    function getById($equipmentId){
        global $entityManager;
        return $entityManager->getRepository('Equipment')->find($equipmentId);
    }

    function getAllEquipment(){
        global $entityManager;
        return $entityManager->getRepository('Equipment')->findAll();
    }

?>
