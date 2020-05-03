<?php 
    include("conexion.php");
    if(isset($_POST['buscador'])){
       
        $indice=$_POST['buscador'];
        $cabeza="SELECT id,dentista,paciente,producto,cantidad,fecha1,fecha2,comentario,status FROM cabeza_orden WHERE id='$indice'; ";

   }else{

       $indice = "SELECT MAX(id) as id FROM cabeza_orden";
       $result = $conn->query($indice) or die (mysqli_error($conn));
       $dato=$result->fetch_assoc();

       $id=$dato['id'];
       $cabeza="SELECT id,dentista,paciente,producto,cantidad,fecha1,fecha2,comentario,status FROM cabeza_orden WHERE id='$id'; ";
   }
   
    $result = $conn->query($cabeza) or die (mysqli_error($conn));
    $datos=$result->fetch_assoc();

  

    $folio=$datos['id'];
    $dentista=$datos['dentista'];
    $paciente=$datos['paciente'];
    $producto=$datos['producto'];
    $cantidad=$datos['cantidad'];
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