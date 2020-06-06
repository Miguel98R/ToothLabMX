<div class="container py-5">

    <h4 class="text-center py-4">Rellena los siguientes datos:<h4>
        <form action="util/crearDentista.php"  method="post" >
            <div class="form-row">
                <div class="form-group col-md-6">
                    <input type="text" class="form-control inputDato" name="inputName" id="inputName"
                        placeholder="Ingresa el nombre del doctor (un nombre  y un apellido) " >

                </div>
                <div class="form-group col-md-6">
                    <input type="email" class="form-control inputDato" name="inputEmail" id="inputEmail"
                        placeholder="Ingresa un correo electronico" >

                </div>
            </div>

            <div class="form-row">
                <div class="form-group col-md-6">
                    <input type="text" class="form-control inputDato" name="inputCelular" id="inputCelular"
                        placeholder="Ingrese un numero celular o telefono " maxlength="10" >

                </div>
                <div class="form-group col-md-6">
                    <input type="text" class="form-control inputDato" name="inputCelularConsultorio"
                        id="inputCelularConsultorio" maxlength="10" placeholder="Ingresa un numero celular o telefono del consultorio" >
                </div>
            </div>

            <div class="form-row">
                <div class="form-group col-md-6">
                    <input type="text" class="form-control inputDato" name="inputDomicilio" id=" inputDomicilio"
                        placeholder="Ingrese la direccion del doctor " >

                </div>
                <div class="form-group col-md-6">
                   <Label style="font-size: 16px;" class="m-2">
                       Escoje un color:
                   </Label>  <input type="color" name="color" id="color" >
                </div>
            </div>

             <button class="button3" type="submit ">Crear</button>   
        </form>


    </div>

   