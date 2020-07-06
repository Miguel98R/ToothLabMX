<?php

include("conexion.php");
session_start();


$psw = $_POST['psw'];


$consulta = "SELECT * FROM usuarios WHERE  contrasena='$psw'";

$result=mysqli_query($conn,$consulta);

$filas=mysqli_num_rows($result);

$datos=$result->fetch_assoc();

if($filas>0){

        $_SESSION['password'] = $psw;
        header("location: ../dashboard.php");
    
       
}

else{ 
echo '<script> 
alert("Usuario o contraseña incorrecto");
   
   window.location.href="../index.php";
 </script>';

        return false;
    
   
}

mysqli_free_result($result);
mysqli_close($conn);


?>