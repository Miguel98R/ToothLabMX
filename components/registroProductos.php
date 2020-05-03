<div class="container py-5 text-center">

    <h4 class="text-center py-4">Rellena los siguientes datos:<h4>
        <form action="util/crearProducto.php"  method="post" >
            <div class="form-row">
                <div class="form-group col-md-6">
                    <input type="text" class="form-control inputDato" name="inputNombreProducto" id="inputNombreProducto"
                        placeholder="Ingresa el nombre del producto" required>

                </div>
                <div class="form-group col-md-6">
                    <input type="number" class="form-control inputDato" name="inputPrecio" id="inputPrecio"
                        placeholder="&#xf155; Ingresa su precio" style="font-family:Arial, FontAwesome" required>

                </div>
                
            </div>

             <button class="button3 text-center" type="submit ">Crear</button>   
        </form>


    </div>

   