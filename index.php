<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta http-equiv="x-ua-compatible" content="ie=edge">
  <title>Seven dental</title>
  <!-- MDB icon -->
     <link rel="shortcut icon" href="img/logo.ico" type="image/x-icon">
 <!-- Font Awesome -->
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.11.2/css/all.css">
  <!-- Google Fonts Roboto -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700&display=swap">
  <!-- Bootstrap core CSS -->
  <link rel="stylesheet" href="css/bootstrap.min.css">
  <!-- Material Design Bootstrap -->
  <link rel="stylesheet" href="css/mdb.min.css">
  <!-- Your custom styles (optional) -->
  <link rel="stylesheet" href="css/style.css">
</head>
<body>

  <!-- Start your project here-->  
  




    <nav class="navbar navbar-light blue-gradient">
  <span class="navbar-brand"></span>
</nav>             


    <section class="py-5 ">
        <div class="container py-4">
            <form action="util/validateLogin.php" method="POST" autocomplete="off" onsubmit="return validar();">

                <div class="row">
                    <div class="col-md-6 py-3">
                        <img src="img/logo.jpg" class="rounded-circle  m-3" alt="" width="370" height="340">
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

  <!-- jQuery -->
  <script type="text/javascript" src="js/jquery.min.js"></script>
  <script src="js/jquery-3.4.1.slim.min.js"></script>
  <!-- Bootstrap tooltips -->
  <script type="text/javascript" src="js/popper.min.js"></script>
  <!-- Bootstrap core JavaScript -->
  <script type="text/javascript" src="js/bootstrap.min.js"></script>
  <!-- MDB core JavaScript -->
  <script type="text/javascript" src="js/mdb.min.js"></script>
  <!-- Your custom scripts (optional) -->
   <script src="https://cdn.jsdelivr.net/npm/sweetalert2@9"></script>
  <script >
  
  function validar(){
    let psw;  
   
    psw = document.getElementById("psw").value;

     if(psw==="" || psw===false || psw===undefined ){
       Swal.fire({icon: 'warning',title:"Por favor ingresa tu contraseña"});
        return false;
     }      
}

  </script>
  

</body>
</html>
