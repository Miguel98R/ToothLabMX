<?php 
     include("conexion.php");

    $tabla= $_GET['tabla'];
    $id = $_GET['id'];

    
    if($tabla == "productos"){

        $status = "SELECT status FROM productos WHERE id='$id';";
    $resultado = $conn->query($status) or die (mysqli_error($conn));
    $dato = $resultado->fetch_assoc();
    $stado = $dato['status'];

        if($stado == 1){
        $consulta = "UPDATE productos
        SET status = 0
        WHERE id='$id';";

        $resultDoc = $conn->query($consulta) or die (mysqli_error($conn));

    }
    elseif($stado == 0){
        $consulta = "UPDATE productos
        SET status = 1
        WHERE id='$id';";

        $resultDoc = $conn->query($consulta) or die (mysqli_error($conn));

    }

    }elseif($tabla == "dentistas"){

    $status = "SELECT status FROM dentistas WHERE id='$id';";
    $resultado = $conn->query($status) or die (mysqli_error($conn));
    $dato = $resultado->fetch_assoc();
    $stado = $dato['status'];
         
    if($stado == 1){
        $consulta = "UPDATE dentistas
        SET status = 0
        WHERE id='$id';";

        $resultDoc = $conn->query($consulta) or die (mysqli_error($conn));

    }
    elseif($stado == 0){
        $consulta = "UPDATE dentistas
        SET status = 1
        WHERE id='$id';";

        $resultDoc = $conn->query($consulta) or die (mysqli_error($conn));

    }
        


    }
    if($resultDoc==true){
        echo'<script type="text/javascript">
        alert("Status actualizado ");
        window.location.href="../dashboard.php";
        </script>';
        }else{
            echo'<script type="text/javascript">
            alert("Error al eliminar registro");
            window.location.href="../dashboard.php";
            </script>';
        }

  

?>