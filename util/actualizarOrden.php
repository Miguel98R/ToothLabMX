<?php 

    
     include "conexion.php";
     session_start();

    $id = $_GET['id'];

    $statusNuevo = $_POST['statusNuevo'];
    $comentarioNuevo = $_POST['comentarioNuevo'];
    $dentistaNuevo= $_POST['dentistaEditar'];
    $pasienteNuevo= $_POST['pacientEeditar'];
    $nuevaFecha = $_POST['fechaSalidaNuevo'];

  

    
   

    $consulta = "SELECT paciente,id_dentista,comentario,fechaSaliente,status FROM orden_cabeza WHERE id='$id';";
    $result = $conn->query($consulta) or die (mysqli_error($conn));
    $datos=$result->fetch_assoc();


     if($dentistaNuevo == null || $dentistaNuevo == " "){
         
        $dentistaNuevo = $datos['id_dentista'] ;
     }

      if($nuevaFecha == null || $nuevaFecha == " "){
         
        $nuevaFecha = $datos['fechaSaliente'] ;
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

    $actualizar = "UPDATE orden_cabeza SET paciente='$pasienteNuevo',id_dentista='$dentistaNuevo',comentario='$comentarioNuevo',fechaSaliente='$nuevaFecha',status = '$statusNuevo' WHERE id='$id'; ";
        
    $result = $conn->query($actualizar) or die($conn->error);


  


    if($result==true){

       $_SESSION["mensaje"] = "Actualizado con éxito ";


$_SESSION["colorMensaje"] = "success";

header("location: ../dashboard.php");



}else{
   $_SESSION["mensaje"] = "Error al actualizar";


$_SESSION["colorMensaje"] = "danger";

header("location: ../dashboard.php");

}
  
         



?>



