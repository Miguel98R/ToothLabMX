 <form action="./util/actualizarDatos.php?tabla=orden_productos_description&id=<?php echo $idproducto;?>" method="post" autocomplete="off">
                            
                            <div class="container py-3 ">
                                <div class="text-center">
                                 <img  src="./img/diagrama.jpg">
                                </div>
                           
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
                                         

                                    </div>
                                </div> 
                                 <div class="row py-3">
                                    <div class="col-md-6">
                                        <p>
                                             <label>Color:</label>
                                            <input list="colores" style="font-size: 14px;"   name="colorNew" class="inputDato w-100" value="<?php echo $datos['color'];?>"  placeholder="<?php echo $datos['color'];?>" >
                                   
                                        </p>
                                      

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
                             <a data-dismiss="modal" class="btn btn-info" role="button">Cancelar</a>
                           </div>


                        </form>