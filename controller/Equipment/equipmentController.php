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
  function modifyName($equipment){
      //agregar a base de datos
  }
  function modifyModel($equipment){
      //agregar a base de datos
  }
  function modifyWork($equipment){
        //agregar a base de datos
  }
  function modifyMaintenance($equipment){
        //agregar a base de datos
  }
  function getByNameAndModel($equipment){
      //buscar en base de datos
      //devolver Equipos
  }

  function getEquipmetById($id){
    //Return privider by ID
  }

  function getByName($equipment){
        //buscar en base de datos
        //devolver Equipos
  }
  function getByModel($equipment){
      //buscar en base de datos
      //devolver Equipos
  }
  function getAllEquipment(){
      global $entityManager;
      return $entityManager->getRepository('Equipment')->findAll();
  }

?>
