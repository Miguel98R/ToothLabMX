
<div style=" border: solid <?php echo $ticketColor;?>;border-radius:20px;heigth:auto; box-shadow: 6px 6px 6px 6px black;">

    <div class="row mx-0 my-0 py-1 px-0 " style="border-bottom: 0px solid  <?php echo $ticketColor;?> ;">
        <div class="w-50 ">
            
            <h6 class="font-weight-bolder  " style="color:<?php echo $ticketColor;?>;">Status:
                
            </h6>
            <p class="m-0 p-0 font-weight-bolder" ><?php echo $status;?></p>

        </div>
        <div class="w-50 ">
           <h6 class="font-weight-bolder  " style="color:<?php echo $ticketColor;?>;">Folio:
               
            </h6>
            <p class="m-0 p-0 font-weight-bolder"> <?php echo $folio;?></p>
        </div>

    </div>
    <div class="row mx-0 my-0 py-1 px-0 " style="border-bottom: 0px solid  <?php echo $ticketColor;?> ;">
        <div class="w-50 ">
            <h6 class="font-weight-bolder  " style="color:<?php echo $ticketColor;?>;">Entrada:
              
            </h6><p class="m-0 p-0 font-weight-bolder"> <?php echo $fecha1;?></p>
        </div>
        <div class="w-50 ">
           <h6 class="font-weight-bolder" style="color:<?php echo $ticketColor;?>;">Salida:
                
         </h6> <p class="m-0 p-0 font-weight-bolder"> <?php echo $fecha2;?></p>
        </div>

    </div>
<div class="row mx-0 my-0 py-1 px-0 " style="border-bottom: 0px solid  <?php echo $ticketColor;?> ;">
        <div class="w-50 ">
           <h6 class="font-weight-bolder  " style="color:<?php echo $ticketColor;?>;">Dentista:
               
            </h6>
            <p class="m-0 p-0 font-weight-bolder"><?php echo $dentista;?></p> 
        </div>
        <div class="w-50 ">
           <h6 class="font-weight-bolder  " style="color:<?php echo $ticketColor;?>;">Paciente:
               
            </h6>
 <p class="m-0 p-1 font-weight-bolder"> <?php echo $paciente;?></p> 
            
        </div>

    </div>
    <div class="w-100">
       <h6 class="font-weight-bolder  " style="color:<?php echo $ticketColor;?>;">Producto:
           
        </h6>
        <p class="m-0 p-1 font-weight-bolder"> <?php echo $producto ." "."X". $cantidad ." "."pz" ;?></p> 
        <?php 
           $consultarNuevos = "SELECT producto,cantidad FROM nuevos_productos WHERE id_cabeza='$folio';";
           $resultNuevos = $conn->query($consultarNuevos) or die (mysqli_error($conn));
           if($resultNuevos==true){
            while($datosNuevos=$resultNuevos->fetch_assoc()){
            
            ?>
            
            <p class="m-0 p-1 font-weight-bolder"> <?php echo $datosNuevos['producto'] ." "."X". $datosNuevos['cantidad'] ." "."pz" ;?></p> 

           <?php } ?>
           <?php } ?>
    </div>
    <div class="w-100">

       <h6 class="font-weight-bolder  " style="color:<?php echo $ticketColor;?>;">Color:
           

        </h6> <p class="m-0 p-1 font-weight-bolder">  <?php 
                    
                    $consulta ="SELECT color FROM color_orden WHERE id_cabeza='$folio' ;";
                    $result=mysqli_query($conn,$consulta);
                    while($datos=$result->fetch_assoc()){
                    echo  " " . "/". " " . $datos['color'] ;
                    }
                    
                    ?></p> 
    </div>
    <div class="w-100">

       <h6 class="font-weight-bolder  " style="color:<?php echo $ticketColor;?>;">Nomenclatura:
           

        </h6>
         <p class="m-0 p-1 font-weight-bolder">  <?php 
                    
                    $consulta ="SELECT nomenclatura FROM nomenclatura_orden WHERE id_cabeza='$folio' ;";
                    $result=mysqli_query($conn,$consulta);
                    while($datos=$result->fetch_assoc()){
                    echo " " . "/". " " . $datos['nomenclatura'] ;
                    }
                    
                    ?></p> 
    </div>
    <div class="w-100">

        <h6 class="font-weight-bolder text-left " style="color:<?php echo $ticketColor;?>;">Comentarios:
           

        </h6>  <p class="m-0 p-1 font-weight-bolder">   <?php 
                    
               
                    echo $comentario ;
                    
                    
                    ?></p> 
    </div>
    
 <div class=" text-center  col-md-12 ">
     <a class="button3 m-1 p-1" target="_blank"  href="util/impresionTicket.php?buscador=<?php echo $folio;?>">Imprimir</a>
            
            </div>

</div>
