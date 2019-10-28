<?php

require "../../vendor/autoload.php";
require_once "../../model/Entity/Analysis.php";
require_once "../../bootstrap.php";

function newAnalysis($newAnalysis){
    try {
        global $entityManager;
        $entityManager->persist($newAnalysis);
        $entityManager->flush();
        return true;
    } catch (Exception $exception){
        return false;
    }
}

function getAllAnalysis(){
    global $entityManager;
    return $entityManager->getRepository('Analysis')->findAll();
}

function getBySampleId($id){
    global $entityManager;
    return $entityManager->getRepository('Analysis')->find($id);
}