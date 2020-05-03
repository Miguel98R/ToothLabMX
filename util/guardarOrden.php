<?php
include("conexion.php");


$paciente = $_POST['paciente'];
$entrada = $_POST['entrada'];
$salida = $_POST['salida'];
$comentario = $_POST['comentario'];
$dentista = $_POST['dentista'];

// $entrada1 = date_format($entrada, '%d-%m-%Y') ;
// $salida1 = date_format($salida, '%d-%m-%Y'); ASI PERO EN SELECT 

$consultarDentista="SELECT  id FROM dentistas WHERE nombre='$dentista'";
$resultDentista = $conn->query($consultarDentista) or die (mysqli_error($conn));

$datoss=$resultDentista->fetch_assoc();
$idDentista=$datoss['id'];

$insertarOrden = "INSERT INTO orden (paciente,fecha1,fecha2,comentario,id_dentista) VALUES ('$paciente','$entrada','$salida','$comentario','$idDentista');";
$resultOrden = $conn->query($insertarOrden) or die (mysqli_error($conn));

$consultarOrden="SELECT MAX(id) as id FROM orden";
$resultOrden2 = $conn->query($consultarOrden) or die (mysqli_error($conn));

$datos=$resultOrden2->fetch_assoc();
$idOrden=$datos['id'];





if($_POST['color'] != "")
{
		 if(is_array($_POST['color']))
         {
       		 // realizamos el ciclo
                while(list($key,$value) = each($_POST['color'])) 
                {
                
                $insertar3="INSERT INTO color_descripcion (color,id_orden) VALUES ('$value','$idOrden');";
                $resultDescription = $conn->query($insertar3) or die (mysqli_error($conn));
               
		  
       	 	}
   		 }
}
if($_POST['producto']!= ""){
    
    if(is_array($_POST['producto'])){

              while(list($key,$value) = each($_POST['producto'])){


                $insertar3="INSERT INTO productos_descripcion (producto,id_orden) VALUES ('$value','$idOrden');";
                $resultDescription = $conn->query($insertar3) or die (mysqli_error($conn));
  
            }
   		 }
}
if($_POST['organo'] != "")
{
		 if(is_array($_POST['organo']))
         {
       		 // realizamos el ciclo
                while(list($key,$value) = each($_POST['organo'])) 
                {
                  $insertar3="INSERT INTO organo_descripcion (organo,id_orden) VALUES ('$value','$idOrden');";
                $resultDescription = $conn->query($insertar3) or die (mysqli_error($conn));
               
		  
       	 	}
   		 }
}


if($resultDescription==true){
    echo'<script type="text/javascript">
        alert("Orden registrada con exito Folio: '."'$idOrden'".'");
        window.location.href="../dashboard.php";
        </script>';
}else{
    echo'<script type="text/javascript">
        alert("Error al registrar orden");
window.location.href="../dashboard.php";
        </script>';
}












?>