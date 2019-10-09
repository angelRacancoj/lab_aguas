<?php
    require 'equipment.php';
    $equipmentName=$_POST['equipmentName'];
    $equipmentModel=$_POST['equipmentModel'];
    if(isset($equipmentName)&&isset($equipmentModel)){
          getByNameAndModel($equipmentName,$equipmentModel);
    }else if(isset($equipmentName)){
          getByName($equipmentName);
    }else if(isset($equipmentModel)){
          getByModel($equipmentModel);
    }else{
          consultAll();
    }


 ?>
