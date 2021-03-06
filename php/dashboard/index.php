<?php require_once "vistas/parte_superior.php"?>

<!--INICIO del cont principal-->
<div class="container">
    <h1>Administrador de Usuarios</h1>
    
    
    
 <?php
include_once '../bd/conexion.php';
$objeto = new Conexion();
$conexion = $objeto->Conectar();

$consulta = "SELECT * FROM usuarios";
$resultado = $conexion->prepare($consulta);
$resultado->execute();
$data=$resultado->fetchAll(PDO::FETCH_ASSOC);
?>


<div class="container">
        <div class="row">
            <div class="col-lg-12">            
            <button id="btnNuevo" type="button" class="btn btn-success" data-toggle="modal">Nuevo</button>  
                <a href="reporte.php" target="_blank" title="reporte">
	       <img alt="reporte"  src="impresion.png" width="25"  />
</a> 
                
            </div>    
        </div>    
    </div>    
    <br>  
<div class="container">
        <div class="row">
                <div class="col-lg-12">
                    <div class="table-responsive">        
                        <table id="tablaPersonas" class="table table-striped table-bordered table-condensed" style="width:100%">
                        <thead class="text-center">
                            <tr>
                            <th>Id</th>
                                <th>Nombre</th>
                                <th>Apellido P</th>                                
                                <th>Apellido M</th>  
                                <th>Usuario</th>
                                <th>Correo</th>
                                <th>telefono</th>
                                <th>tipo</th>
                                <th>Acciones</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php                            
                            foreach($data as $dat) {                                                        
                            ?>
                            <tr>
                            <td><?php echo $dat['id_user'] ?></td>
                                <td><?php echo $dat['nombre'] ?></td>
                                <td><?php echo $dat['apellido_p'] ?></td>
                                <td><?php echo $dat['apellido_m'] ?></td>
                                <td><?php echo $dat['usuario'] ?></td>
                                <td><?php echo $dat['correo'] ?></td>
                                <td><?php echo $dat['telefono'] ?></td>
                                <td><?php echo $dat['tipo'] ?></td>
                                <td></td>
                            </tr>
                            <?php
                                }
                            ?>                                
                        </tbody>        
                       </table>                    
                    </div>
                </div>
        </div>  
    </div>    
      
<!--Modal para CRUD-->
<div class="modal fade" id="modalCRUD" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel"></h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span>
                </button>
            </div>
        <form id="formPersonas">    
            <div class="modal-body">
            <div class="form-group">
                <label for="nombre" class="col-form-label">Nombre:</label>
                <input type="text" class="form-control" id="nombre" required>
                </div>

                <div class="form-group">
                <label for="nombre" class="col-form-label">Apellido Paterno:</label>
                <input type="text" class="form-control" id="apellido_p" required>
                </div>

                <div class="form-group">
                <label for="pais" class="col-form-label">Apellido Materno:</label>
                <input type="text" class="form-control" id="apellidom" required>
                </div>    

                <div class="form-group">
                <label for="edad" class="col-form-label">Usuario:</label>
                <input type="text" class="form-control" id="usuario" required>
                </div>            

                <div class="form-group">
                <label for="nombre" class="col-form-label">Correo:</label>
                <input type="text" class="form-control" id="correo" required>
                </div>

                

                <div class="form-group">
                <label for="nombre" class="col-form-label">Telefono:</label>
                <input type="text" class="form-control" id="telefono" required>
                </div>

                <div class="form-group">
                <label for="nombre" class="col-form-label">Tipo ('usuario' o 'admin'):</label>
                <input type="text" class="form-control" id="tipo" required>
                </div>      
                <div class="form-group">
                <label for="nombre" class="col-form-label">Contrase??a:</label>
                <input type="password" class="form-control" id="contra" required>
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-light" data-dismiss="modal">Cancelar</button>
                <button type="submit" id="btnGuardar" class="btn btn-dark">Guardar</button>
            </div>
        </form>    
        </div>
    </div>
</div>  
      
    
    
</div>
<!--FIN del cont principal-->
<?php require_once "vistas/parte_inferior.php"?>