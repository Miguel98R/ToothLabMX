

<div class="container-fluid">
    <div class="row px-5  " style="width: 80%;">
      <div class=" py-3 px-3  text-info bg-light" style="border-radius: 20px;">  
        <form action="util/guardarOrden.php" autocomplete="off" method="POST">
            <div class="row">
              
                 <div class="col-12 col-lg-6 ">
                      <input list="dentista" class="inputDato w-100" name="dentista"  placeholder="Ingresa un dentista: " required> 
                        <datalist class="inputDato" id="dentista">
                        <?php include("util/conexion.php");
                        $consulta= "SELECT nombre FROM dentistas;";
                        $result=mysqli_query($conn,$consulta);
                        while($datos=$result->fetch_assoc()){
                        ?>
                        <option value="<?php echo strtoupper(utf8_encode( $datos['nombre']));?>"> </option>
                        <?php }?>
                        </datalist>
  
                </div>
                 <div class="col-12 col-lg-6">
                 
                     <input type="text" class="inputDato w-100" name="paciente" id="paciente" placeholder="Ingresa el nombre del paciente:" required> 
                 </div>

             </div>
             <div class="row py-2 ">
                  <div class="col-12 col-lg-6">
                       Fecha de ingreso: <input class="inputDato w-100 " type="date" name="entrada" id="entrada" required> 
  
                </div>
               <div class="col-12 col-lg-6">
                     Fecha de salida: <input class="inputDato w-100" type="date" name="salida" id="salida" required>
                 </div>

             </div>
             <div class="text-center" style="z-index: 100%;">
               <img src="img/diagrama.jpg" alt="" srcset="">
            </div>

              <div class="row py-2 ">
                    <div class="col-12 col-lg-2">
                      <input  class="button2 w-25 p-0 m-0"  onclick="" placeholder="P" > 
                      <input  class="button2 w-25 p-0 m-0"  onClick="newOrgano(1)" placeholder="O.D" > 
                       
                 </div>
                <div class="col-12 col-lg-6">
                   <input list="producto" class="inputDato w-100" name="producto[]" id="product" placeholder="Ingresa un producto " required> 
                        <datalist class="inputDato" id="producto">
                        <?php
                        $consulta= "SELECT nombre FROM productos;";
                        $result=mysqli_query($conn,$consulta);
                        while($datos=$result->fetch_assoc()){
                        ?>
                        <option value="<?php echo strtoupper(utf8_encode( $datos['nombre']));?>"> </option>
                        <?php }?>
                        </datalist> 
                 </div>
                 <div class="col-12 col-lg-2">
                      <input list="organo" class="inputDato w-100" name="organo[]" id="org" placeholder="O.D" required> 
                        <datalist class="inputDato" id="organo">
                        <?php
                        $consulta= "SELECT nombre FROM organosdentales;";
                        $result=mysqli_query($conn,$consulta);
                        while($datos=$result->fetch_assoc()){
                            
                        ?>
                        <option style="color:brown;" value="<?php echo strtoupper(utf8_encode( $datos['nombre']));?>"> </option>
                        <?php }?>
                        </datalist> 
                 </div>
                  <div class="col-12 col-lg-2">
                      <input list="color" class="inputDato w-100" name="color[]" id="colors" placeholder="Color" required> 
                        <datalist class="inputDato" id="color">
                        <?php
                       $consulta= "SELECT nombre FROM colores;";
                        $result=mysqli_query($conn,$consulta);
                        while($datos=$result->fetch_assoc()){
                            
                        ?>
                        <option style="color:brown;" value="<?php echo strtoupper(utf8_encode( $datos['nombre']));?>"> </option>
                        <?php }?>
                        </datalist> 
                 </div>
                 </div>
                 <div id="organo">
                   
                 </div>
                  <div id="productoNew">
                   
                 </div>
                 <div id="productoNewOrgano">
                   
                 </div>
                 
               
                 
               
                 <div class="row py-2  ">
                 <div class="col-12 col-lg-6">
                        <textarea class="inputDato w-100" name="comentario" id="comentario" placeholder="Ingresa un comentario" required></textarea>
                 </div>
                  <div class="col-12 col-lg-6">
                <button class="button3  " type="submit ">Crear</button>     </div>
               

             </div>
          </form>
        </div>
        

    </div>
    <div>
      <!-- <?php include (components/datosTicket.php) ?> -->
    </div>
</div>



