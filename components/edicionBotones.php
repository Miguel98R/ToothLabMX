<?php 

    $consultaProductos ="SELECT T1.id,T1.cantidad,T2.producto,T1.color,T1.od FROM orden_productos_description T1 INNER JOIN productos T2 ON T1.id_producto = T2.id WHERE id_orden=$folio ;";
    $resultProducto=mysqli_query($conn,$consultaProductos);

    $color="SELECT color from dentistas WHERE nombre='$dentista';";
    $result = $conn->query($color) or die (mysqli_error($conn));
    $datos=$result->fetch_assoc();

    $ticketColor=$datos['color'];

?>

<div class="container">

    <p><label >Modificar dentista: <input list="dentista"  name="dentistaEditar" class="inputDato" placeholder="Selecciona un dentista:" >    </label> </p> 
     <p><label >Modificar paciente: <input type="text"  name="pacientEeditar" class="inputDato">  </label> </p> 
      <p><label >Modificar status:      <select name="statusNuevo" id="statusNuevo" class="inputDato" >
                  <option value="0">Selecciona una opcion :</option>
                 <option value="2">PRUEBA</option>
                  <option value="3">REGRESADO</option>
                  <option value="4">TERMINADO</option>
                  <option value="6">CANCELADO</option>
              </select> </label> </p> 
      
        <p><label >Modificar fecha de salida: <input type="date" class="inputDato"  name="fechaSalidaNuevo">  </label> </p> 
 <p><label >Agregar mas comentarios:  <textarea name="comentarioNuevo"  class=" inputDato w-100"  ></textarea> </label> </p> 
     
                
            
            
               <div >
                  <div class="text-center py-2">
                    <button type="submit" class="btn btn-primary">Guardar cambios</button>
                </div>
                
 </div>

</div>
