function onstart() {
    
    var mensaje;
    var opcion = confirm("Clickea en Aceptar para que veas nuestras promociones");
    if (opcion == true) {
        mensaje = "Has clickado OK";
        location.href="Servicios.php";
	} else {
	    mensaje = "Has clickado Cancelar";
	}
	document.getElementById("ejemplo").innerHTML = mensaje;
}
