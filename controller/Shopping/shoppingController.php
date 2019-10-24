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