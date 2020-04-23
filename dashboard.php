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
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/style.css">
    <link rel="shortcut icon" href="img/logo.ico" type="image/x-icon">
    <script src="js/jquery-1.12.4.js"></script>
    <script src="js/jquery-ui.js"></script>
    <script src="js/bootstrap3-typeahead.min.js"></script>

    <script src="js/b46c20e3c5.js" crossorigin="anonymous"></script>




    <title>Seven</title>
</head>

<body>

    <?php include("components/nav.php") ?>

    <header>
        <div class="cabeza">
            <div>
                <h1 class="font-weight-bold  align-content-center"
                    style="display: flex;justify-content: center;width: 100%;font-size:50px;color:white;">Dashboard
                </h1>
            </div>
        </div>
        </div>
    </header>

    <div class="tab">
        <button class="tablinks" onclick="openCity(event, 'pedidos')" id="defaultOpen">Pedidos</button>
        <button class="tablinks " onclick="openCity(event, 'newOrden')">Crear Orden</button>
        <button class="tablinks" onclick="openCity(event, 'dentistas')">Dentistas</button>
        <button class="tablinks" onclick="openCity(event, 'productos')">Productos</button>
        <button class="tablinks" onclick="openCity(event, 'administracion')">Administración</button>
    </div>
    <div id="pedidos" class="tabcontent">
        <?php include("components/pedidos.php "); ?>
    </div>
    <div id="newOrden" class="tabcontent">
        <?php include("components/newOrden.php "); ?>
    </div>








    <!-- Optional JavaScript -->
    <script>
    function openCity(evt, cityName) {
        var i, tabcontent, tablinks;
        tabcontent = document.getElementsByClassName("tabcontent");
        for (i = 0; i < tabcontent.length; i++) {
            tabcontent[i].style.display = "none";
        }
        tablinks = document.getElementsByClassName("tablinks");
        for (i = 0; i < tablinks.length; i++) {
            tablinks[i].className = tablinks[i].className.replace(" active", "");
        }
        document.getElementById(cityName).style.display = "block";
        evt.currentTarget.className += " active";
    }
    // Get the element with id="defaultOpen" and click on it
    document.getElementById("defaultOpen").click();
    </script>


    <script>
    $(document).ready(function() {
        $("#producto").typeahead({
            source: function(query, resultado) {
                $.ajax({
                    url: "util/autoCompletarProducto.php",
                    type: "POST",
                    dataType: "json",
                    data: {
                        query: query
                    },
                    success: function(data) {
                        resultado($.map(data, function(item) {
                            return item;
                        }));
                    }
                });
            }
        });
    });
    </script>
    <script>
    $(document).ready(function() {
        $("#dentista").typeahead({
            source: function(query, resultado) {
                $.ajax({
                    url: "util/autoCompletarDentista.php",
                    type: "POST",
                    dataType: "json",
                    data: {
                        query: query
                    },
                    success: function(data) {
                        resultado($.map(data, function(item) {
                            return item;
                        }));
                    }
                });
            }
        });
    });
    </script>
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->

    <!-- <script src="js/jquery-3.4.1.slim.min.js ">   </script>-->
    <script src="js/fechaactual.js"></script>
    <script src="js/popper.min.js ">
    </script>
    <script src="js/bootstrap.min.js ">
    </script>
    </script>
    <script src="js/adminValidation.js "></script>



</body>

</html>