<?php
require_once "/var/www/html/lab_aguas/model/Entity/Employee.php";
require "/var/www/html/lab_aguas/vendor/autoload.php";
require_once "/var/www/html/lab_aguas/bootstrap.php";


function getEmployeeByDpiAndPass($employee){
    global $entityManager;
    return $entityManager->getRepository('Employee')->findOneBy(
        array(
            'dpiEmployee' => $employee->getDpiEmployee(),
            'password' => $employee->getPassword()
        ));
}

function modifyUser($modifiedUser){
    try {
        global $entityManager;
        $entityManager->persist($modifiedUser);
        $entityManager->flush();
        return true;
    } catch (Exception $exception){
        return false;
    }
}
?>