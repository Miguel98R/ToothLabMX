<?php
include "conexion.php";

$nombreDentista = $_POST['inputName'];
$emailDentista = $_POST['inputEmail'];
$celularDentista = $_POST['inputCelular'];
$telefonoConsultorio =$_POST['inputCelularConsultorio'];
$domicilioDentista =$_POST['inputDomicilio'];
$color=$_POST['color'];


$consulta="INSERT INTO dentistas(nombre,email,telPersonal,telConsultorio,domicilio,color)VALUES('$nombreDentista','$emailDentista','$celularDentista','$telefonoConsultorio','$domicilioDentista','$color');";

$resultDentista = $conn->query($consulta) or die (mysqli_error($conn));


if($resultDentista==true){
    echo'<script type="text/javascript">
        alert("Dentista registrado con exito");
        window.location.href="../dashboard.php";
        </script>';
}else{
    echo'<script type="text/javascript">
       alert("Error al registrar dentista");
window.location.href="../dashboard.php";
        </script>';
}




?>