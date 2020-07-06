<?php

session_start();
$psw = $_SESSION['password'];

if (!isset($psw)) {

  header("location: index.php");
}
  ?>

<!DOCTYPE html>
<html lang="es">

<?php include "components/head.php"?>

<body  class="scrollbar scrollbar-primary">
    <header>
       <?php include("components/nav.php") ?>
    </header>

<nav class="navbar  navbar-expand-sm">
 <ul class="nav nav-tabs">
    <li class="nav-item active bg-transparent" >
      <a class="nav-link active" id="tab-1" data-toggle="tab" role="tab" href="#NuevaOrden" aria-selected="true" aria-controls="NuevaOrden"><i class="far fa-clipboard"></i>&nbsp;Pedidos</a>
    </li>
     <li class="nav-item">
      <a class="nav-link" id="tab-2" data-toggle="tab" role="tab" href="#HistorialView" aria-selected="false" aria-controls="HistorialView"><i class="fas fa-history"></i>&nbsp;Historial Ordenes</a>
    </li>
    <li class="nav-item">
      <a class="nav-link" id="tab-4" data-toggle="tab" role="tab" href="#DentistasView" aria-selected="false" aria-controls="DentistasView"><i class="fas fa-tooth"></i>&nbsp;Dentistas</a>
    </li>
    <li class="nav-item">
      <a class="nav-link" id="tab-5" data-toggle="tab" role="tab" href="#ProductosView" aria-selected="false" aria-controls="ProductosView"><i class="fas fa-list-ol"></i>&nbsp;Productos</a>
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

    
   
  <!-- jQuery -->
  <script type="text/javascript" src="js/jquery.min.js"></script>
  <script src="js/jquery-3.4.1.slim.min.js"></script>
  <!-- Bootstrap tooltips -->
  <script type="text/javascript" src="js/popper.min.js"></script>
  <!-- Bootstrap core JavaScript -->
  <script type="text/javascript" src="js/bootstrap.min.js"></script>
  <!-- MDB core JavaScript -->
  <script type="text/javascript" src="js/mdb.min.js"></script>
    <!-- datatables JS -->
    <script type="text/javascript" src="datatables/datatables.min.js"></script>    
    <script type="text/javascript" src="js/main.js"></script>
  <!-- Your custom scripts (optional) -->
   <script src="https://cdn.jsdelivr.net/npm/sweetalert2@9"></script>

  
</body>

</html>

  