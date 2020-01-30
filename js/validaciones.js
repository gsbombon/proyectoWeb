// JavaScript Document
//------------------------>> VALIDACIONES DE FORMULARIOS<---------------

function campoVacio(id) {
    var campo = document.getElementById(id);
    var contenido = document.getElementById(id).value;
    if (contenido == "") {
        campo.style.borderColor="red";
        return false;
    }else{
		campo.style.borderColor="green";
        return true;
    }
}

function validarCampos(){
    var contra = document.getElementById("contraseña").value;
    var contra1 = document.getElementById("contraseña1").value;
    if(contra!=contra1){
        alert('Las contraseñas no coinciden');
        return false;
    }else {
	alert("buena");
        return true;
}}

function validarCorreo(idMail)
{
	//Creamos un objeto 
	var campo=document.getElementById(idMail);	
	var email=campo.value;

	// Patron para el correo
	var expr = /^([a-zA-Z0-9_\.\-])+\@(([a-zA-Z0-9\-])+\.)+([a-zA-Z0-9]{2,4})+$/;
    if ( !expr.test(email) ){
		campo.style.borderColor="red";
       // alert("Error: La dirección de correo " + email + " es incorrecta.");
	
		
	}else{
		campo.style.borderColor= "green";
	//correo incorrecto
	
}}


function soloL(e) {
   var key = e.keyCode || e.which; //tomar el valor del caracter ingresado
    var tecla = String.fromCharCode(key).toLowerCase(); //conversion a minusculas
    var letras = " áéíóúabcdefghijklmnñopqrstuvwxyz";
    var especiales = "8-37-39-46";
    var tecla_especial = false
    for (var i in especiales) {
        if (key == especiales[i]) {
            tecla_especial = true;
            break;
        }
    }

    if (letras.indexOf(tecla) == -1 && !tecla_especial) {
        return false;
    }
}

function soloN(e)
{
	var key =  e.keyCode
	return ((key >= 48 && key <= 57) || (key==8))
}

function ingreso(){
		alert ("Complete el captcha!!");
	location.href ='../forms/login.html';
}

function registrarse(){
	alert ("Correo ya registrado!!");
	location.href='../forms/registro.html';
}

function registrarseOk(){
	alert ("Registro Exitoso!!");
	location.href='../forms/login.html';
}
function validarCedula() {
    var campo = document.getElementById("cedula");   
	var cad = document.getElementById("cedula").value.trim();
        var total = 0;
        var longitud = cad.length;
        var longcheck = longitud - 1;
		var par=0;

        if (cad !== "" && longitud == 10){
          var d1= cad[0]+cad[1];
		if(parseInt(d1)<=24){
			for(var i = 0; i < longcheck; i++){
            if (i%2 == 0) {
				par= parseInt(par+cad[i]);
              var aux = cad.charAt(i) * 2;
              if (aux > 9) aux -= 9;
              total += aux;
            } else {
              total += parseInt(cad.charAt(i)); 
            }
          }

          total = total % 10 ? 10 - total % 10 : 0;

          if (cad.charAt(longitud-1) == total) {
            campo.style.backgroundColor = "white";
			
          }else{
            campo.style.backgroundColor  = "#FEB0A0";
         
		  }
        }else{
			campo.style.backgroundColor  = "#FEB0A0";
			
		}
      }else{
			campo.style.backgroundColor  = "#FEB0A0";
			
		}}


