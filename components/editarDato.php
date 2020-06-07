<?php

session_start();
$user = $_SESSION['userName'];

if (!isset($user)) {

  header("location: ../index.php");
}
  ?>
<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <link rel="shortcut icon" href="../img/logo.ico" type="image/x-icon">

    <link rel="stylesheet" href="../css/bootstrap.min.css">
    <link rel="stylesheet" href="../css/style.css">
   


    <script src="../js/jquery-3.4.1.slim.min.js"></script>
    <script src="../js/b46c20e3c5.js" crossorigin="anonymous"></script>
    <script src="../js/fechaactual.js"></script>
</head>


<body>
    <?php
    include("../util/conexion.php");
    
    if(isset($_GET['id'])){ 
      $id=$_GET['id']; 
      $tabla=$_GET['tabla'];

        if($tabla == "orden_productos_description"){
             $consultaProductos ="SELECT T1.id,T1.cantidad,T2.producto,T1.color,T1.od FROM orden_productos_description T1 INNER JOIN productos T2 ON T1.id_producto = T2.id WHERE T1.id='$id' ;";
              $result = $conn->query($consultaProductos) or die($conn->error);
        }else{
            $consulta ="SELECT * FROM $tabla WHERE id='$id'";
            $result = $conn->query($consulta) or die($conn->error);
        }

     

      
      $datos=$result->fetch_assoc();
    }
  
     
           

?>
    <!-- Image and text -->
   <nav class="navbar  navbar-expand-lg navbar-light bg-white">
    <a class="navbar-brand" href="#">
        <img src="../img/logo.jpg" width="30" height="30" class="d-inline-block align-top" alt="">
        Seven
    </a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown"
        aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNavDropdown">
        <div class="navbar-nav ml-auto">

<li class="nav-item">
                <a class="nav-link" href="#">Bienvenid@: <?php echo $_SESSION['userName'];?></a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="../index.php">Cerrar sesión</a>
            </li>



            </ul>
        </div>
</nav>
<div class="container-fluid">


<div>
    <h3 class="text-center">Actualización de datos</h3>
</div>
    
    <?php
                    if($tabla=="productos"){
                        ?>

                        <form action="../util/actualizarDatos.php?tabla=<?php echo $tabla;?>&id=<?php echo $id;?>" method="post" autocomplete="off">
                            
                            <div class="container py-3">
                                <div>
                                    <label>Nombre del producto:</label>
                                    <input type="text" class="w-100 inputDato" name="nombre"   value="<?php echo $datos['producto'];?>"  placeholder="<?php echo $datos['nombre'];?>" />
                                    
                                    <label>Precio $:</label>
                                    <input type="text" class="w-100 inputDato" name="precio" value="<?php echo $datos['precio'];?> " placeholder="<?php echo $datos['precio']."00";?>" />
                                </div>  
                            </div> 
                            
                            <div class="text-center py-2">
                             <button type="submit" class="btn btn-dark text-white">Actualizar</button>
                             <a href="../dashboard.php" class="btn btn-info" role="button">Cancelar</a>
                           </div>


                        </form>
      
                    <?php    }elseif($tabla=="dentistas"){ ?>

                          <form action="../util/actualizarDatos.php?tabla=<?php echo $tabla;?>&id=<?php echo $id;?>" method="post" autocomplete="off">
                            
                            <div class="container py-3">
                                <div>
                                    <label>Nombre del dentista</label>
                                    <input type="text" class="w-100 inputDato py-1" name="nombre"   value="<?php echo $datos['nombre'];?>"  placeholder="<?php echo $datos['nombre'];?>">
                                    
                                    <label>Domicilio</label>
                                    <input type="text" class="w-100 inputDato py-1" name="domicilio" value="<?php echo $datos['domicilio'];?>" placeholder="<?php echo $datos['domicilio'];?>">
                                    
                                    <label>Teléfono personal</label>
                                    <input type="text" class="w-100 inputDato py-1" name="telPersonal" value="<?php echo $datos['telPersonal'];?>" placeholder="<?php echo $datos['telPersonal'];?>" >
                                    
                                    <label>Telefono del consultorio</label>
                                    <input type="text" class="w-100 inputDato py-1" name="telConsultorio" value="<?php echo $datos['telConsultorio'];?>" placeholder="<?php echo $datos['telconsultorio']?>" >
                                
                                    <label>Email</label>
                                    <input type="text" class="w-100 inputDato py-1" name="email" value="<?php echo $datos['email'];?>" placeholder="<?php echo $datos['email'];?>" >

                                    <label class="py-2">Identificador:</label>
                                    <input type="color" class="w-20 inputDato" name="color" value="<?php echo $datos['color'];?>">
                                
                                </div>  
                            </div> 
                            
                            <div class="text-center py-2">
                             <button type="submit" class="btn btn-dark text-white">Actualizar</button>
                             <a href="../dashboard.php" class="btn btn-info" role="button">Cancelar</a>
                           </div>


                        </form>
                        






                <?php    }elseif($tabla=="orden_productos_description"){ 
                      $consultaProducto= "SELECT producto FROM productos ORDER BY nUsado DESC; ";
    $resultProducto=mysqli_query($conn,$consultaProducto);

    $consultaColores= "SELECT colorName FROM colores;";
    $resultColores=mysqli_query($conn,$consultaColores);
                    
                    
                    ?>



                     <form action="../util/actualizarDatos.php?tabla=<?php echo $tabla;?>&id=<?php echo $id;?>" method="post" autocomplete="off">
                            
                            <div class="container py-3">
                                <div class="row">
                                    <div class="col-md-6">
                                        <p>
                                         <label>Cantidad:</label>
                                         <input type="text" class="w-100 inputDato py-1" name="cantidadNew"   value="<?php echo $datos['cantidad'];?>"  placeholder="<?php echo $datos['cantidad'];?>">
                                    
                                        </p>
                                      

                                    </div>
                                    <div class="col-md-6">
                                        <p>
                                        <label>Producto:</label>
                                        <input list="productos" class="w-100 inputDato py-1" name="productoNew" value="<?php echo $datos['producto'];?>" placeholder="<?php echo $datos['producto'];?>">
                                    
                                        </p>
                                          <datalist class="inputDato" id="productos">
                                        <?php
                                            while($datosP=$resultProducto->fetch_assoc()){
                                            ?>
                                            <option  value="<?php echo strtoupper($datosP['producto']);?>"> </option>
                                            <?php }?>
                                            </datalist>

                                    </div>
                                </div> 
                                 <div class="row py-3">
                                    <div class="col-md-6">
                                        <p>
                                             <label>Color:</label>
                                            <input list="colores" style="font-size: 14px;"   name="colorNew" class="inputDato w-100" value="<?php echo $datos['color'];?>"  placeholder="<?php echo $datos['color'];?>" >
                                   
                                        </p>
                                        <datalist class="inputDato" id="colores">
                                    <?php
                                        while($datosC=$resultColores->fetch_assoc()){
                                        ?>
                                        <option  value="<?php echo strtoupper($datosC['colorName']);?>"> </option>
                                        <?php }?>
                                        </datalist>

                                    </div>
                                    <div class="col-md-6">
                                        <p>
                                               <label>OD:</label>
                                            <input type="text" class="w-100 inputDato py-1" name="odNew" value="<?php echo $datos['od'];?>" placeholder="<?php echo $datos['od']?>" >
                                

                                        </p>
                                      

                                    </div>
                                </div>    
                                   
           
                            </div> 
                            
                            <div class="text-center py-2">
                             <button type="submit" class="btn btn-dark text-white">Actualizar</button>
                             <a href="../dashboard.php" class="btn btn-info" role="button">Cancelar</a>
                           </div>


                        </form>









                <?php } ?>
</div>
    



    <script src="../js/jquery-3.4.1.slim.min.js">
    </script>
    <script src="../js/popper.min.js">
    </script>
    <script src="../js/bootstrap.min.js">
    </script>
</body>

</html>