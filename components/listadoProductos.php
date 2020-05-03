<?php 

$consulta= "SELECT id,nombre,precio FROM productos;";
$result=mysqli_query($conn,$consulta);

?>

        
    <div class="container py-4" >

    <div class="row">
            <div class="col-lg-12">                    
                <table class="table table-striped table-hover table-bordered font-weight-bolder " id="productoList">
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
                          <td style="width: 50%;" ><?php echo utf8_encode( $datos['nombre']) ?></td>
                          <td><?php echo "$"." ". $datos['precio'] ?></td>
                          <td>
                             <div class="row">
                                <div class="p-1"><a href="eliminarDato.php?tabla=productos&id=<?php echo $datos['id']?>" class="btn btn-danger"><i class="fas fa-trash"></i></a></div>
                                <div class="p-1"><a href="./components/editarDato.php?tabla=productos&id=<?php echo $datos['id'];?>" class="btn btn-warning"><i class="fas fa-edit"></i></a></div>
                              </div>
                          </td>
                          </tr>
                          <?php }?>
                    </tbody>
                  
                </table>
            </div>
    </div>
    </div>   


   

