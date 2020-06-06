<?php

session_start();
$user = $_SESSION['userName'];

if (!isset($user)) {

  header("location: index.php");
}
  ?>

<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <link rel="shortcut icon" href="img/logo.ico" type="image/x-icon">

    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/style.css">
    <!--datables CSS básico-->
    <link rel="stylesheet" type="text/css" href="datatables/datatables.min.css"/>
    <!--datables estilo bootstrap 4 CSS-->  
    <link rel="stylesheet"  type="text/css" href="datatables/DataTables-1.10.18/css/dataTables.bootstrap4.min.css"/>
   


    <script src="js/jquery-3.4.1.slim.min.js"></script>
    <script src="js/b46c20e3c5.js" crossorigin="anonymous"></script>
    <script src="js/fechaactual.js"></script>

<title>Seven</title>

</head>

<body>
    <header>
       <?php include("components/nav.php") ?>
    </header>

<nav class="navbar  navbar-expand-sm">
 <ul class="nav nav-tabs">
    <li class="nav-item active bg-transparent" >
      <a class="nav-link active" id="tab-1" data-toggle="tab" role="tab" href="#NuevaOrden" aria-selected="true" aria-controls="NuevaOrden">Pedidos</a>
    </li>
     <li class="nav-item">
      <a class="nav-link" id="tab-2" data-toggle="tab" role="tab" href="#HistorialView" aria-selected="false" aria-controls="HistorialView">Historial Ordenes</a>
    </li>
    <li class="nav-item">
      <a class="nav-link" id="tab-4" data-toggle="tab" role="tab" href="#DentistasView" aria-selected="false" aria-controls="DentistasView">Dentistas</a>
    </li>
    <li class="nav-item">
      <a class="nav-link" id="tab-5" data-toggle="tab" role="tab" href="#ProductosView" aria-selected="false" aria-controls="ProductosView">Productos</a>
    </li>
  
  </ul>
</nav>
<main role="main" class="container-full">
  <div class="container-full">
    <div class="tab-content">
      <div class="tab-pane fade show active" id="NuevaOrden" aria-labelledby="tab-1" role="tabpanel">
        <?php include "components/newOrden.php"; ?>    
    </div>
     <div class="tab-pane fade" id="HistorialView" aria-labelledby="tab-2" role="tabpanel">
              <?php include "historialOrdenes.php"; ?>
            </div>
  
      <div class="tab-pane fade" id="DentistasView" aria-labelledby="tab-4" role="tabpanel">
              <?php include "dentistas.php"; ?>
            </div>
      <div class="tab-pane fade" id="ProductosView" aria-labelledby="tab-5" role="tabpanel">
        <?php include "productos.php"; ?>
        </div>
        
      
    
    </div>
  </div>
</main>

    <!-- Optional JavaScript -->
      
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->

    <!-- <script src="js/jquery-3.4.1.slim.min.js ">   </script>-->
   
    <script src="js/popper.min.js ">
    </script>
    <script src="js/bootstrap.min.js ">
    </script>
    </script>
    <script src="js/adminValidation.js "></script>
     
      <!-- datatables JS -->
    <script type="text/javascript" src="datatables/datatables.min.js"></script>    
     
    <script type="text/javascript" src="js/main.js"></script>
    
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@9"></script>
    
    <script src="js/sweetAlert.js"></script>
   



</body>

</html>

  