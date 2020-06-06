<?php 

    $consultaProductos ="SELECT T1.id,T1.cantidad,T2.producto,T1.color,T1.od FROM orden_productos_description T1 INNER JOIN productos T2 ON T1.id_producto = T2.id WHERE id_orden=$folio ;";
    $resultProducto=mysqli_query($conn,$consultaProductos);

    $color="SELECT color from dentistas WHERE nombre='$dentista';";
    $result = $conn->query($color) or die (mysqli_error($conn));
    $datos=$result->fetch_assoc();

    $ticketColor=$datos['color'];

?>

<div class="container">

              <div class="row py-3">
              <div class="col-md-4">
              <div class="card" style="border-radius: 20px;">
                    <div class="card-body">
                         <h5 class="card-title font-weight-bolder">Modificar dentista:</h5>
                    <div class="text-center ">
                    <input list="dentista"  name="dentistaEditar" class="inputDato" placeholder="Selecciona un dentista:" >                      
                    </div>
                    </div>
                    </div>

                </div> 
                <div class="col-md-4">
                  <div class="card" style="border-radius: 20px;">
                    <div class="card-body">
                         <h5 class="card-title font-weight-bolder">Modificar paciente:</h5>
                    <div class="text-center ">
                    <input type="text"  name="pacientEeditar" class="inputDato">
                      
                    </div>
                    </div>
                    </div>

                </div>
                <div class="col-md-4">

                  <div class="card" style="border-radius: 20px;">
                  <div class="card-body">
                       <h5 class="card-title font-weight-bolder">Modificar status:</h5>
              <select name="statusNuevo" id="statusNuevo" >
                  <option value="0">Selecciona una opcion :</option>
                 <option value="2">PRUEBA</option>
                  <option value="3">REGRESADO</option>
                  <option value="4">TERMINADO</option>
                  <option value="6">CANCELADO</option>
              </select>
                  </div>
                  </div>
                 
          </div>

              </div>

          
            
              <div class="row py-3">
               
              
            <div class="col-md-4">
                  <div class="card" style="border-radius: 20px;">
                    <div class="card-body">
                         <h5 class="card-title font-weight-bolder">Agregar mas comentarios:</h5>
                    <div class="text-center ">
                       <textarea name="comentarioNuevo"  class=" inputDato w-100"  ></textarea>
                    </div>
                    </div>
                    </div>
                   
                </div>
             
        
                   
            </div>
           
            
            
             <div class="py-2 px-5 text-center">
             <table class="table">
  <thead>
    <tr>
     
      <th scope="col">CANTIDAD</th>
      <th scope="col">PRODUCTOS</th>
      <th scope="col">COLOR</th>
      <th scope="col">ACCIONES</th>
    </tr>
  </thead>
  <tbody>
      <?php 
              while($datos=$resultProducto->fetch_assoc()){
          
             ?>
    <tr>
     
      <td><?php echo $datos['cantidad']?></td>
      <td><?php echo $datos['producto']?></td>
      <td><?php echo $datos['color']?></td>
      <td><?php echo $datos['id']?></td>
    </tr>
    <?php } ?>
  </tbody>
</table>
              
              
  
                
            </div>
            
               <div >
                  <div class="text-center py-2">
                    <button type="submit" class="btn btn-primary">Guardar cambios</button>
                </div>
                
 </div>

</div>
