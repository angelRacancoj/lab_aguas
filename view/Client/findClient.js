function obtenerObjJson(){
	var obj = [{"DPI":"Titulo uno A", "Nombre":"Titulo dos A", "Direccion":"Titulo tres A", "Puesto":"Titulo cuatro A", "Fecha y Hora":"05/04/2015 09:59"}
			  ,{"DPI":"Titulo uno B", "Nombre":"Titulo dos B", "Direccion":"Titulo tres B", "Puesto":"Titulo cuatro B", "Fecha y Hora":"05/04/2015 10:00"}
			  ,{"DPI":"Titulo uno C", "Nombre":"Titulo dos C", "Direccion":"Titulo tres C", "Puesto":"Titulo cuatro C", "Fecha y Hora":"05/04/2015 10:15"}
			  ,{"DPI":"Titulo uno D", "Nombre":"Titulo dos D", "Direccion":"Titulo tres D", "Puesto":"Titulo cuatro D", "Fecha y Hora":"05/04/2015 10:30"}
			  ,{"DPI":"Titulo uno E", "Nombre":"Titulo dos E", "Direccion":"Titulo tres E", "Puesto":"Titulo cuatro E", "Fecha y Hora":"<button>Habilitar</button><button>Modificar</button>"}];
	return obj;
}

function crearTablaSimple(divTabla, classDivTabla, objJson){
	var contenedorTabla;
	var fTemp;
	var i, j;
	var arrayClaves = new Array();
	var classFilaDatos = "TBLFilaDatosPar"; //indica fila impar

	try{
		contenedorTabla = document.getElementById(divTabla);
		contenedorTabla.className = classDivTabla;
		fTemp = objJson[0];
	
		var tabla = document.createElement("table");	//la tabla
		tabla.id = divTabla + "TBL";					//le asignamos un id dinamico a la tabla
		var fila = document.createElement("tr");		//la primera fila de la tabla y corresponde a la cabecera
		fila.id = divTabla + "TBLCabecera";				//se le asigna un id dinamico a la fila de la cabecera
		fila.className = "TBLCabecera";					//le asignamos el nombre de clase de estilo fijo a la fila de la cabecera
		var celda;

		//ciclo para sacar los key (claves) del objeto JSON y agregar las celdas a la fila de cabecera
		for(i in fTemp){
			arrayClaves.push(i);
			celda = document.createElement("th");
			celda.innerHTML = i;
			fila.appendChild(celda);
		}
		tabla.appendChild(fila);
		contenedorTabla.appendChild(tabla);

		i=0;
		//ciclo para crear las filas de datos
		for(i; i < objJson.length; i++){
			fTemp = objJson[i];
			fila = document.createElement("tr");
			fila.id = divTabla + "tblDatos" + i;
			fila.className = classFilaDatos;

			if(classFilaDatos === 'TBLFilaDatosPar'){
				classFilaDatos = 'TBLFilaDatosImpar';
			}else{
				classFilaDatos = 'TBLFilaDatosPar';
			}

			//subciclo para crear las celdas y agregarla a la fila correspondiente
			for(j in fTemp){
				celda = document.createElement("td");
				celda.innerHTML = fTemp[j];
				fila.appendChild(celda);
			}
			tabla.appendChild(fila);
		}
	}
	catch(err){
		alert("Error al procesar la tabla de datos");
		console.log(err);
	}
	finally{}
}