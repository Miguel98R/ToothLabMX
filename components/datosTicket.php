<?php 

    $consultaProductos ="SELECT T1.id,T1.cantidad,T2.producto,T1.color,T1.od FROM orden_productos_description T1 INNER JOIN productos T2 ON T1.id_producto = T2.id WHERE T1.id_orden=$folio ;";
    $resultProducto=mysqli_query($conn,$consultaProductos);

    $color="SELECT color from dentistas WHERE nombre='$dentista';";
    $result = $conn->query($color) or die (mysqli_error($conn));
    $datos=$result->fetch_assoc();

    $ticketColor=$datos['color'];

?>

<div  style="font-size: 14px; border: 7px solid  <?php echo $ticketColor;?>; border-radius:20px;">
<table class="table text-left table-bordered table-hover table-sm ">
  <tbody>
  <div style="background:<?php echo $ticketColor;?>;">
  <h5 class="text-center py-2 font-weight-bolder text-white"><i class="far fa-clipboard"></i> &nbsp;Orden</h5>
    </div>
    <tr>
      <th ><p><label style="color:<?php echo $ticketColor;?>;">Entrada:</label> &nbsp;<?php echo date_format($fecha1,"d/m/Y");?></p></th>
      <form action="dashboard.php" method="post"  >
                   <th ><p><label style="color:<?php echo $ticketColor;?>;">Folio:</label>
                        <input type="number" class="inputDato text-center" name="buscador" id="buscador"
                         value="<?php echo $folio;?>" min="0"  placeholder="Ingresa un folio ">
                    
                         <button type=" submit" class="button3 m-1 p-1  "><i class="fas fa-search"></i></button>
                    </p></th>

                </form>
    </tr>
    <tr>
      <th scope="col"><p><label style="color:<?php echo $ticketColor;?>;">Salida:</label> &nbsp;<?php echo date_format($fecha2,"d/m/Y");?></p></th>
      <th scope="col"><p><label style="color:<?php echo $ticketColor;?>;">Dr:</label>  &nbsp;<?php echo mb_strtoupper($dentista);?></p></th>
    </tr>
     <tr>
      <th scope="col"><p><label style="color:<?php echo $ticketColor;?>;">Status:</label> &nbsp;<?php echo $status;?></p></th>
      <th scope="col"><p><label style="color:<?php echo $ticketColor;?>;">Paciente:</label>  &nbsp;<?php echo  mb_strtoupper($paciente);?></p></th>
    </tr>
       <tr>
      <th scope="col"><p><label style="color:<?php echo $ticketColor;?>;">Regreso:</label></p></th>
      <th scope="col"><p><label style="color:<?php echo $ticketColor;?>;">Entrega:</label></p></th>
    </tr>
   
  </tbody>
</table>
<div class="py-2 text-center">
  <div class="row">
  <div class="col py-2 text-center font-weight-bold">
    <a class="btn btn-primary btn-sm" title="Imprimir orden" target="_blank"  href="util/impresionTicket.php?buscador=<?php echo $folio;?>"><i class="fas fa-print"></i></a>
</div>

 <div class="col py-2 text-center font-weight-bold">
  <button title="Agregar producto"  type="button" class="btn btn-primary btn-sm" data-toggle="modal" data-target="#exampleModal">
 <i class="fas fa-plus-square"></i>
</button>


</div>
<div class="col py-2 text-center font-weight-bold">
  <button  title="Editar orden"  type="button" class="btn btn-primary btn-sm" data-toggle="modal" data-target="#exampleModal1">
 <i class="fas fa-edit"></i>
</button>



</div>
  
</div>

<table class="table table-hover table-sm">
  <thead>
    <tr>
     
      <th scope="col">PZS</th>
      <th scope="col">PRODUCTOS</th>
      <th scope="col">COLOR</th>
      <th scope="col">OD</th>
      <th scope="col">ACCIÓN</th>
    
    </tr>
  </thead>
  <tbody>
    <?php 
    while($datos=$resultProducto->fetch_assoc()){

   ?>
    <tr>
   
      <td><?php echo $datos['cantidad'];?></td>
      <td><?php echo mb_strtoupper($datos['producto']);?></td>
      <td><?php echo mb_strtoupper($datos['color']);?></td>
       <td><?php echo $datos['od'];?></td>
       <td><a title="Editar producto"  href="./components/editarDato.php?tabla=orden_productos_description&id=<?php echo $datos['id'];?>" class="btn btn-warning btn-sm"><i class="fas fa-edit"></i></a></td>

    </tr>
    <?php } ?>
  </tbody>
</table>

</div>
  <hr>
<div class=" text-center py-2 font-weight-bold">
    <p><label  style="color:<?php echo $ticketColor;?>;">Comentarios:</label>  &nbsp;<?php echo mb_strtoupper($comentario);?></p>
</div>


<!-- Modal -->
<div class="modal fade bd-example-modal-lg" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-lg">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Nuevo producto</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <form action="util/agregarProducto.php?id=<?php echo $folio?>" method="POST" >
           <?php include "components/formNuevaDescripcion.php";?> 

           <button type="submit" class="btn btn-primary">Agregar</button>
        </form>
          
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancelar</button>
        
      </div>
    </div>
  </div>
</div>


  <!-- Modal -->
<div class="modal fade " id="exampleModal1" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
<div class="modal-dialog ">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Editar</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
 <form action="util/actualizarOrden.php?id=<?php echo $folio?>" class="py-2" method="post" autocomplete="off" >
          <?php include "components/edicionBotones.php";?> 

       
        </form>
           

         
       
          
      </div>
      
    </div>
  </div>
</div>



</div>



