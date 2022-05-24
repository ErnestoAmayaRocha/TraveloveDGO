<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <title>Registro</title>
    <link rel="stylesheet" href="../cssvariado/estiloslogin.css">
    <link rel="shorcut icon" type="image/x-icon" href="img/logotra.png" >
</head>
<body>
    <section class="login-form">
        <form action="registrar.php" method="POST">
            <div class="img">
                <img src="../img/logotra.png" alt="Logo travelove" >
            </div> 
            <div class="box">
                <div class="heading">
                    <h2></h2>
                </div>



                <div class="form-fields">
                    <div class="input-box">
                        <input type="text" placeholder="Nombre" 
                        class="form-control" 
                        id="Nombre" name="txtNombre">
                        <span><img src="../img/icono nombre.png" alt=""></span>
                    </div>



                    <div class="input-box">
                        <input type="text" placeholder="Apellido Paterno" 
                        class="form-control" 
                        id="ApellidoP" name="txtApellidoP">
                        <span><img src="../img/icono nombre.png" alt=""></span>
                    </div>




                    <div class="input-box">
                        <input type="text" placeholder="Apellido Materno" 
                        class="form-control"
                         id="ApellidoM" name="txtApellidoM">
                        <span><img src="../img/icono nombre.png" alt=""></span>
                    </div>
                    
                    
                    <div class="input-box">
                        <input type="text" placeholder="Usuario" 
                        class="form-control"
                         id="ApellidoM" name="txtApellidoM">
                        <span><img src="../img/icono nombre.png" alt=""></span>
                    </div>
                    
                    
                    <div class="input-box">
                        <input type="email" placeholder="Correo electronico " 
                        class="form-control1"  id="txtCorreo" name="txtcorreo">
                        <span><img src="../img/iconocorreo.png" alt=""></span>
                    </div>




                    <div class="input-box">
                        <input type="password" placeholder="Contraseña" class="form-control1" 
                         id="txtpass" name="txtpass">
                        <span><img src="../img/iconocandado.png" alt=""></span>
                    </div>

                    <div class="input-box">
                        <input type="password" placeholder=" Confirmar contraseña" class="form-control1" 
                         id="txtpass" name="txtpass">
                        <span><img src="../img/iconocandado.png" alt=""></span>
                    </div>




                   
                   
                   
                   
                
                   
                    
                  <div class="input-box">
                        <input type="text" placeholder="Telefono" class="form-control1"
                         id="txtTel" name="txtTel">
                        <span><img src="../img/iconotelefono.png" alt=""></span>
                    </div>

                   


                    <div class="button-box">
                        
                
        
                        <center> <button type="submit" name="register">Registrar</button></center>
                        
                    </div>
                    
                        
                
                </div>
        </form>

        


    </section>
    
    
    
    
    
    
    
    
    
    
    
    
    

    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
     <script src="https://cdn.jsdelivr.net/npm/sweetalert2@9"></script>
    
    
    
    
</body>
</html>