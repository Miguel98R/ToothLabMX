<div style=" border:4px solid <?php echo $ticketColor;?>;border-radius:30px;">

    <div class="row mx-0 my-0 py-1 px-0">
        <div class="w-50 ">
            <h5 class="font-weight-bolder ">Status:
                <?php echo $status;?>
            </h5>

        </div>
        <div class="w-50 ">
            <h5 class="font-weight-bolder ">Folio:
                <?php echo $folio;?>
            </h5>
        </div>

    </div>
    <div class="row mx-0 my-0 py-0 px-0">
        <div class="w-50 ">
            <h5 class="font-weight-bolder ">Entrada:
                <?php echo $fecha1;?>
            </h5>
        </div>
        <div class="w-50 ">
            <h5 class="font-weight-bolder ">Salida:
                <?php echo $fecha2;?>
            </h5>
        </div>

    </div>
    <div class="row mx-0 my-0 py-0 px-0">
        <div class="w-50 ">
            <h5 class="font-weight-bolder ">Dentista:
                <?php echo $dentista;?>
            </h5>
        </div>
        <div class="w-50 ">
            <h5 class="font-weight-bolder ">Paciente:
                <?php echo $paciente;?>

            </h5>
        </div>

    </div>
    <div class="w-100">
        <h5 class="font-weight-bolder ">Producto:
            <?php echo $producto;?>
        </h5>
    </div>
    <div class="w-100">

        <h5 class="font-weight-bolder ">Color:
            <?php 
                    
                    $consulta ="SELECT color FROM color_orden WHERE id_cabeza='$folio' ;";
                    $result=mysqli_query($conn,$consulta);
                    while($datos=$result->fetch_assoc()){
                    echo $datos['color'] ;
                    }
                    
                    ?>

        </h5>
    </div>
    <div class="w-100">

        <h5 class="font-weight-bolder ">Nomenclatura:
            <?php 
                    
                    $consulta ="SELECT nomenclatura FROM nomenclatura_orden WHERE id_cabeza='$folio' ;";
                    $result=mysqli_query($conn,$consulta);
                    while($datos=$result->fetch_assoc()){
                    echo $datos['nomenclatura'] ;
                    }
                    
                    ?>

        </h5>
    </div>
    <div class="w-100">

        <h5 class="font-weight-bolder " class="font-weight-bolder text-left">Comentarios:
            <?php 
                    
               
                    echo $comentario ;
                    
                    
                    ?>

        </h5>
    </div>

</div>

<button>Imprimir</button>