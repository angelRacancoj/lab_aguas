<?php
    require 'equipment.php';
    $equipmentName=$_POST['equipmentName'];
    $equipmentModel=$_POST['equipmentModel'];
    $equipmentWork=$_POST['equipmentWork'];
    $EquipmentMan=$_POST['EquipmentMan'];
    if(isset($equipmentName)){
          modifyName($equipmentName)
    }
    if(isset($equipmentModel)){
          modifyModel($equipmentModel);
    }
    if(isset($equipmentWork)){
          modifyWork($equipmentWork);
    }
    if(isset($EquipmentMan)){
          modifyMaintenance($EquipmentMan);
    }

?>
