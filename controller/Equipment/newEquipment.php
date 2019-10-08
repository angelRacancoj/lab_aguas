<?php
    require 'equipment.php';
    $equipmentName=$_POST['equipmentName'];
    $equipmentModel=$_POST['equipmentModel'];
    $equipmentWork=$_POST['equipmentWork'];
    $EquipmentMan=$_POST['EquipmentMan'];
    newEquipment($equipmentName,$equipmentModel,$equipmentWork,$EquipmentMan);
 ?>
