function borrar (id) {
	alert(id);
}

// JavaScript Document

function objetoAjax(){
	
	var xmlhttp=false;
	try {
		xmlhttp = new ActiveXObject("Msxml2.XMLHTTP");
	 }
	
	catch (e) {
		try {
		   xmlhttp = new ActiveXObject("Microsoft.XMLHTTP");
	   	} 
		catch (E) {
			xmlhttp = false;
  		}
	}

	if (!xmlhttp && (typeof XMLHttpRequest!=='undefined')) {
		xmlhttp = new XMLHttpRequest();
	}
	return xmlhttp;
}

function verificarCorreo() {
   	email = document.getElementById('email');
   	resp = document.getElementById('respuesta');
   	ajax=objetoAjax();
   	ajax.open("POST","../src/verificarCorreo.php",true);
   	ajax.onreadystatechange=function(){

	 if (ajax.readyState===4) {
	      //mostrar resultados en esta capa
		  	    resp.innerHTML = ajax.responseText;
                           
		};
	};
	ajax.setRequestHeader("Content-Type","application/x-www-form-urlencoded");
	ajax.send("email="+email.value);
}

function modificarPublicacion(valor,idpublicacion) {
	if (valor != "0") {
		bootbox.alert("La publicación tiene ofertas no se puede modificar",null);
	}else{
		window.location='../src/modificarPublicacion.php?idPublicacion='+idpublicacion;
	}		
}


function borrarPublicacion(idpublicacion) {
	bootbox.confirm("Esta seguro que desea borrar la publicacion?", function(result) {
		if(result==true){
   		window.location='../src/borrarPublicacion.php?idPublicacion='+idpublicacion;
   		}	
	}); 
}

function mostrarResultados(datos){
	divResultado = document.getElementById('resultado');
	ajax=objetoAjax();
	ajax.open("GET", datos);
	ajax.onreadystatechange=function() {
		if (ajax.readyState==4) {
			divResultado.innerHTML = ajax.responseText
		}
	}
	ajax.send(null)
}

function usuariosRegistrados(datos){
	divResultado = document.getElementById('resultado');
	fecha1=document.getElementById('fecha1');
	fecha2=document.getElementById('fecha2');
	ajax=objetoAjax();
	ajax.open("POST", datos);
	ajax.onreadystatechange=function() {
		if (ajax.readyState==4) {
			divResultado.innerHTML = ajax.responseText
		}
	}
	ajax.setRequestHeader("Content-Type","application/x-www-form-urlencoded");
	ajax.send("fecha1="+fecha1.value +"&fecha2="+ fecha2.value )
}




