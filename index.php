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
  




<div class="container">

        <div class="row">
            <div class="col-md-4"></div>
            <div class="col-md-4 text-center justify-content-center align-content-center">
                <div class="login text-center my-5 ">
                    <div class="text-center py-4 px-5">
                        <img class="rounded-circle img-fluid logo" src="./img/logo.jpg" alt="">
                    </div>
                    <div class="text-center ">
                        <h2 class="font-weight-bolder text-white">Iniciar sesión</h2>
                    </div>
 <!-- <form action="util/validateLogin.php" method="post" autocomplete="off" onsubmit="return validar();"> -->
                 
                    <form action="dashboard.php" method="post" autocomplete="off" >
                        <div class="text-center">
                            <div class="py-2"><input class="inputDato" type="text" id="user" name="user"
                                    placeholder="Ingresa tu usuario"></div>
                            <div><input class="inputDato" type="password" id="psw" name="psw"
                                    placeholder="Ingresa tu contraseña">
                            </div>


                        </div>
                        <div class="py-3">
                            <button class="button2 " type="submit">Entrar</button>
                        </div>

                    </form>
                </div>
            </div>
            <div class="col-md-4"></div>
        </div>
    </div>

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
  <script src="js/sweetAlert.js"></script>

</body>
</html>
