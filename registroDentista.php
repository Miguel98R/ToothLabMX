<!DOCTYPE html>
<html lang="en">

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
    <?php include ("components/nav.php") ?>
    <header style="height: 400px;">
        <div class="py-3 container-fluid cabeza">
            <div>
                <h2 class="font-weight-bolder py-5" style="display: flex;justify-content: center;width: 100%;font-size:50px;
  color:white;">Dentistas</h2>
            </div>
        </div>
        </div>
    </header>
    <?php include ("components/nav.php") ?>

    <div class="container">


        <form>
            <div class="form-row">
                <div class="form-group col-md-6">
                    <input type="text" class="form-control inputDato" name="inputName" id="inputName"
                        placeholder="Ingresa el nombre del doctor (un nombre  y un apellido) ">

                </div>
                <div class="form-group col-md-6">
                    <input type="email" class="form-control inputDato" name="inputEmail" id="inputEmail"
                        placeholder="Ingresa un correo electronico">

                </div>
            </div>

            <div class="form-row">
                <div class="form-group col-md-6">
                    <input type="text" class="form-control inputDato" name="inputCelular" id="inputCelular"
                        placeholder="Ingrese un numero celular o telefono ">

                </div>
                <div class="form-group col-md-6">
                    <input type="text" class="form-control inputDato" name="inputCelularConsultorio"
                        id="inputCelularConsultorio" placeholder="Ingresa un numero celular o telefono del consultorio">
                </div>
            </div>

            <div class="form-row">
                <div class="form-group col-md-6">
                    <input type="text" class="form-control inputDato" name="inputDomicilio" id="inputDomicilio"
                        placeholder="Ingrese la direccion del doctor ">

                </div>
                <div class="form-group col-md-6">
                    Escoje un color: <input type="color" name="color" id="color">
                </div>
            </div>

            <button type=" submit" class="btn btn-primary text-center">Guardar</button>
        </form>


    </div>

    <?php include ("components/footer.php"); ?>

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