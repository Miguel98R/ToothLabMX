

  <form action="./util/actualizarDatos.php?tabla=productos&id=<?php echo $datos['id'];?>" method="post" autocomplete="off">
                            
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
                             <a data-dismiss="modal" class="btn btn-info" role="button">Cancelar</a>
                           </div>


                        </form>
      