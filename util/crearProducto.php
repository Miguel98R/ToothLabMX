<?php
include "conexion.php";

$nombreProducto = $_POST['inputNombreProducto'];
$precio = $_POST['inputPrecio'];


$consulta = "INSERT INTO productos (producto,precio) VALUES ('$nombreProducto','$precio');";

$result = $conn->query($consulta) or die (mysqli_error($conn));


if($result==true){
    echo'<script type="text/javascript">
        alert("Producto registrado con exito");
        window.location.href="../dashboard.php";
        </script>';
}else{
    echo'<script type="text/javascript">
       alert("Error al registrar dentista");
window.location.href="../dashboard.php";
        </script>';
}





?>