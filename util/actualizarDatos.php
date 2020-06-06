
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