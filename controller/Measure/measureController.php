<?php
//requiere base de datos y otras herramientas
require "../../vendor/autoload.php";
require_once "../../model/Entity/Measure.php";
require_once "../../bootstrap.php";

function getAllMeasure(){
    //buscar en base de datos
    //devolver cargos de empleado
    global $entityManager;
    return $entityManager->getRepository('Measure')->findAll();
}
?>