function validar(){
    var  nombre, mail, contraseña, rcontraseña;
    nombre = document.getElementById("nombre").value;
    mail = document.getElementById("mail").value;
    contraseña = document.getElementById("contraseña").value;
    rcontraseña = document.getElementById("rcontraseña").value;

    expresion = /\w+@\w+\.+[a-z]/;
    
    if (nombre === "" || mail=== "" || contraseña==="" || rcontraseña ==="" ){
        alert("Todos los campos son obligatorios");
        return false;
    }
    else if(nombre.length>50){
        alert("El nombre es muy largo");
        return false;
    }
    else if(mail.length>50){
        alert("El Correo es muy largo");
        return false;
    }
    else if(!expresion.test(mail)){
        alert("El Correo no es válido");
        return false;
    }

    else if(contraseña.length>50){
        alert("La contraseña es muy larga");
        return false;
    }
    else if(rcontraseña.length>50){
        alert("La contraseña es muy larga");
        return false;
    }
    else if(contraseña!=rcontraseña){
        alert("Las contraseñas son diferentes");
        return false;
    }
    //else if(isNaN(telefono)){
      //  alert("El teléfono ingresado no es número");
        //return false;
    //}

    else if(nombre.length>50){
        alert("El nombre es muy largo");
        return false;
    }

}

function validarlogin(){
    var mail, contraseña;
    mail = document.getElementById("mail").value;
    contraseña = document.getElementById("contraseña").value;

    expresion = /\w+@\w+\.+[a-z]/;
    
   if(!expresion.test(mail)){
        alert("El Correo no es válido");
        return false;
    }

    else if(contraseña.length>50){
        alert("La contraseña es muy larga");
        return false;
    }
}
