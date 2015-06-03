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

function borrarPublicacion(idpublicacion) {
	bootbox.confirm("Esta seguro que desea borrar la publicacion?", function(result) {
		if(result==true){
   		window.location='../src/borrarPublicacion.php?idPublicacion='+idpublicacion;
   		}	
	}); 


}

