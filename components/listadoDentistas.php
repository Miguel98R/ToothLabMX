<?php 

$consulta= "SELECT id,nombre,email,telPersonal,telConsultorio,domicilio,color,status FROM dentistas;";
$result=mysqli_query($conn,$consulta);

?>


  
             
     <div class="container-fluid justify-content-center py-4" >

    <div class="row">
            <div class="px-5 m-auto justify-content-center" >                    
                <table class="table table-striped table-sm table-hover table-bordered font-weight-bold "style="font-family: Trebuchet MS;"  id="dentistasList">
                    <thead class="thead-dark">
                    <tr>
                      <td>#</td>
                        <td >Nombre</td>
                        <td >Email</td>
                        <td >Celular</td>
                        <td >Teléfono de consultorio</td>
                        <td >Dirección</td>
                        <td >Status</td>
                        <td >Acciones</td>
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
                        <td >Status</td>
                        <td >Acciones</td>
                      </tr>
                    </tfoot>
                 
                    <tbody>
                       <?php 
                      while($datos=$result->fetch_assoc()){
                    ?>
                    <tr style="color:<?php echo $datos['color']?>;">
                          <td><?php echo $datos['id'] ?></td>
                          <td style="width: 15%;" ><?php echo strtoupper($datos['nombre']) ?></td>
                          <td><?php echo strtoupper($datos['email']) ?></td>
                          <td><?php echo $datos['telPersonal'] ?></td>
                          <td><?php echo $datos['telConsultorio'] ?></td>
                          <td><?php echo strtoupper(utf8_encode($datos['domicilio'])) ?></td>

                        <?php 
                        $status = $datos['status'];
                          
                        if($status==1){
                            $status="ACTIVO";
                            $colorStatus ="green";
                          }else if($status==0){
                            $status="INACTIVO";
                            $colorStatus ="blue";
                          }

                        
                        ?>

                          <td style="color:<?php echo $colorStatus?>;"><?php echo $status; ?></td>
                          
                          
                          
                          <td>
                             <div class="row px-3">
                                <div >
                                  <a title="Cambiar status" href="./util/eliminarDato.php?tabla=dentistas&id=<?php echo $datos['id']?>" onclick="return confirmarDc();" class="btn btn-info btn-sm"><i class="fas fa-clipboard-check"></i></a></div>&nbsp;
                                <div >
                               <a title="Editar Registro" href="./components/editarDato.php?tabla=dentistas&id=<?php echo $datos['id'];?>" class="btn btn-warning btn-sm"><i class="fas fa-edit"></i></a></div>
                               </div>
                          </td>
                          </tr>
                          <?php }?>
                    </tbody>
                  
                </table>
            </div>
    </div>
    </div>   


 <script >
 function confirmarDc()
{
	if(confirm('Estas apunto de modificar el status . ¿Estas seguro ?'))
		return true;
	else
		return false;
}</script>
