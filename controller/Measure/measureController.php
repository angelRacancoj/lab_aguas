<?php
//requiere base de datos y otras herramientas
require "../../vendor/autoload.php";
require_once "../../model/Entity/Measure.php";
require_once "../../bootstrap.php";

function getMeasureById($id){
	//Obtener la medida segun el id
	$measurer=new Measure();
	$measurer->setIdMeasure(1);
	$measurer->setNameMeasure('Unidad');
	return $measurer;
}

function getAllMeasure(){
    //buscar en base de datos
    //devolver cargos de empleado
    global $entityManager;
    return $entityManager->getRepository('Measure')->findAll();

}
?>