<?php 
    include("util/ticket.php");
   
    ?>

<div class="container-fluid ">
    <div class="container " >
    <div class="row">
        <div class=" col-lg-5 col-md-12 col-sm-12 col-12 py-3  text-center" >

            <?php
            include("util/conexion.php");
            $color="SELECT color from dentistas WHERE nombre='$dentista';";
             $result = $conn->query($color) or die (mysqli_error($conn));
             $datos=$result->fetch_assoc();

             $ticketColor=$datos['color'];
            
            ?>

            <?php include("components/datosTicket.php "); ?>

        </div>
        <div class=" col-lg-7 col-md-6 col-sm-12 col-12 py-3  text-center" >
            <div class="py-2">   <h5 class="font-weight-bolder">Buscar Orden</h5><form action="dashboard.php" method="post"  >
                  
                        <input type="number" class="inputDato text-center" name="buscador" id="buscador"
                         value="<?php echo $folio;?>"   placeholder="Ingresa un folio ">
                    
                         <button type=" submit" class="button3 m-1 p-1  "><i class="fas fa-search"></i></button>
                    

                </form></div>
                 
           
           <form action="util/actualizarOrden.php?id=<?php echo $folio?>" class="py-2" method="post" autocomplete="off" style="background: rgb(240,242,255);
background: linear-gradient(90deg, rgba(240,242,255,1) 0%, rgba(212,212,212,1) 35%, rgba(232,230,255,1) 100%);border-radius: 20px;">
            <h5 class="font-weight-bolder">Modificar Orden</h5>
          
            <div class="row py-4">
                <div class="col-md-4"> 
                
                 
                         <h6 class="font-weight-bolder">Incluir nuevo producto:</h6>
                     <input  class="form-control inputDato py-2" type="text" name="productoNuevo" id="productoNuevo" autocomplete="off" >
                    </div>

              
                <div class="col-md-4">  
                     <h6 class="font-weight-bolder">Numero de unidades:</h6>
                    <input class="inputDato py-2" type="number" name="unidadesNuevo" id="unidades"  >
                </div>
                <div class="col-md-4">
                    <h6 class="font-weight-bolder">Incluir nueva fecha:</h6>
                      <input class="inputDato py-2" type="date" name="nuevaFecha" id="nuevaFecha"  >
            
                </div>
            </div>
             <!-- <div class="row py-4">
                <div class="col-md-4"></div>
                <div class="col-md-4"></div>
                <div class="col-md-4"></div>
            </div> -->
              <div class="row py-4">
                <div class="col-md-4"><h6 class="font-weight-bolder">Cambiar status:</h6>
                <select name="statusNuevo" id="statusNuevo" require>
                    <option value="0">Selecciona una opcion:</option>
                    <option value="1">Orden entrante</option>
                    <option value="2">Prueba</option>
                    <option value="3">Regresado</option>
                    <option value="4">Terminado</option>
                    <option value="5">Cambios</option>
                    <option value="6">Cancelado</option>
                    <option value="7">Cancelado con costos</option>
                </select></div>
                <div class="col-md-4"><h6 class="font-weight-bolder"> Incluir nuevo comentario a la orden:</h6>
                    <div>
                        <textarea class="inputDato" name="comentarioNuevo" id="comentarioNuevo" ></textarea>
                    </div></div>
                <div class="col-md-4">
                    <button type="submit" class="button3 m-1 p-1">Guardar</button>
                </div>
            </div>

             

 </form>
        </div>

    </div>






</div>

</div>
