
<?php 

   include "conexion.php";
   $id = $_GET['id'];
    $tabla = $_GET['tabla'];


if($_GET['tabla'] == "productos"){

    

    $nombre = $_POST['nombre'];
    $precio = $_POST['precio'];

     $consulta ="UPDATE $tabla SET producto = '$nombre', precio= '$precio' WHERE id = '$id';";
           

}else if($_GET['tabla'] == "dentistas"){

    $nombre = $_POST['nombre'];
    $domicilio = $_POST['domicilio'];
    $telPersonal = $_POST['telPersonal'];
    $telConsultorio = $_POST['telConsultorio'];
    $email = $_POST['email'];
    $color = $_POST['color'];

    $consulta = "UPDATE $tabla SET nombre = '$nombre' , email='$email',telPersonal = '$telPersonal',telConsultorio = '$telConsultorio',domicilio='$domicilio',color='$color' WHERE id = '$id';";



}else if($_GET['tabla'] == "orden_productos_description"){

    $producto = $_POST['productoNew'];
    $cantidad = $_POST['cantidadNew'];
    $color = $_POST['colorNew'];
    $od = $_POST['odNew'];
    

      $consultaridProducto= "SELECT id FROM productos WHERE producto='$producto';";
                $resultidProducto = $conn->query($consultaridProducto) or die(mysqli_error($conn));
                $datoidProducto=$resultidProducto->fetch_assoc();
                $idProducto = $datoidProducto['id'];

    

    $consulta = "UPDATE $tabla SET  cantidad='$cantidad', id_producto = '$idProducto' ,color = '$color',od='$od' WHERE id = '$id';";



}


 $result = $conn->query($consulta) or die($conn->error);
 
      if($result==true){
            echo'<script type="text/javascript">
            alert("Actualizado con exito ");
            window.location.href="./dashboard.php";
            </script>';
            }else{
                echo'<script type="text/javascript">
                alert("Error al actualizar");
                window.location.href="./dashboard.php";
                </script>';
            }
    



?>