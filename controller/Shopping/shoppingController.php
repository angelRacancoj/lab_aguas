<?php

require "../../vendor/autoload.php";
require_once "../../model/Entity/Shopping.php";
require_once "../../bootstrap.php";

function newPurchase($newPurchase){
    try {
        global $entityManager;
        $entityManager->persist($newPurchase);
        $entityManager->flush();
        return true;
    } catch (Exception $exception){
        return false;
    }
}

function getPurchaseById($purchaseId){
    global $entityManager;
    return $entityManager->getRepository('Shopping')->find($purchaseId);
}

function getAllPurchases(){
    global $entityManager;
    return $entityManager->getRepository('Shopping')->findAll();
}