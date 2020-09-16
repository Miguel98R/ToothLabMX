<?php
include "conexion.php";

$nombreDentista = $_POST['inputName'];
$emailDentista = $_POST['inputEmail'];
$celularDentista = $_POST['inputCelular'];
$telefonoConsultorio =$_POST['inputCelularConsultorio'];
$domicilioDentista =$_POST['inputDomicilio'];
$color=$_POST['color'];

$dentistaMayus = strtoupper($nombreDentista);

$consulta="INSERT INTO dentistas(nombre,email,telConsultorio,telPersonal,domicilio,color)VALUES
('$dentistaMayus','$domicilioDentista','$emailDentista','$telefonoConsultorio','$celularDentista','$color');";

$resultDentista = $conn->query($consulta) or die (mysqli_error($conn));



if($resultDentista==true){
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