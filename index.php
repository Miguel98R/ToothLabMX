<!DOCTYPE html>
<html lang="en">
<?php include "components/head.php"?>
<body class="conFondo">

  <!-- Start your project here-->  
  <?php include "components/loading.php"?>




   <header>
       <?php include("components/nav.php") ?>
    </header>
           


    <section class="py-5 ">
        <div class="container py-4">
            <form action="util/validateLogin.php" method="POST" autocomplete="off" onsubmit="return validar();">

                <div class="row">
                    <div class="col-md-6 py-3">
                        <img  src="img/logo.jpg" class="rounded-circle  m-3" alt="" width="380" height="350">
                    </div>

                    <div class="col-md-6 text-center">

                       <div class="login_position">
                            <div class="card" style="height: 100%;">
                                <h3 class="card-header font-weight-bold white-text  light-blue darken-4">Bienvenido</h3>
                                <div class="card-body white-text blue-gradient">
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
