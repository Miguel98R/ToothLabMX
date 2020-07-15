<?php
include "conexion.php";
session_start();

//obtenemos los datos del formulario

$dentista = $_POST['dentista'];
$paciente = $_POST['paciente'];
$entrada = $_POST['entrada'];
$salida = $_POST['salida'];
$comentario = $_POST['comentario'];
$cantidad = $_POST['cantidad'];
$color = $_POST['color'];
$producto =$_POST['producto'];
$o_d="";


 


//insertamos los datos que corresponden en la cabecera
$insertarCabeza = "INSERT INTO orden_cabeza (paciente,id_dentista,fechaEntrante,fechaSaliente,comentario) 
                    VALUES ('$paciente','$dentista','$entrada','$salida','$comentario') ;";
$resultCabeza = $conn->query($insertarCabeza) or die(mysqli_error($conn));

//consultamos el id de la orden
$consultarIdCabeza = "SELECT MAX(id) as id FROM orden_cabeza;";
$resultIdCabeza = $conn->query($consultarIdCabeza) or die(mysqli_error($conn));
$datoid=$resultIdCabeza->fetch_assoc();
$idOrden = $datoid['id'];



 $consultaridProducto= "SELECT id,precio FROM productos WHERE producto='$producto';";
                $resultidProducto = $conn->query($consultaridProducto) or die(mysqli_error($conn));
                $datoidProducto=$resultidProducto->fetch_assoc();
                $idProducto = $datoidProducto['id'];
                $precio = $datoidProducto['precio'];




//consultamos el dentista que corresponde al a orden para despues utilizarle el uso que tiene



$consultarUsoDentista = "SELECT nUsado FROM dentistas WHERE id='$dentista';";

$resultUsoDentista = $conn->query($consultarUsoDentista) or die(mysqli_error($conn));

$datoUsoDentista=$resultUsoDentista->fetch_assoc();
$usoActualDentista = $datoUsoDentista['nUsado'];

$nuevoUsoDentista = $usoActualDentista + 1;

$actualizarUsoDentista = "UPDATE dentistas SET nUsado = '$nuevoUsoDentista' WHERE id='$dentista';";
$resultUsoActualizado = $conn->query($actualizarUsoDentista) or die($conn->error);


if($_POST['od'] != "")
{
		 if(is_array($_POST['od']))
         {
       		 // realizamos el ciclo
                while(list($key,$value) = each($_POST['od'])) 
                {
                    
                
                    $o_d = $o_d. " ".$value;
               
                }
   		 }
}


 if( $idProducto == 20 ||$idProducto == 21 || $idProducto ==22 || $idProducto == 23 || $idProducto ==24 || $idProducto ==25 ||$idProducto == 42 || $idProducto ==1 ||$idProducto ==52 ||$idProducto ==49 ){
    $cantidad = 1;
 }else {
     $cantidad = $_POST['cantidad'];
 }

//insertamos el producto y su cantidad
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
               
		  







if($resultCabeza==true){


$_SESSION["mensaje"] = "Orden registrada con exito <br> Folio: ".$idOrden;


$_SESSION["colorMensaje"] = "success";

header("location: ../dashboard.php");



}else{
   $_SESSION["mensaje"] = "La orden no se pudo registrar correctamente";


$_SESSION["colorMensaje"] = "danger";

header("location: ../dashboard.php");

}












?>