<?php


	require_once("../../model/src/Entity/Shopping.php");
	require "../../vendor/autoload.php";
	require_once "../../model/Entity/Shopping.php";
	require_once "../../model/Entity/Provider.php";
	require_once "../../model/Entity/Equipment.php";
	require_once "../../bootstrap.php";


	function newShopping($amount, $dateShopping, $noteShopping, $equipment, $provider){
		//Agregar en la base de datos
	}

	function newShopping($amount, $dateShopping, $noteShopping, $supply, $provider){
		//Agregar en la base de datos
	}

	function newShopping($amount, $dateShopping, $equipment, $provider){
		//Agregar en la base de datos
	}

	function newShopping($amount, $dateShopping, $supply, $provider){
		//Agregar en la base de datos
	}
	

	function modifyProvider($provider){
		//actualizar en base de datos
	}

	function modifySupplyId($supply){
		//actualizar en base de datos
	}

	function modifyEquipmentId($equipment){
		//actualizar en base de datos
	}

	function modifyAmountPurchased($amount){
		//actualizar en base de datos
	}

	function modifynNoteShopping($noteShopping){
		//actualizar en base de datos
	}

	function modifyDateShopping($dateShopping){
		//actualizar en base de datos
	}



	function getByProviderId($provider){
		//buscar en base de datos
        //devolver Compras
	}

	function getBySupplyId($supply){
		//buscar en base de datos
        //devolver Compras
	}

	function getShoppingsByDate($dateShopping){
		//buscar en base de datos
        //devolver Compras
	}

	function getByEquipmentId($equipment){
		//buscar en base de datos
		//devolver Compras
	}

	function getByProviderAndSupplyId($provider,$supply){
		//buscar en base de datos
        //devolver Compras
	}

	function getByProviderAndEquipmentId($provider,$equipment){
		//buscar en base de datos
        //devolver Compras
	}

	function getAllShoppings(){
		//buscar en base de datos
		//devolver Compras
	}

	function newPurchase($newPurchase){
    try {
        global $entityManager;
        $entityManager->persist($newPurchase);
        $entityManager->flush();
        return true;
    } catch (Exception $exception){
        return false;
    }

    function createProviderTest(){
      //buscar en base de datos
      //devolver cargos de empleado
      $position1=new Provider();
      $position1->setIdProvider(1);
      $position1->setNameStaffPosition("PROVEEDOR 1");
      $position1->setPhoneProvider("NUMERO 1");
      global $entityManager;
      $entityManager->persist($position1);
      $entityManager->flush();
      return $position1;
    }

    function createEquipmentTest(){
      //buscar en base de datos
      //devolver cargos de empleado
      $position1=new Equipment();
      $position1->setNameEquipment("EQUIPO 4");
      $position1->setModelEquipment("MODELO 4");
      $position1->setWorkingHours(400);
      $position1->setMaintenanceTime(450);
      global $entityManager;
      $entityManager->persist($position1);
      $entityManager->flush();
      return $position1;
    }
}