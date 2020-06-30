<?php 

$consulta= "SELECT id,producto,precio FROM productos;";
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
                        <td >Acciones</td>
                        </thead>
                      </tr>
                    </thead>
                    <tfoot class="thead-dark">
                    <tr>
                      <td>#</td>
                        <td >Nombre</td>
                        <td >Precio</td>
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
                          <td>
                             <div class="row px-3">
                                <div ><a title="Eliminar producto"  href="./util/eliminarDato.php?tabla=productos&id=<?php echo $datos['id']?>" onclick="return confirmar();" class="btn btn-danger"><i class="fas fa-trash"></i></a></div>&nbsp;
                                <div ><a title="Editar producto"  href="./components/editarDato.php?tabla=productos&id=<?php echo $datos['id'];?>" class="btn btn-warning"><i class="fas fa-edit"></i></a></div>
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


   

