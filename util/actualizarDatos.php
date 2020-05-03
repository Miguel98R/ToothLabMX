
<?php 

   include("conexion.php");


if($_GET['tabla'] == "productos"){

    $id = $_GET['id'];
    $tabla = $_GET['tabla'];

    $nombre = $_POST['nombre'];
    $precio = $_POST['precio'];

     $consulta ="UPDATE $tabla SET nombre = '$nombre', precio= '$precio' WHERE id = '$id';";
           

}else if($_GET['tabla'] == "dentistas"){

}


 $result = $conn->query($consulta) or die($conn->error);
 
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