<?php 
    include("util/conexion.php");

   if(isset($_POST['buscador'])){
        $indice=$_POST['buscador'];

    $cabeza="SELECT id,dentista,paciente,producto,fecha1,fecha2,comentario,status FROM cabeza_orden WHERE id='$indice'; ";
   }else{
       $indice = "SELECT MAX(id) as id FROM cabeza_orden";

    $result = $conn->query($indice) or die (mysqli_error($conn));
    $dato=$result->fetch_assoc();
    $id=$dato['id'];
       
    $cabeza="SELECT id,dentista,paciente,producto,fecha1,fecha2,comentario,status FROM cabeza_orden WHERE id='$id'; ";
   }
   
   

    $result = $conn->query($cabeza) or die (mysqli_error($conn));
    $datos=$result->fetch_assoc();
    $folio=$datos['id'];
    $dentista=$datos['dentista'];
    $paciente=$datos['paciente'];
    $producto=$datos['producto'];
    $fecha1=$datos['fecha1'];
    $fecha2=$datos['fecha2'];
    $comentario=$datos['comentario'];
    $status=$datos['status'];

    if($status==1){
    $status="Orden Entrante";

    }
    if($status==2){
         $status="Prueba";
    }
     if($status==3){
         $status="Regresado ";
    }
     if($status==4){
         $status="Terminado";
    }
     if($status==5){
         $status="Cambios";
    }
    if($status==6){
         $status="Cancelado";
    }
    if($status==7){
         $status="Cancelado con costos";
    }

    ?>


<div class="container-fluid py-3" style=>
    <div class="row">
        <div class="col-md-5 text-center">

            <?php
            include("util/conexion.php");
            $color="SELECT color from dentistas WHERE nombre='$dentista';";
             $result = $conn->query($color) or die (mysqli_error($conn));
             $datos=$result->fetch_assoc();

             $ticketColor=$datos['color'];
            
            ?>

            <?php include("components/datosTicket.php "); ?>

        </div>
        <div class="col-md-6 text-center">
            <div>
                <form action="dashboard.php" method="post">
                    <div><input type="text" class="inputDato text-center" name="buscador" id="buscador"
                            placeholder="Ingresa un folio "></div>
                    <div class="py-2"> <button type=" submit" class="btn btn-primary text-center">Buscar orden</button>
                    </div>

                </form>

            </div>
            <div class="row">
                <div class="col-md-4"></div>
                <div class="col-md-4"></div>
                <div class="col-md-4"></div>
            </div>
            <div class="row">

            </div>
            <div class="row">

            </div>

            <div class=" py-5">
                <h5>Incluir nuevo comentario a la orden</h5>
                <div>
                    <textarea class="inputDato" name="comentario2" id="comentario2"></textarea>
                </div>

            </div>
            <div class="py-5">
                <h5>Cambiar status</h5>
                <select name="" id="">
                    <option value="0">Selecciona una opcion:</option>
                    <option value="1">Orden entrante</option>
                    <option value="2">Prueba</option>
                    <option value="3">Regresado</option>
                    <option value="4">Terminado</option>
                    <option value="5">Cambios</option>
                    <option value="6">Cancelado</option>
                    <option value="7">Cancelado con costos</option>
                </select>

            </div>

        </div>

    </div>






</div>