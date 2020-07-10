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
                                    <input type="text" class="w-100 inputDato" name="nombre"  value="<?php echo $datos['producto'];?>"  placeholder="<?php echo $datos['nombre'];?>" />
                                    
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
                        






                <?php    } elseif($tabla=="datos"){ 

                    $consulta="SELECT * FROM orden_cabeza T1 INNER JOIN orden_productos_description T2 ON T2.id_orden=T1.id WHERE T1.id_dentista = '$id';";
                      
                    
                    ?>



                     <form action="../util/actualizarTotalDescripcion.php?id=<?php echo $id;?>" method="post" autocomplete="off">
                            
                            <div class="container py-3 text-center">
                              
                                $ <input type="number" class="inputDato" name="abono" id="abono" min="0" placeholder=" Ingresa nuevo abono">

                               
                            </div> 
                            
                            <div class="text-center py-2">
                             <button type="submit" class="btn btn-success text-white">Agregar abono</button>
                             <a href="../dashboard.php" class="btn btn-info" role="button">Cancelar</a>
                           </div>


                        </form>









            
                <?php } ?>
</div>
    



