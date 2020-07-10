<?php

session_start(); // recuperamos la sesion

    if (isset($_SESSION['password'])) { // validamos que exista

        session_destroy(); // cerramos la sesion
        header("location: ../index.php"); // redirigimos 
        }
 

?>