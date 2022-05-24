$(document).ready(function(){
    tablaPersonas = $("#tablaPersonas").DataTable({
       "columnDefs":[{
        "targets": -1,
        "data":null,
        "defaultContent": "<div class='text-center'><div class='btn-group'><button class='btn btn-primary btnEditar'>Editar</button><button class='btn btn-danger btnBorrar'>Borrar</button></div></div>"  
       }],
        
    "language": {
            "lengthMenu": "Mostrar _MENU_ registros",
            "zeroRecords": "No se encontraron resultados",
            "info": "Mostrando registros del _START_ al _END_ de un total de _TOTAL_ registros",
            "infoEmpty": "Mostrando registros del 0 al 0 de un total de 0 registros",
            "infoFiltered": "(filtrado de un total de _MAX_ registros)",
            "sSearch": "Buscar:",
            "oPaginate": {
                "sFirst": "Primero",
                "sLast":"Último",
                "sNext":"Siguiente",
                "sPrevious": "Anterior"
             },
             "sProcessing":"Procesando...",
        }
    });
    
$("#btnNuevo").click(function(){
    $("#formPersonas").trigger("reset");
    $(".modal-header").css("background-color", "#1cc88a");
    $(".modal-header").css("color", "white");
    $(".modal-title").text("Nueva Persona");            
    $("#modalCRUD").modal("show");        
    id=null;
    opcion = 1; //alta
});    
    
var fila; //capturar la fila para editar o borrar el registro
    
//botón EDITAR    
$(document).on("click", ".btnEditar", function(){
    fila = $(this).closest("tr");
    id = parseInt(fila.find('td:eq(0)').text());
    nombre = fila.find('td:eq(1)').text();
    apellido_p = fila.find('td:eq(2)').text();
    apellido_m = fila.find('td:eq(3)').text();
    correo = fila.find('td:eq(4)').text();
    direccion = fila.find('td:eq(5)').text();
    telefono = fila.find('td:eq(6)').text();
    puesto = fila.find('td:eq(7)').text();

    $("#nombre").val(nombre);
    $("#apellido_p").val(apellido_p);
    $("#apellido_m").val(apellido_m);
    $("#correo").val(correo);
    $("#direccion").val(direccion);
    $("#telefono").val(telefono);
    $("#puesto").val(puesto);



    opcion = 2; //editar
    
    $(".modal-header").css("background-color", "#4e73df");
    $(".modal-header").css("color", "white");
    $(".modal-title").text("Editar Persona");            
    $("#modalCRUD").modal("show");  
    
});

//botón BORRAR
$(document).on("click", ".btnBorrar", function(){    
    fila = $(this);
    id = parseInt($(this).closest("tr").find('td:eq(0)').text());
    opcion = 3 //borrar
    var respuesta = confirm("¿Está seguro de eliminar el registro: "+id+"?");
    if(respuesta){
        $.ajax({
            url: "bd/crud.php",
            type: "POST",
            dataType: "json",
            data: {opcion:opcion, id:id},
            success: function(){
                tablaPersonas.row(fila.parents('tr')).remove().draw();
            }
        });
    }   
});
    
$("#formPersonas").submit(function(e){
    e.preventDefault();    
    nombre = $.trim($("#nombre").val());
    apellido_p = $.trim($("#apellido_p").val());
    apellido_m = $.trim($("#apellido_m").val());
    correo = $.trim($("#correo").val());
    direccion = $.trim($("#direccion").val());
    telefono = $.trim($("#telefono").val());
    puesto = $.trim($("#puesto").val());
        
    $.ajax({
        url: "bd/crud.php",
        type: "POST",
        dataType: "json",
        data: {nombre:nombre, apellido_m:apellido_m, apellido_p:apellido_p, correo:correo, direccion:direccion, telefono:telefono, puesto:puesto,id:id, opcion:opcion},
        success: function(data){  
            console.log(data);
            id = data[0].id;            
            nombre = data[0].nombre;
            apellido_p = data[0].apellido_p;
            apellido_m = data[0].apellido_m;
            correo = data[0].correo;
            direccion = data[0].direccion;
            telefono = data[0].telefono;
            puesto = data[0].puesto;

            if(opcion == 1){tablaPersonas.row.add([id,nombre,apellido_p, apellido_m, correo, direccion, telefono,puesto]).draw();}
            else{tablaPersonas.row(fila).data([id,nombre,apellido_p, apellido_m, correo, direccion, telefono,puesto]).draw();}            
        }        
    });
    $("#modalCRUD").modal("hide");    
    
});    
    
});