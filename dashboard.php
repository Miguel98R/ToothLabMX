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

<body  class="scrollbar scrollbar-primary ">
<!-- Footer -->
<footer class="page-footer font-small blue">

  <!-- Copyright -->
  <div class="footer-copyright text-center blue py-3">
    <a href="#"> </a>
  </div>
  <!-- Copyright -->

</footer>
<!-- Footer -->


    <div class="container-fluid   "  style="background-color:#7FCCFF;">
     

  <div class="row ">
  
    <div class="col-md-2 " style="height:100vh;" >
    <div class="text-center py-3">
      <img  src="img/logo.jpg" class="rounded-circle "  alt="" width="130" height="120">
    </div>
      
        <ul class="nav nav-pills flex-column" id="myTab" role="tablist">
  <li class="nav-item">
    <a class="nav-link text-white my-2  conFondo active" id="tab-1" data-toggle="tab" role="tab" href="#NuevaOrden" aria-selected="true" aria-controls="NuevaOrden"><i class="far fa-clipboard"></i>&nbsp;&nbsp;Ordenes de trabajo</a>
    </li>
  <li class="nav-item">
    <a class="nav-link text-white my-2 conFondo" id="tab-2" data-toggle="tab" role="tab" href="#HistorialView" aria-selected="false" aria-controls="HistorialView"><i class="fas fa-history"></i>&nbsp;&nbsp;Historial Ordenes</a>
    </li>
  <li class="nav-item">
    <a class="nav-link text-white my-2 conFondo" id="tab-4" data-toggle="tab" role="tab" href="#DentistasView" aria-selected="false" aria-controls="DentistasView"><i class="fas fa-tooth"></i>&nbsp;&nbsp;Dentistas</a>
   </li>
    <li class="nav-item">
     <a class="nav-link text-white my-2 conFondo" id="tab-5" data-toggle="tab" role="tab" href="#ProductosView" aria-selected="false" aria-controls="ProductosView"><i class="fas fa-teeth-open"></i>&nbsp;&nbsp;Productos</a>
  </li>
   <li class="nav-item">
    <a class="nav-link white-text  my-2 conFondo" href="util/cerrarSession.php"><i class="fas fa-sign-out-alt"></i>&nbsp;&nbsp;Cerrar sesión</a> 
   </li>
   <li class="nav-item">
   <a class="btn btn-success text-white " href="util/exportarDatos.php"><i class="fas fa-database"></i>&nbsp;&nbsp;Respaldar BD</a>
  </li>
  </ul>
    </div>
  
    <!-- /.col-md-4 -->
        <div class="col-md-10 white py-2" >
       
        <div class="container-fluid">
             <?php 
             
             

                                                if(!isset($_SESSION["mensaje"])){
                                                    $mensaje = "";
                                                  $colorMensaje = "";

                                                }else{

                                                  $mensaje =$_SESSION["mensaje"];
                                                  $colorMensaje =$_SESSION["colorMensaje"];
                                              
                                              
                                            ?>
                                            <div class="alert alert-<?php echo $colorMensaje ?> alert-dismissible fade show text-center" role="alert">
                                              <strong ><?php echo $mensaje ?></strong> 
                                              <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                                <span aria-hidden="true">&times;</span>
                                              </button>
                                            </div>
                                            <?php  

                                            }
                                            unset( $_SESSION["mensaje"] ); 
                                            ?>
        
        </div>
        
      <div class="tab-content" id="myTabContent">
   <div class="tab-pane fade show active" id="NuevaOrden" aria-labelledby="tab-1" role="tabpanel">
      <h3 class="font-weight-bold"><i class="far fa-clipboard"></i>&nbsp;&nbsp;Ordenes de trabajo</h3>
      <hr class="m-0 p-0">
     <?php include "components/newOrden.php"; ?>    
  </div>
  <div class="tab-pane fade" id="HistorialView" aria-labelledby="tab-2" role="tabpanel">
     <h3 class="font-weight-bold"><i class="fas fa-history"></i>&nbsp;&nbsp;Historial Ordenes</h3>
      <hr class="m-0 p-0">
    <?php include "historialOrdenes.php"; ?>
  </div>
   <div class="tab-pane fade" id="DentistasView" aria-labelledby="tab-4" role="tabpanel">
   <h3 class="font-weight-bold"><i class="fas fa-tooth"></i>&nbsp;&nbsp;Dentistas</h3>
    <hr class="m-0 p-0">
    <?php include "dentistas.php"; ?>
  
  </div>
     <div class="tab-pane fade" id="ProductosView" aria-labelledby="tab-5" role="tabpanel">
  <h3 class="font-weight-bold"><i class="fas fa-teeth-open"></i>&nbsp;&nbsp;Productos</h3>
   <hr class="m-0 p-0">
   <?php include "productos.php"; ?>
  
  </div>
</div>
    </div>
    <!-- /.col-md-8 -->
  </div>
  
  
  
</div>
<!-- /.container -->


<!-- Footer -->
<footer class="page-footer font-small blue">

  <!-- Copyright -->
  <div class="footer-copyright text-center blue py-3">
    <a href="#"> </a>
  </div>
  <!-- Copyright -->

</footer>
<!-- Footer -->
    
   
<?php include "components/scripts.php"?>

  
</body>

</html>

  