<?php 

    
    include "conexion.php";

    $id = $_GET['id'];

    $statusNuevo = $_POST['statusNuevo'];
    $comentarioNuevo = $_POST['comentarioNuevo'];
    $dentistaNuevo= $_POST['dentistaEditar'];
    $pasienteNuevo= $_POST['pacientEeditar'];

  

    
    $consultaridDentista= "SELECT id FROM dentistas WHERE nombre='$dentistaNuevo';";
    $resultidDentista = $conn->query($consultaridDentista) or die(mysqli_error($conn));
    $datoidDentista=$resultidDentista->fetch_assoc();
    $idDentista = $datoidDentista['id'];

    $consulta = "SELECT paciente,id_dentista,comentario,status FROM orden_cabeza WHERE id='$id';";
    $result = $conn->query($consulta) or die (mysqli_error($conn));
    $datos=$result->fetch_assoc();


     if($dentistaNuevo == null || $dentistaNuevo == " "){
         
        $dentistaNuevo = $datos['id_dentista'] ;
     }else{
        $dentistaNuevo = $idDentista;
     }


     if($pasienteNuevo == null || $pasienteNuevo == " "){
         
        $pasienteNuevo = $datos['paciente'] ;
     }
    if($statusNuevo == 0){
         
        $statusNuevo = $datos['status'] ;
    }

 
    
    if($comentarioNuevo == null || $comentarioNuevo == " "){
        
        $comentarioNuevo = $datos['comentario'] ;
    }else{
        
        $comentarioNuevo = $datos["comentario"]." / ".$comentarioNuevo;
    }

    $actualizar = "UPDATE orden_cabeza SET paciente='$pasienteNuevo',id_dentista='$dentistaNuevo',comentario='$comentarioNuevo',status = '$statusNuevo' WHERE id='$id'; ";
        
    $result = $conn->query($actualizar) or die($conn->error);


  


    if($result==true){
            echo'<script type="text/javascript">
            alert("Actualizado con exito ");
            window.location.href="../dashboard.php";
            </script>';
            }else{
                echo'<script type="text/javascript">
                alert("Error al actualizar");
                window.location.href="../dashboard.php";
                </script>';
            }



?>



