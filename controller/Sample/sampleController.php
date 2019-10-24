<?php

require "../../vendor/autoload.php";
require_once "../../model/Entity/Sample.php";
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