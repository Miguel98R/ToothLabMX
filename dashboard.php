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



    <div class="container-fluid "  style="background-color:#bdbdbd;">
     

  <div class="row">
  
    <div class="col-md-2 " style="height:100vh;" >
    <div class="text-center py-3">
      <img  src="img/logo.jpg" class="rounded-circle "  alt="" width="100" height="90">
    </div>
      
        <ul class="nav nav-pills flex-column" id="myTab" role="tablist">
  <li class="nav-item">
    <a style="font-size:13px;" class=" nav-link text-white text-center my-2 btn  btn-sm conFondo active" id="tab-1" data-toggle="tab" role="tab" href="#NuevaOrden" aria-selected="true" aria-controls="NuevaOrden" title="Ordenes de trabajo"><i class="far fa-clipboard"></i>&nbsp;&nbsp;Ordenes</a>
    </li>
  <li class=" nav-item">
    <a style="font-size:13px;" class="nav-link text-white text-center  my-2 btn  btn-sm conFondo" id="tab-2" data-toggle="tab" role="tab" href="#HistorialView" aria-selected="false" aria-controls="HistorialView" title="Historial Ordenes"><i class="fas fa-history"></i>&nbsp;&nbsp;Historial</a>
    </li>
  <li class="nav-item">
    <a style="font-size:13px;" class="nav-link text-white  text-center  my-2 btn  btn-sm conFondo" id="tab-4" data-toggle="tab" role="tab" href="#DentistasView" aria-selected="false" aria-controls="DentistasView"title="Dentistas"><i class="fas fa-tooth"></i>&nbsp;&nbsp;Dentistas</a>
   </li>
    <li class="nav-item">
     <a style="font-size:13px;" class="nav-link text-white text-center  my-2 btn  btn-sm conFondo" id="tab-5" data-toggle="tab" role="tab" href="#ProductosView" aria-selected="false" aria-controls="ProductosView"title="Productos"><i class="fas fa-teeth-open"></i>&nbsp;&nbsp;Productos</a>
  </li>
   <li class="nav-item">
    <a style="font-size:13px;" class="nav-link white-text text-center my-2 btn  btn-sm conFondo" href="util/cerrarSession.php" title="Cerrar sesión"><i class="fas fa-sign-out-alt"></i>&nbsp;&nbsp;Cerrar sesión</a> 
   </li>
   <li class="nav-item">
   <a style="font-size:13px;" class="btn btn-success text-center text-white btn-sm " href="util/exportarDatos.php" title="Respaldar BD"><i class="fas fa-database"></i>&nbsp;&nbsp;Respaldar BD</a>
  </li>
  </ul>
    </div>
  
    <!-- /.col-md-4 -->
        <div class="col-md-10 white " >
       
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
     <h3 title="" class="font-weight-bold"><i class="fas fa-history"></i>&nbsp;&nbsp;Historial Ordenes</h3>
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


   
<?php include "components/scripts.php"?>

  
</body>

</html>

  