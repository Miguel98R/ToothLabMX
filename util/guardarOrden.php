<?php
include("conexion.php");

$dentista = $_POST['dentista'];
$producto = $_POST['producto'];
$unidades = $_POST['unidades'];
$paciente = $_POST['paciente'];
$entrada = $_POST['entrada'];
$salida = $_POST['salida'];
$comentario = $_POST['comentario'];

$producto=$producto." "."X"." ".$unidades."Pz.";


$insertarCabeza = "INSERT INTO cabeza_orden (dentista,paciente,producto,fecha1,fecha2,comentario) VALUES ('$dentista','$paciente','$producto','$entrada','$salida','$comentario');";
$resultCabeza = $conn->query($insertarCabeza) or die (mysqli_error($conn));

$consultarCabeza="SELECT MAX(id) as id FROM cabeza_orden";
$resultCabeza2 = $conn->query($consultarCabeza) or die (mysqli_error($conn));

$datos=$resultCabeza2->fetch_assoc();
$idCabeza=$datos['id'];

$sinColor = $_POST['SinColor'];
if($sinColor != ""){
    
  
    $insertarDescription="INSERT INTO color_orden (color,id_cabeza) VALUES ('$sinColor','$idCabeza');";
    $resultDescription = $conn->query($insertarDescription) or die (mysqli_error($conn));
    
}

if($_POST['color'] != "")
{
     
    
    if(is_array($_POST['color']))
         {
              while(list($key,$value) = each($_POST['color'])) 
        	{
                $insertarDescription="INSERT INTO color_orden (color,id_cabeza) VALUES ('$value','$idCabeza');";
                $resultDescription = $conn->query($insertarDescription) or die (mysqli_error($conn));
  
            }
   		 }
}


if($_POST['nomenclatura'] != "")
{
		 if(is_array($_POST['nomenclatura']))
         {
       		 // realizamos el ciclo
       		 while(list($key,$value) = each($_POST['nomenclatura'])) 
        	{
               $insertar="INSERT INTO nomenclatura_orden(nomenclatura,id_cabeza) VALUES ('$value','$idCabeza');";
                  $resultDescription = $conn->query($insertar) or die (mysqli_error($conn));
               
		  
       	 	}
   		 }
}



if($insertarDescription==true){
    echo'<script type="text/javascript">
        alert("Orden registrada con exito Folio: '."'$idCabeza'".'");
        window.location.href="../dashboard.php";
        </script>';
}else{
    echo'<script type="text/javascript">
        alert("Error al registrar orden");
window.location.href="../dashboard.php";
        </script>';
}












?>