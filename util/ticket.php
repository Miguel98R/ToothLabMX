<?php 
    include "conexion.php";

    if(isset($_POST['buscador'])){
       
        $indice=$_POST['buscador'];
        $newCabeza = "SELECT T1.id,T1.paciente,T2.nombre,T1.fechaEntrante , T1.fechaSaliente , T1.comentario,T1.status FROM orden_cabeza T1 INNER JOIN dentistas T2 ON T1.id_dentista=T2.id WHERE T1.id='$indice';";

   }else{

       $indice = "SELECT MAX(id) as id FROM orden_cabeza;";
       $result = $conn->query($indice) or die (mysqli_error($conn));
       $dato=$result->fetch_assoc();

       $id=$dato['id'];
       $newCabeza = "SELECT T1.id,T1.paciente,T2.nombre,T1.fechaEntrante , T1.fechaSaliente , T1.comentario,T1.status FROM orden_cabeza T1 INNER JOIN dentistas T2 ON T1.id_dentista=T2.id WHERE T1.id='$id';";
     }
   
    $result = $conn->query($newCabeza) or die (mysqli_error($conn));
    $datos=$result->fetch_assoc();

  

    $folio=$datos['id'];
 
    $paciente=$datos['paciente'];
    $dentista=$datos['nombre'];
    $fecha1=date_create($datos['fechaEntrante']);
    $fecha2=date_create($datos['fechaSaliente']);
    $comentario=$datos['comentario'];
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


   