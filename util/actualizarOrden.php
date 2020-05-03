<?php 

    
    include("conexion.php");

    $id = $_GET['id'];
    $nuevoProducto = $_POST['productoNuevo'];
    $unidadesNuevo = $_POST['unidadesNuevo'];
    $fechaNueva = $_POST['nuevaFecha'];
    $statusNuevo = $_POST['statusNuevo'];
    $comentarioNuevo = $_POST['comentarioNuevo'];
    $opcion=0;

    $consulta = "SELECT producto,cantidad,fecha2,comentario,status FROM cabeza_orden WHERE id='$id';";
    $result = $conn->query($consulta) or die (mysqli_error($conn));
    $datos=$result->fetch_assoc();

    $consultaNuevos = "SELECT producto,cantidad FROM nuevos_productos WHERE id_cabeza='$id';";
    $result2 = $conn->query($consultaNuevos) or die (mysqli_error($conn));
    $datos2=$result2->fetch_assoc();

    if($nuevoProducto == $datos['producto'] ){
       
        $bandera = 1;
        $esigual=1;
   
         $unidadesNuevo = $unidadesNuevo + $datos["cantidad"];   
    }
    
    if ($nuevoProducto == $datos2['producto'] ) {
       
         $unidadesNuevo = $unidadesNuevo + $datos2["cantidad"];
           $bandera = 0;
         $esigual=1;
         $actualizaProductos = "UPDATE nuevos_productos SET cantidad = '$unidadesNuevo'  WHERE id_cabeza = '$id';";
        $result2 = $conn->query($actualizaProductos) or die($conn->error);
       
        
       
    }
    
    
    if($fechaNueva == null || $fechaNueva == ""){
        
        $fechaNueva = $datos['fecha2'] ;
    }
    if($statusNuevo == 0){
         
        $statusNuevo = $datos['status'] ;
    }
    if($comentarioNuevo == null || $comentarioNuevo == ""){
        
        $comentarioNuevo = $datos['comentario'] ;
    }else{
         $esigual=1;
        $comentarioNuevo = $datos["comentario"]."| |".$comentarioNuevo;
    }


     if($esigual==1){
        $opcion=0;
    }
    else{
        $opcion=1;
    }
   
if($opcion==1){
    switch ($opcion) {
        case 1:
             $insertarNuevos="INSERT INTO nuevos_productos (producto,cantidad,id_cabeza) VALUES('$nuevoProducto','$unidadesNuevo','$id');";
         $resultNuevos = $conn->query($insertarNuevos) or die (mysqli_error($conn));
            break;
      
    }

}
   

    if($bandera==1){
       
         $actualizar ="UPDATE cabeza_orden SET cantidad = '$unidadesNuevo', fecha2= '$fechaNueva',comentario='$comentarioNuevo',status='$statusNuevo' WHERE id = '$id';";
    
    }
    else{
         $actualizar ="UPDATE cabeza_orden SET  fecha2= '$fechaNueva',comentario='$comentarioNuevo',status='$statusNuevo' WHERE id = '$id';";
   
    }
     
        
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