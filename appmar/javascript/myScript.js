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

function salirDePagina(){
    //onclickk
    alert ("funciona");
}
function pulsar(event) {
    if (event.keyCode === 13 && !event.shiftKey) {
        /*event.preventDefault();
        var boton = document.getElementById("boton");
        angular.element(boton).triggerHandler('click');*/
        alert ("funciona");
    }
}

function envio() {
    alert("tus comentarios fueron enviados \npronto estaremos en contacto contigo")
}
function clickBoton(event) {
    if (event.button == 2) {
        alert("por favor no trates de robar nuestras\nimagenes ya que tienen derechos de autor")
    }
}

function onerrorresult(){
    document.getElementById("onerrorresult").innerHTML = "error al cargar";
}

function itwascopied(){
    alert("Esta informacion es privada")
}

function campoSelect(x) {
    x.style.background = "yellow";
}

