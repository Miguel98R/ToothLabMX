<?php 
    include("util/conexion.php");

   if(isset($_POST['buscador'])){
        $indice=$_POST['buscador'];

    $cabeza="SELECT id,dentista,paciente,producto,fecha1,fecha2,comentario FROM cabeza_orden WHERE id='$indice'; ";
   }else{
       $indice = "SELECT MAX(id) as id FROM cabeza_orden";

    $result = $conn->query($indice) or die (mysqli_error($conn));
    $dato=$result->fetch_assoc();
    $id=$dato['id'];
       
    $cabeza="SELECT id,dentista,paciente,producto,fecha1,fecha2,comentario FROM cabeza_orden WHERE id='$id'; ";
   }
   
   

    $result = $conn->query($cabeza) or die (mysqli_error($conn));
    $datos=$result->fetch_assoc();
    $folio=$datos['id'];
    $dentista=$datos['dentista'];
    $paciente=$datos['paciente'];
    $producto=$datos['producto'];
    $fecha1=$datos['fecha1'];
    $fecha2=$datos['fecha2'];
    $comentario=$datos['comentario'];

    ?>
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
    <header>
        <div class="py-3 container-fluid cabeza">
            <div>
                <h2 class="font-weight-bolder py-5" style="display: flex;justify-content: center;width: 100%;font-size:50px;
  color:white;">Pedidos</h2>
            </div>
        </div>
        </div>
    </header>








    <div class="container-fluid py-3">
        <div class="row">
            <div class="col-md-6 ">
                <h2 class="text-center">Ultima orden creada
                </h2>
                <div class="w-100 border border-danger m-0">
                    <h5 class="text-right">Folio:
                        <?php echo $folio;?>
                    </h5>
                </div>
                <div class="row mx-0 my-0 py-0 px-0">
                    <div class="w-50 border border-danger m-0">
                        <h5 class="">Entrada:
                            <?php echo $fecha1;?>
                        </h5>
                    </div>
                    <div class="w-50 border border-danger m-0">
                        <h5 class="">Salida:
                            <?php echo $fecha2;?>
                        </h5>
                    </div>

                </div>
                <div class="row mx-0 my-0 py-0 px-0">
                    <div class="w-50 border border-danger m-0">
                        <h5 class="">Dentista:
                            <?php echo $dentista;?>
                        </h5>
                    </div>
                    <div class="w-50 border border-danger m-0">
                        <h5 class="">Paciente:
                            <?php echo $paciente;?>

                        </h5>
                    </div>

                </div>
                <div class="w-100 border border-danger">
                    <h5 class="text-right">Producto:
                        <?php echo $producto;?>
                    </h5>
                </div>
                <div class="w-100 border border-danger">

                    <h5 class="text-right">Color:
                        <?php 
                    
                    $consulta ="SELECT color FROM color_orden WHERE id_cabeza='$folio' ;";
                    $result=mysqli_query($conn,$consulta);
                    while($datos=$result->fetch_assoc()){
                    echo $datos['color'] ;
                    }
                    
                    ?>

                    </h5>
                </div>
                <div class="w-100 border border-danger">

                    <h5 class="text-right">Nomenclatura:
                        <?php 
                    
                    $consulta ="SELECT nomenclatura FROM nomenclatura_orden WHERE id_cabeza='$folio' ;";
                    $result=mysqli_query($conn,$consulta);
                    while($datos=$result->fetch_assoc()){
                    echo $datos['nomenclatura'] ;
                    }
                    
                    ?>

                    </h5>
                </div>
                <div class="w-100 border border-danger">

                    <h5 class="text-left">comentarios:
                        <?php 
                    
               
                    echo $comentario ;
                    
                    
                    ?>

                    </h5>
                </div>
            </div>
            <div class="col-md-6 text-center">
                <div>
                    <form action="pedidos.php" method="post">
                        <input type="text" class="inputDato" name="buscador" id="buscador" placeholder="Ingresa un folio para buscar la orden">
                        <button type=" submit" class="btn btn-primary text-center">Buscar</button>
                    </form>

                </div>
                <div class="py-5">
                    <h5>Incluir nuevo comentario a la orden</h5>
                    <div>
                        <textarea class="inputDato" name="comentario2" id="comentario2"></textarea>
                    </div>

                </div>

            </div>

        </div>






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