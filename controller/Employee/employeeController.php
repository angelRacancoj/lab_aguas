<?php
    //requiere base de datos y otras herramientas
require "../../vendor/autoload.php";
require_once "../../model/Entity/Employee.php";
require_once "../../model/Entity/StaffPosition.php";
require_once "../../bootstrap.php";

    function newEmployee($employee){
        try {
            global $entityManager;
            $entityManager->persist($employee);
            $entityManager->flush();
            return true;
        } catch (Exception $exception){
            return false;
        }
    }

    function updateEmployee($modifiedEmployee){
        try{
            global $entityManager;
            $entityManager->persist($modifiedEmployee);
            $entityManager->flush();
            return true;
        } catch (Exception $exception){
            return false;
        }
    }

    function getByDpi($employeeDPI){
        global $entityManager;
        return $entityManager->getRepository('Employee')->find($employeeDPI);
    }
    function getByNameAndPosition($employee){
        //buscar en base de datos
        //devolver Empleado
    }
    function getByDpiAndPosition($employee){
        //buscar en base de datos
        //devolver Empleado
    }
    function getByName($employee){
          //buscar en base de datos
          //devolver Empleados
    }
    function getByNameAndPassword($employee){

    }
    function getByPosition($employee){
        //buscar en base de datos
        //devolver Empleados
    }

    function getByState($employee){
        //buscar en base de datos
        //devolver Empleados
    }
    function getAllEmployee(){
      global $entityManager;
      return $entityManager->getRepository('Employee')->findAll();
    }
    function getAllEmployeePosition(){
        global $entityManager;
        return $entityManager->getRepository('StaffPosition')->findAll();
    }
    function getEmployeePositionbyName($nameStaffPosition){
        global $entityManager;
        return $entityManager->getRepository('StaffPosition')->findOneBy(['nameStaffPosition' => $nameStaffPosition]);
    }
    function getEmployeePositionbyId($idStaffPosition){
        //buscar en base de datos
        //devolver cargos de empleado
        global $entityManager;
        return $entityManager->getRepository('StaffPosition')->findOneBy(['idStaffPosition' => $idStaffPosition]);
    }
?>
