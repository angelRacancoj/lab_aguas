<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <script>
      function showResult(str) {
        if (str.length==0) {
          document.getElementById("livesearch").innerHTML="";
          document.getElementById("livesearch").style.border="0px";
          return;
        }
        if (window.XMLHttpRequest) {
          // code for IE7+, Firefox, Chrome, Opera, Safari
          xmlhttp=new XMLHttpRequest();
        } else {  // code for IE6, IE5
          xmlhttp=new ActiveXObject("Microsoft.XMLHTTP");
        }
        xmlhttp.onreadystatechange=function() {
          if (this.readyState==4 && this.status==200) {
            document.getElementById("livesearch").innerHTML=this.responseText;
            document.getElementById("livesearch").style.border="1px solid #A5ACB2";
          }
        }
        xmlhttp.open("GET","livesearch.php?q="+str,true);
        xmlhttp.send();
      }
    </script>
    <meta charset="utf-8">
    <title>Buscar Cliente</title>
    <script type="text/javascript" src="findClient.js"></script>
    <link rel="stylesheet" type="text/css" href="../CSS/Forms/forms.css">
    <link rel="stylesheet" type="text/css" href="tableEj.css">
  </head>
  <body>
    <form class="form">
      <h2>Buscar Cliente</h2>
      <p type="DPI:"><input placeholder="Ej: 12345670901"></input></p>
      <p type="Nombre:"><input placeholder="Ej: Juan Jose Morales"></input></p>

      <button>Buscar</button>
      
      <div id="txtHint"></div>
      <div id="divTabla1"></div>
      
      <script type="text/javascript">
      //<![CDATA[
        function cargaInicial(){
          crearTablaSimple('divTabla1', 'classTablaSimple', obtenerObjJson());
        }

        window.onload = cargaInicial();
      //]]>
      </script>
    <!--  <div>
        <span class="fa fa-phone"></span>46144415
        <span class="fa fa-envelope-o"></span> danielalberto-gonzalezgonzalez@cunoc.edu.gt
      </div> -->
    </form>
  </body>
</html>