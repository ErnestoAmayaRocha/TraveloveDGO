
          

    
    <!DOCTYPE html>
<html>
<head>
    <title>Modificar</title>
        <link rel="stylesheet" href="style.css">
        <link rel="stylesheet" href="css/core-style.css">
</head>
<body>
    <center>
        <div  class="col-8">
<div class="checkout_details_area mt-50 clearfix">

                            <div class="cart-title">
                                <h2><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Modificar</font></font></h2>
                            </div>
                            <?php
                include '../conexionbd.php';
              
                $id= $_GET ["id"];
                $usuario = "SELECT * FROM usuarios WHERE id_user='$id'";
                $result=mysqli_query($conex,$usuario);

                while($mostrar=mysqli_fetch_array($result)){
                        ?>
                

                            <form action="actualizarusus.php" method="post">
                                <div class="row">
                                    <div class="col-md-6 mb-3">
                                        <input type="text" class="form-control" id="txtNombre" value="<?php echo $mostrar ['nombre'] ?>" placeholder="Nombre" name="nombre">
                                        
                                    </div>
                                    <div class="col-md-6 mb-3">
                                        <input type="text" class="form-control" id="txtApellido" value="<?php echo $usuario["apellido_p"]; ?>" placeholder="Apellido Paterno" name="apellidop">
                                    </div>
                                
                                    <div class="col-12 mb-3">
                                        <input type="text" class="form-control" id="txtCorreo" placeholder="Apellido Materno" value="<?php echo $usuario["apellido_m"]; ?>" name="apellidom">
                                    </div>
                                    <div class="col-12 mb-3">
                                        <input type="text" class="form-control" id="txtPassword" placeholder="Usuario" name="usuario" value="<?php echo $usuario["usuario"]; ?>">
                                    </div>
                                    <div class="col-12 mb-3">
                                        <input type="text" class="form-control mb-3" id="txtDomicilio" placeholder="Correo" name="correo" value="<?php echo $usuario["correo"]; ?>">
                                    </div>
                                    <div class="col-12 mb-3">
                                        <input type="text" class="form-control" id="txtTelefono" placeholder="Telfefono" name="telefono" value="<?php echo $usuario["telefono"]; ?>">
                                    </div>
                                     <div class="col-12 mb-3">
                                        <input type="text" class="form-control" id="txtTipo" placeholder="Tipo" name="txtTipo" value="<?php echo $usuario["tipo"]; ?>">

                                        <input type="text" class="form-control" id="txtid" value="<?php echo $id ?>" placeholder="id" name="txtid"  >
                                    </div>
                                    <?php
                }
                ?>
                                        </div>
                                        
                                    </div>



                                    
                                </div>
                               






                                <button class="btn_sign_up" >Modificar </button>
                            </form>
                        </div>
                    </div>
                
    </center>
</body>
</html>


