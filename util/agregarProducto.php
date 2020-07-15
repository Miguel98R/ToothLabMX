<?php 


   include "conexion.php";
session_start();

   $idOrden = $_GET['id'];

   $cantidad = $_POST['cantidadNuevo'];
   $producto = $_POST['productoNuevo'];
   $color = $_POST['colorNuevo'];
   $o_d="";

     $consultaridProducto= "SELECT id,precio FROM productos WHERE producto='$producto';";
                $resultidProducto = $conn->query($consultaridProducto) or die(mysqli_error($conn));
                $datoidProducto=$resultidProducto->fetch_assoc();
                $idProducto = $datoidProducto['id'];
                 $precio = $datoidProducto['precio'];

    //CREAMOS LA NUEVA CUENTA DE LA ORDEN

if($_POST['od'] != "")
{
		 if(is_array($_POST['od']))
         {
       		 // realizamos el ciclo
                while(list($key,$value) = each($_POST['od'])) 
                {
                
                $o_d = $value." ".$o_d;
               
                }
   		 }
}





   //insertamos el producto
 $insertarProducto="INSERT INTO orden_productos_description (cantidad,id_producto,color,od,id_orden) VALUES ('$cantidad','$idProducto','$color','$o_d','$idOrden');";
$resultProducto = $conn->query($insertarProducto) or die (mysqli_error($conn));

//Consultamos el producto para modificar su uso


                $consultarUsoProducto = "SELECT nUsado FROM productos WHERE producto='$producto';";

                $resultUsoProducto = $conn->query($consultarUsoProducto) or die(mysqli_error($conn));
               
                $datoUsoProducto=$resultUsoProducto->fetch_assoc();
                $usoActualProducto = $datoUsoProducto['nUsado'];

                $nuevoUsoProducto = $usoActualProducto + 1;
                
                $actualizarUsoProducto = "UPDATE productos SET nUsado = '$nuevoUsoProducto' WHERE producto='$producto';";
                $resultUsoActualizado = $conn->query($actualizarUsoProducto) or die($conn->error);
		  





if($resultProducto==true){



$_SESSION["mensaje"] = "Producto agregado correctamente";


$_SESSION["colorMensaje"] = "success";

header("location: ../dashboard.php");



}else{
   $_SESSION["mensaje"] = "No se pudo agregar el producto ";


$_SESSION["colorMensaje"] = "danger";

header("location: ../dashboard.php");

}
    









?>