<!DOCTYPE html>
<html lang="en">
<?php include "components/head.php"?>
<body>

  <!-- Start your project here-->  



    <section class="py-5  ">
        <div class="container py-4 " >
            <form action="util/validateLogin.php" method="POST" autocomplete="off" onsubmit="return validar();">

                <div class="row" style="height:80%;border-radius:20px;background-color:#bdbdbd;">
                    <div class="col-md-6  conFondo"style="border-radius:20px;height:500px;">
                        <div class=" login_position  text-center  py-2 ">
                             <img  src="img/logo.jpg" class="rounded-circle "  alt="" width="230" height="220">
                              <p class="text-white w-100  font-weight-bold"><br>Licencia para: Laboratorio Dental Seven   </p>
            
                       
                        </div>
                       
                                </div>

                    <div class="col-md-6  text-center" >



                        <div class="login_position  " >
                            <div class="card" style="height: 100%;">
                                <h3 class="card-header font-weight-bold white-text  light-blue darken-4">Bienvenido</h3>
                                
                                <div class="card-body white-text blue-gradient">
                                  <?php 

                                                session_start();

                                                if(!isset($_SESSION["mensaje"])){
                                                    $mensaje = "";
                                                  $colorMensaje = "";

                                                }else{

                                                  $mensaje =$_SESSION["mensaje"];
                                                  $colorMensaje =$_SESSION["colorMensaje"];
                                              
                                              
                                            ?>
                                            <div class="alert alert-<?php echo $colorMensaje ?> alert-dismissible fade show" role="alert">
                                              <strong><?php echo $mensaje ?></strong> 
                                              <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                                <span aria-hidden="true">&times;</span>
                                              </button>
                                            </div>
                                            <?php  
                                            session_destroy();
                                            }
                                            ?>
                                    <h5 class="card-title font-weight-bold">Ingresa tu contraseña</h5>
                                  
                                    <div class="py-4">
                                <input class="inputDato" type="password" name="psw" id="psw" >
                                    </div>
                                    
                                                
                                    <button  class="btn btn-primary" type="submit">Entrar</button>
                                </div>
                            </div>

                       </div>
                     
                      
                                            
                    
                        
                       
                   

                        
                    </div>

                   
            </div>

            </form>

            

        </div>
        
    </section>


    



 <?php include("components/footer.php"); ?>














  <!-- End your project here-->

<?php include "components/scripts.php"?>

</body>
</html>
