function formulario(){
	var correo, usuario, contraseña, telefono, confcontraseña;
	usuario = document.getElementById("user").value;
	correo = document.getElementById("email").value;
	contraseña = document.getElementById("pass").value;
    confcontraseña = document.getElementById("c-pass").value;
    //telefono = document.getElementById("telf").value;
     var expresiones_contraseña =/^[a-zA-Z]{4,20}$/;
    if( contraseña == ""){
        alert("Campos obligatorios");
        return false;
    }
    if(!expresiones_contraseña.test(contraseña)){
        alert("Error en la contraseña, ingrese nuevamente");
        return false;
    }
    if(contraseña === confcontraseña)
    {
    if(usuario !== "" || correo !== "" || contraseña !== "" || confcontraseña !== ""  ){
        alert("Registrado con exito");

    }    
	}else
    alert("Las contraseñas no coinciden");
    return false;
}
var formRegistro= document.getElementsByClassName("form-registrer")
function registrar(){
    formRegistro.style.transform="translateX(0px)"
}
function login(){
    formRegistro.style.transform="translateX(300px)"
}
 var expresiones_contraseña =/^[a-zA-Z]{4,20}$/;
 var validarRegistro = document.getElementsByClassName("form-registrer");
 validarRegistro.onsubmit = function(){
    let contraseña = document.getElementById('pass').value;
    if( contraseña == ""){
        alert("Campos obligatorios");
        return false;
    }
    if(!expresiones_contraseña.test(contraseña)){
        alert("Error en la contraseña, ingrese nuevamente");
        return false;
    }
    else{
        alert("Registro completado");
    }

 }

