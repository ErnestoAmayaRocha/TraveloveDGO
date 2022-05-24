function validar1(){
var usuario, contra ;

usuario=document.getElementById("usua").value;
contra=document.getElementById("contra").value;



if (usuario === "" || contra === ""){
    Swal.fire({
        icon: 'warning',
        title: 'Todos los campos son obligatorios',
        text: '',
        
      })
    return false;

}

}