<?php
  require_once("../../controller/Provider/providerController.php");
  require_once("../../controller/Equipment/equipmentController.php");
  require_once("../../model/Entity/Shopping.php");
  require_once "../../model/Entity/Provider.php";
  require_once "../../model/Entity/Equipment.php";
  
  $send=$_POST['send2'];
  if(isset($send)){
      $shopping=new Purchase();
      $providerShop = createProviderTest();
      $equipmentShop = createEquipmentTest();
      
      $shopping->setAmountPurchased($_POST['cantidad']);
      $shopping->setDateShopping($_POST['fecha']);
      $shopping->setNoteShopping($_POST['noteShopping']);
      $shopping->setEquipment($equipmentShop);
      $shopping->setProvider($providerShop);
      
      newPurchase($shopping);
      //set atributos
      echo "Enviar";
  }

?>
<!DOCTYPE html>
<html lang="es" dir="ltr">
  <head>
    <meta charset="utf-8">
    <link rel="stylesheet" type="text/css" href="../CSS/Forms/forms.css">
  </head>
  <body>
      <form class="form" action="#" method="post">
        <h2>Registrar Muestra</h2>

        <br><p type="FECHA DE LA COMPRA:"><input type="datetime" name="fecha"  value="<?php echo date("Y-m-d");?>"></input></p><br>

        <p type="SELECCIONE EL PROVEEDOR:"><br><br>
        <select name="Proveedor">
          <?php
            foreach (getAllProviders() as $Proveedor) {
                  echo '<option value="'.$Proveedor->getIdProvider().'">'.$Proveedor->getNameProvider().'</option>';
            }
           ?>
        </select>
        </p><br>

        <p type="SELECCIONE EL EQUIPO:"><br><br>
        <select name="Equipo">
          <?php
            foreach (getAll() as $Equipo) {
                  echo '<option value="'.$Equipo->getIdEquipment().'">'.$Equipo->getNameEquipment().'</option>';
            }
           ?>
        </select>
        </p><br>
        
        <p type="CANTIDAD A COMPRAR:"><input type="number" min="0" max="50" step="1" value="0" size="6" name="cantidad"></input></p><br><br>
        
        <p type="NOTA DE COMPRA:"><input type="text" name="noteShopping" placeholder="Ingrese una nota de compra" maxlength="50" required></input></p><br>
        
        
        
        <button name="send2">Registrar Compra</button>
      </form>
  </body>
</html>
