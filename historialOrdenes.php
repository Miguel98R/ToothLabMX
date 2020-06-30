<?php 
$consulta = "SELECT DISTINCT T1.id ,T1.paciente,T3.nombre,T3.color as CD ,T1.fechaEntrante,T1.fechaSaliente,T1.comentario,T1.status,T2.cantidad,T4.producto,T2.color,T2.od 
                    FROM orden_cabeza T1 INNER JOIN orden_productos_description T2 ON T1.id=T2.id_orden 
                    INNER JOIN dentistas T3 ON T1.id_dentista=T3.id 
                    INNER JOIN productos T4 ON T2.id_producto=T4.id ORDER BY T1.id  DESC;";








$result=mysqli_query($conn,$consulta);




?>

     <div class=" container text-center">
    
    
      <div><a class="btn btn-success text-white " href="util/exportarDatos.php">Respaldar &nbsp; <i class="fas fa-database"></i></a></div>
       

     </div>

  
             
     <div class="container-fluid justify-content-center py-4" >

    <div class="row">
            <div class="px-5 m-auto justify-content-center" >                    
                <table class="table table-striped table-sm table-hover table-bordered font-weight-bold "style="font-family: Trebuchet MS;"  id="hisList">
                    <thead class="thead-dark">
                    <tr>
                      <td>Folio</td>
                      <td >Fecha entrada</td>
                         <td>Ultima actualización</td>
                      <td >Dentista</td>
                        <td >Paciente</td>
                        <td >PZS</td>
                        <td >Producto</td>
                        <td >OD</td>
                        <td >Color</td>
                        <td >Status</td>
                        <td >Comentario</td>
                     <td >Acción</td>
                      </tr>
                    </thead>
                    <tfoot class="thead-dark">
                    <tr>
                     <td>Folio</td>
                      <td >Fecha entrada</td>
                       <td >Ultima actualización</td>
                      <td >Dentista</td>
                        <td >Paciente</td>
                        <td >PZS</td>
                        <td >Producto</td>
                        <td >OD</td>
                        <td >Color</td>
                        <td >Status</td>
                        <td >Comentario</td>
                        <td >Acción</td>
                      </tr>
                    </tfoot>
                 
                    <tbody>
                       <?php 
                      while($datos=$result->fetch_assoc()){
                         $fecha1=date_create($datos['fechaEntrante']);
                         $fecha2=date_create($datos['fechaSaliente']);

                         $status=$datos['status'];


                              if($status==1){
                              $status="ENTRANTE";
                              $bg = "blue";

                              }
                              if($status==2){
                                   $status="PRUEBA";
                                    $bg = "orange";
                              }
                                   if($status==3){
                                   $status="REGRESADO ";
                                    $bg = "pink";
                              }
                                   if($status==4){
                                   $status="TERMINADO";
                                    $bg = "red";
                              }
                               
                              if($status==6){
                                   $status="CANCELADO";
                                    $bg = "black";
                              }
                             
                    ?>
                    <tr>
                          <td><?php echo $datos['id'] ?></td>
                          <td><?php echo date_format($fecha1,"d/m/Y");?></td>
                          <td style="color:deepskyblue;"><?php echo date_format($fecha2,"d/m/Y");?></td>
                           <td style="color:<?php echo $datos['CD']?>;"><?php echo mb_strtoupper($datos['nombre']); ?></td>
                           <td><?php echo mb_strtoupper($datos['paciente']); ?></td>
                           <td><?php echo $datos['cantidad']; ?></td>
                           <td><?php echo $datos['producto']; ?></td>
                           <td><?php echo $datos['od']; ?></td>
                           <td><?php echo $datos['color']; ?></td>
                           <td style="color:<?php echo $bg; ?>;"><?php echo $status; ?></td>
                           <td style="text-transform: uppercase;"><?php echo mb_strtoupper($datos['comentario']); ?></td>
                         
                
                          <td>
                                <div class="p-1">
                                <a title="Imprimir"  href="./util/impresionTicket.php?buscador=<?php echo $datos['id'];?>" class="btn btn-info" target="_blank">
                                <i class="fas fa-print"></i>
                                </a>
                                </div>
                            
                          </td>
                       </tr>
                          <?php }?>
                    </tbody>
                  
                </table>
            </div>
    </div>





    
    </div>   


 
