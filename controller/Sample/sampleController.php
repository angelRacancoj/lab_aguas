<?php

require "../../vendor/autoload.php";
require_once "../../model/Entity/Sample.php";
require_once "../../model/Entity/Department.php";
require_once "../../model/Entity/Municipality.php";
require_once "../../model/Entity/Client.php";
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

function getAllDepartament(){
    global $entityManager;
    return $entityManager->getRepository('Department')->findAll();
}



/*
function getAllDepartamentTest{
      //buscar en base de datos
      //devolver cargos de empleado
      $departament1=new Department();
      $departament1->setNameDepartment("Departamento 1");
      $departament2=new StaffPosition();
      $departament2->setNameStaffPosition("Departamento 2");
      $positions=array($departament1,$departament2);
      return $positions;
    }

    function createDepartmentTest($departament){
      //buscar en base de datos
      //devolver cargos de empleado
      $position1=new Department();
      $position1->setNameDepartment("Departamento 1");
      global $entityManager;
      $entityManager->persist($position1);
      $entityManager->flush();
      return $position1;
    }





    function getAllMunicipalityTest{
      //buscar en base de datos
      //devolver cargos de empleado
      $departament1=new Department();
      $departament1->setNameMunicipality("Municipio 1");
      $departament1->setDepartment(1);
      $departament2=new StaffPosition();
      $departament2->setNameStaffPosition("Municipio 2");
      $departament2->setDepartment(1);
      $positions=array($departament1,$departament2);
      return $positions;
    }

    function createMunicipalityTest($municipality){
      //buscar en base de datos
      //devolver cargos de empleado
      $position1=new Department();
      $position1->setNameMunicipality("Municipio 1");
      $position1->setDepartment(1);
      global $entityManager;
      $entityManager->persist($position1);
      $entityManager->flush();
      return $position1;
    }




    function getAllClientsTest{
      //buscar en base de datos
      //devolver cargos de empleado
      $client1=new Client();
      $client1->setDpiClient(123456789);
      $client1->setNameClient("Cliente 1");
      $client1->setDirectionClient("Direccion 1");
      $client1->setCityClient("Ciudad 1");
      $client1->setCompanyClient("Compania 1");
      $client1->setPhoneClient("888888888");
      $client1->setPhoneClientExtra("7777777");
      $client1->setPhoneExtra("66666666");
      $client1->setEmailClient("prueba@gmail.com");
      $client1->setWebSiteClient("www.estoesunaprueba.com");
      $client1->setCostumClient(1);

      $client2=new Client();
      $client2->setDpiClient(123456788);
      $client2->setNameClient("Cliente 2");
      $client2->setDirectionClient("Direccion 2");
      $client2->setCityClient("Ciudad 2");
      $client2->setCompanyClient("Compania 2");
      $client2->setPhoneClient("1111111111");
      $client2->setPhoneClientExtra("2222222222222");
      $client2->setPhoneExtra("3333333333");
      $client2->setEmailClient("prueba2@gmail.com");
      $client2->setWebSiteClient("www.estoesunaprueba2.com");
      $client2->setCostumClient(1);

      $positions=array($client1,$client2);
      return $positions;
    }

    function createClientsTest($municipality){
      //buscar en base de datos
      //devolver cargos de empleado
      $client1=new Client();
      $client1->setDpiClient(123456789);
      $client1->setNameClient("Cliente 1");
      $client1->setDirectionClient("Direccion 1");
      $client1->setCityClient("Ciudad 1");
      $client1->setCompanyClient("Compania 1");
      $client1->setPhoneClient("888888888");
      $client1->setPhoneClientExtra("7777777");
      $client1->setPhoneExtra("66666666");
      $client1->setEmailClient("prueba@gmail.com");
      $client1->setWebSiteClient("www.estoesunaprueba.com");
      $client1->setCostumClient(1);
      global $entityManager;
      $entityManager->persist($position1);
      $entityManager->flush();
      return $position1;
    }

*/




?>