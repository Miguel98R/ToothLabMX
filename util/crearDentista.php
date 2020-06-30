<?php
include "conexion.php";

$nombreDentista = $_POST['inputName'];
$emailDentista = $_POST['inputEmail'];
$celularDentista = $_POST['inputCelular'];
$telefonoConsultorio =$_POST['inputCelularConsultorio'];
$domicilioDentista =$_POST['inputDomicilio'];
$color=$_POST['color'];


$consulta="INSERT INTO dentistas(nombre,email,telConsultorio,telPersonal,domicilio,color)VALUES
('$nombreDentista','$domicilioDentista','$emailDentista','$telefonoConsultorio','$celularDentista','$color');";

$resultDentista = $conn->query($consulta) or die (mysqli_error($conn));

$consultaId = "SELECT MAX(id) AS idDentista FROM dentistas";
$resulId = $conn->query($consultaId) or die (mysqli_error($conn));
$datoid=$resulId->fetch_assoc();
$idDentista = $datoid['idDentista'];

$insertarNuevaCuenta = "INSERT INTO cuentas (id_dentista) VALUE ('$idDentista');";
$resultInsertar = $conn->query($insertarNuevaCuenta) or die (mysqli_error($conn));

if($resultInsertar==true){
    echo'<script type="text/javascript">
        alert("Dentista registrado con exito");
         setTimeout(function() {alert.close();}, 2000);
   
        window.location.href="../dashboard.php";

           
        </script>';
}else{
    echo'<script type="text/javascript">
       alert("Error al registrar dentista");
window.location.href="../dashboard.php";
        </script>';
}




?>