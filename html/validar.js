function validar() {
var nombre, apellidoP, apellidoM, usuario, correo, contra1,contra2,tel,expresion;
nombre=document.getElementById("Nombre").value;
apellidoP=document.getElementById("ApellidoP").value;
apellidoM=document.getElementById("ApellidoM").value;
usuario=document.getElementById("Usuario").value;
correo=document.getElementById("Correo").value;
contra1=document.getElementById("pass1").value;
contra2=document.getElementById("passconf").value;
tel=document.getElementById("Tel").value;

    expresion= /\w+@\w+\.+[a-z]/;

    if (nombre === "" || apellidoP === "" || apellidoM === "" || usuario === "" || correo === ""|| contra1 === ""|| contra2 === ""|| tel === ""){

        Swal.fire({
            icon: 'warning',
            title: 'Todos los campos son obligatorios',
            text: '',
            
          })
        return false;
    }
    else if (nombre.length>12){
        Swal.fire({
            icon: 'error',
            title: 'Oops...',
            text: 'El nombre es muy largo!',
            
          })
        return false;
    }
    else if (apellidoP.length>15){
        Swal.fire({
            icon: 'error',
            title: 'Oops...',
            text: 'El apellido es muy largo!',
            
          })
        return false;
    }
    else if (apellidoM.length>15){
        Swal.fire({
            icon: 'error',
            title: 'Oops...',
            text: 'El apellido es muy largo!',
            
          })
        return false;
    }
    else if (!expresion.test(correo)){
        Swal.fire({
            icon: 'error',
            title: 'Oops...',
            text: 'El correo no es valido',
            
          })
        return false;

    }
    else if (usuario.length>20){
        Swal.fire({
            icon: 'warning',
            title: 'Oops...',
            text: 'El usuario es muy largo!',
            
          })
        return false;
    }
    else if (correo.length>25){
        Swal.fire({
            icon: 'warning',
            title: 'Oops...',
            text: 'El correo es muy largo!',
            
          })
        return false;
    }
    else if (contra1.length<8){
        Swal.fire({
            icon: 'warning',
            title: 'Oops...',
            text: 'La contraseña debe tener minimo 8 caracteres',
            
          })
        return false;
    }
    else if (contra2.length<8){
        Swal.fire({
            icon: 'warning',
            title: 'Oops...',
            text: 'La contraseña debe tener minimo 8 caracteres',
            
          })
        return false;
    }
    else if (isNaN(tel)){
        Swal.fire({
            icon: 'warning',
            title: 'Oops...',
            text: 'El telefono debe ser numerico',
            
          })
        return false;
    }
   
        
    else if (tel.length<10){
        Swal.fire({
            icon: 'warning',
            title: 'Oops...',
            text: 'El telefono debe de ser de 10 digitos',
            
          })
    return false;
    }
    
    else if (tel.length>10){
        Swal.fire({
            icon: 'warning',
            title: 'Oops...',
            text: 'El telefono debe de ser de 10 digitos',
            
          })
    return false;
    }

    else if (contra1!==contra2){
        Swal.fire({
            icon: 'warning',
            title: 'Oops...',
            text: 'Las contraseñas no coinciden',
            
          })
        return false;
    }
    else if (contra2!==contra1){
        Swal.fire({
            icon: 'warning',
            title: 'Oops...',
            text: 'Las contraseñas no coinciden',
            
          })
        return false;
    }
    
       

    
    
}