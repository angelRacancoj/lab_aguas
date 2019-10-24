<?php

require "../../vendor/autoload.php";
require_once "../../model/Entity/Package.php";
require_once "../../bootstrap.php";

function newPackage($newPackage){
    try {
        global $entityManager;
        $entityManager->persist($newPackage);
        $entityManager->flush();
        return true;
    } catch (Exception $exception){
        return false;
    }
}