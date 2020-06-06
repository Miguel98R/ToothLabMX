<?php 
$consulta = "SELECT DISTINCT T1.id ,T1.paciente,T3.nombre,T3.color as CD ,T1.fechaEntrante,T1.comentario,T1.status,T2.cantidad,T4.producto,T2.color,T2.od 
                    FROM orden_cabeza T1 INNER JOIN orden_productos_description T2 ON T1.id=T2.id_orden 
                    INNER JOIN dentistas T3 ON T1.id_dentista=T3.id 
                    INNER JOIN productos T4 ON T2.id_producto=T4.id ORDER BY T1.id  DESC;";








$result=mysqli_query($conn,$consulta);




?>

<div class=" container-fluid text-right px-3"><a class="btn btn-success text-white " href="util/exportarDatos.php">Respaldar base de datos</a></div>

  
             
     <div class="container-fluid justify-content-center py-4" >

    <div class="row">
            <div class="px-5 m-auto justify-content-center" >                    
                <table class="table table-striped table-sm table-hover table-bordered font-weight-bold "style="font-family: Trebuchet MS;"  id="hisList">
                    <thead class="thead-dark">
                    <tr>
                      <td>No.Folio</td>
                      <td >Fecha entrada</td>
                      <td >Dentista</td>
                        <td >Paciente</td>
                        <td >PZS</td>
                        <td >Producto</td>
                        <td >OD</td>
                        <td >Color</td>
                        <td >Status</td>
                        <td >Comentario</td>
                        <td >Accion</td>
                      </tr>
                    </thead>
                    <tfoot class="thead-dark">
                    <tr>
                     <td>No.Folio</td>
                      <td >Fecha entrada</td>
                      <td >Dentista</td>
                        <td >Paciente</td>
                        <td >PZS</td>
                        <td >Producto</td>
                        <td >OD</td>
                        <td >Color</td>
                        <td >Status</td>
                        <td >Comentario</td>
                        <td >Accion</td>
                      </tr>
                    </tfoot>
                 
                    <tbody>
                       <?php 
                      while($datos=$result->fetch_assoc()){
                         $fecha1=date_create($datos['fechaEntrante']);

                         $status=$datos['status'];


                              if($status==1){
                              $status="ENTRANTE";

                              }
                              if($status==2){
                                   $status="PRUEBA";
                              }
                                   if($status==3){
                                   $status="REGRESADO ";
                              }
                                   if($status==4){
                                   $status="TERMINADO";
                              }
                                   if($status==5){
                                   $status="CAMBIOS";
                              }
                              if($status==6){
                                   $status="CANCELADO";
                              }
                              if($status==7){
                                   $status="CANCELADO";
                              }
                    ?>
                    <tr>
                          <td><?php echo $datos['id'] ?></td>
                          <td><?php echo date_format($fecha1,"d/m/Y");?></td>
                           <td style="color:<?php echo $datos['CD']?>;"><?php echo mb_strtoupper($datos['nombre']); ?></td>
                           <td><?php echo mb_strtoupper($datos['paciente']); ?></td>
                           <td><?php echo $datos['cantidad']; ?></td>
                           <td><?php echo $datos['producto']; ?></td>
                           <td><?php echo $datos['od']; ?></td>
                           <td><?php echo $datos['color']; ?></td>
                           <td><?php echo $status; ?></td>
                           <td style="text-transform: uppercase;"><?php echo mb_strtoupper($datos['comentario']); ?></td>
                         
                
                          <td>
                                <div class="p-1">
                                <a href="./util/impresionTicket.php?buscador=<?php echo $datos['id'];?>" class="btn btn-info" target="_blank">
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


 
