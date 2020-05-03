<?php 

$consulta= "SELECT id,nombre,email,telPersonal,telConsultorio,domicilio,color FROM dentistas;";
$result=mysqli_query($conn,$consulta);

?>


  
             
    <div class="container py-4 ">

    <div class="row">
            <div class="col-lg-12">                    
                <table class="table table-striped table-hover table-bordered font-weight-bolder "  id="dentistasList">
                    <thead class="thead-dark">
                    <tr>
                      <td>#</td>
                        <td >Nombre</td>
                        <td >Email</td>
                        <td >Celular</td>
                        <td >Teléfono de consultorio</td>
                        <td >Dirección</td>
                        <td >Acciones</td>
                        </thead>
                      </tr>
                    </thead>
                    <tfoot class="thead-dark">
                    <tr>
                      <td>#</td>
                        <td >Nombre</td>
                        <td >Email</td>
                        <td >Celular</td>
                        <td >Teléfono de consultorio</td>
                        <td >Dirección</td>
                        <td >Acciones</td>
                        </thead>
                      </tr>
                    </tfoot>
                 
                    <tbody>
                       <?php 
                      while($datos=$result->fetch_assoc()){
                    ?>
                    <tr style="color:<?php echo $datos['color']?>;">
                          <td><?php echo strtoupper($datos['id']) ?></td>
                          <td style="width: 15%;" ><?php echo strtoupper(utf8_encode( $datos['nombre'])) ?></td>
                          <td><?php echo strtoupper($datos['email']) ?></td>
                          <td><?php echo $datos['telPersonal'] ?></td>
                          <td><?php echo $datos['telConsultorio'] ?></td>
                          <td><?php echo strtoupper(utf8_encode($datos['domicilio'])) ?></td>
                          <td>
                             <div class="row">
                              <div class="col-6"><a href="eliminarDato.php?table=dentistas&id=<?php echo $datos['id']?>" class="btn btn-danger"><i class="fas fa-trash"></i></a></div>
                                <div class="col-md-pull-6"><a href="editarDato.php?table=dentistas&id=<?php echo $datos['id']?>" class="btn btn-warning"><i class="fas fa-edit"></i></a></div>
                              </div>
                          </td>
                          </tr>
                          <?php }?>
                    </tbody>
                  
                </table>
            </div>
    </div>
    </div>   


   

