<?php 

$consulta= "SELECT id,producto,precio,status FROM productos;";
$result=mysqli_query($conn,$consulta);

?>

        
    <div class="container-fluid justify-content-center py-4" >

    <div class="row">
            <div class="px-5 m-auto justify-content-center" >                    
                <table class="table table-striped  table-sm table-hover table-bordered font-weight-bold "style="font-family: Trebuchet MS;" id="productoList">
                    <thead class="thead-dark">
                    <tr>
                        <td>#</td>
                        <td >Nombre</td>
                        <td >Precio</td>
                        <td >Status</td>
                        <td >Acciones</td>
                        </thead>
                      </tr>
                    </thead>
                    <tfoot class="thead-dark">
                    <tr>
                      <td>#</td>
                        <td >Nombre</td>
                        <td >Precio</td>
                         <td >Status</td>
                        <td >Acciones</td>
                        </thead>
                      </tr>
                    </tfoot>
                 
                    <tbody>
                       <?php 
                      while($datos=$result->fetch_assoc()){
                    ?>
                    <tr>
                          <td><?php echo $datos['id'] ?></td>
                          <td style="width: 50%;" ><?php echo mb_strtoupper( $datos['producto']) ?></td>
                          <td><?php echo "$"." ". $datos['precio'] ?></td>
                           <?php 
                        $status = $datos['status'];
                          
                        if($status==1){
                            $status="EN USO";
                            $colorStatus ="green";
                          }else if($status==0){
                            $status="INACTIVO";
                            $colorStatus ="blue";
                          }

                        
                        ?>

                             <td style="color:<?php echo $colorStatus?>;"><?php echo $status; ?></td>
                          <td>
                             <div class="row px-3">
                                <div class="col"><a title="Eliminar producto"  href="./util/eliminarDato.php?tabla=productos&id=<?php echo $datos['id']?>" onclick="return confirmar();" class="btn btn-info btn-sm"><i class="fas fa-info"></i></a></div>&nbsp;
                                <div class="col"><a title="Editar producto" data-toggle="modal" data-target="#exampleModalitem<?php echo $datos['id']; ?>" href="./components/editarDato.php?tabla=productos&id=<?php echo $datos['id'];?>" class="btn btn-warning btn-sm"><i class="fas fa-edit"></i></a>
                              
                               <!-- Modal Editar Dentista -->
                                  <div class="modal fade bd-example-modal-lg" id="exampleModalitem<?php echo $datos['id'];?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                    <div class="modal-dialog modal-lg">
                                      <div class="modal-content">
                                        <div class="modal-header blue-gradient">
                                          <h5 class="modal-title text-white" id="exampleModalLabel">Editar Producto</h5>
                                          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                            <span aria-hidden="true">&times;</span>
                                          </button>
                                        </div>
                                        <div class="modal-body">

                                        <?php include "components/editarItem.php";?> 
                                      
                                        </div>
                                      
                                      </div>
                                    </div>
                                  </div>
                              
                              </div>
                             
                             
                             
                              </div>
                          </td>
                          </tr>
                          <?php }?>
                    </tbody>
                  
                </table>
            </div>
    </div>
    </div>   


<script>
function confirmar()
{
	if(confirm('Estas apunto de eliminar este registro . ¿Estas seguro ?'))
		return true;
	else
		return false;
}
</script>


   

