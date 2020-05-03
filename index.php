<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/style.css">
    <link rel="shortcut icon" href="img/logo.ico" type="image/x-icon">
    <script src="https://kit.fontawesome.com/b46c20e3c5.js" crossorigin="anonymous"></script>
    
    <title>Seven</title>
</head>

<body>

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

                    <form action="util/validateLogin.php" method="post" onsubmit="return validar();">
                        <div class="text-center py-3 px-5">
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

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="js/jquery-3.4.1.slim.min.js">
    </script>
    <script src="js/popper.min.js">
    </script>
    <script src="js/bootstrap.min.js">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@9"></script>
    <script src="js/sweetAlert.js"></script>

</body>



</html>