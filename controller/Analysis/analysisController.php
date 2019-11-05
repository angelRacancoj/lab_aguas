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

function getByEmployeeDPI($employeeDPI){
    $predicates = [];
    if (!empty($employeeDPI)){
        $predicates[] = ('a.employeeDPI.dpiEmployee LIKE ' . '\'%'.addcslashes($employeeDPI,'%').'%\'');
    }
    $query = getCustomQuery($predicates);
    return $query->getQuery()->getResult();
}

function getDateAnalysis($dateAnalysis){
    $predicates = [];
    if (!empty($dateAnalysis)){
        $predicates[] = ('a.dateAnalysis = ' . $dateAnalysis);
    }
    $query = getCustomQuery($predicates);
    return $query->getQuery()->getResult();
}

function getCustomQuery($predicates){
    global $entityManager;
    if (empty($predicates)){
        $query = $entityManager->createQueryBuilder('a')
            ->select('a')
            ->from('Analysis','a');
    } else {
        $query = $entityManager->createQueryBuilder();
        $and = $query->expr()->andX();
        foreach ($predicates as $predicateWhere){
            $and->add($predicateWhere);
        }
        $query
            ->select('a')
            ->from('Analysis','a')
            ->where($and);
    }
    return $query;
}