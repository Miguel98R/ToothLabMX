 <form action="./util/actualizarDatos.php?tabla=dentistas&id=<?php echo $datos['id'];?>" method="post" autocomplete="off">
                            
                            <div class="container py-3">
                                <div>
                                    <label>Nombre del dentista</label>
                                    <input type="text" class="w-100 inputDato py-1" name="nombre"   value="<?php echo $datos['nombre'];?>"  placeholder="<?php echo $datos['nombre'];?>">
                                    
                                    <label>Domicilio</label>
                                    <input type="text" class="w-100 inputDato py-1" name="domicilio" value="<?php echo $datos['domicilio'];?>" placeholder="<?php echo $datos['domicilio'];?>">
                                    
                                    <label>Teléfono personal</label>
                                    <input type="text" class="w-100 inputDato py-1" name="telPersonal" value="<?php echo $datos['telPersonal'];?>" placeholder="<?php echo $datos['telPersonal'];?>" >
                                    
                                    <label>Telefono del consultorio</label>
                                    <input type="text" class="w-100 inputDato py-1" name="telConsultorio" value="<?php echo $datos['telConsultorio'];?>" placeholder="<?php echo $datos['telConsultorio']?>" >
                                
                                    <label>Email</label>
                                    <input type="text" class="w-100 inputDato py-1" name="email" value="<?php echo $datos['email'];?>" placeholder="<?php echo $datos['email'];?>" >

                                    <label class="py-2">Identificador:</label>
                                    <input type="color" class="w-20 inputDato" name="color" value="<?php echo $datos['color'];?>">
                                
                                </div>  
                            </div> 
                            
                            <div class="text-center py-2">
                             <button type="submit" class="btn btn-dark text-white">Actualizar</button>
                             <a data-dismiss="modal" class="btn btn-info" role="button">Cancelar</a>
                       
                           </div>


                        </form>