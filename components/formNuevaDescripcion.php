 <?php 
    include("util/conexion.php");

  

    $consultaProducto= "SELECT producto FROM productos ORDER BY nUsado DESC; ";
    $resultProducto=mysqli_query($conn,$consultaProducto);

    $consultaColores= "SELECT colorName FROM colores;";
    $resultColores=mysqli_query($conn,$consultaColores);
?>

<script>
    $(document).ready(function() {
 
 $(document).on('click keyup','.mis-checkboxesnuevo',function() {
   calcularNuevo();
 });

});

function calcularNuevo() {
  var tot = $('#totalNuevo');
  tot.val(0);
  $('.mis-checkboxesnuevo').each(function() {
    if($(this).hasClass('mis-checkboxesnuevo')) {
      tot.val(($(this).is(':checked') ? parseFloat($(this).attr('tu-attr-nuevo')) : 0) + parseFloat(tot.val()));  
    }
    else {
      tot.val(parseFloat(tot.val()) + (isNaN(parseFloat($(this).val())) ? 0 : parseFloat($(this).val())));
    }
  });

}

    
</script>
<script type="text/javascript">
/**
 * Funcion para cambiar el color de fondo
 * Tiene que recibir el objeto "this"
 */
function changeColorNuevo(x)
{
    if(x.style.background=="rgb(247, 211, 88)")
    {
        x.style.background="#fff";
    }else{
        x.style.background="#F7D358";
    }
    return false;
}
</script>
<div>
   
   <div class="row">
                <div class="col-12 col-sm-12 col-md-2 py-2">
                        <input type="text" id="totalNuevo" style="font-size: 14px;"   name="cantidadNuevo" class="inputDato w-100" placeholder="Cantidad :">
                    </div>
                    <div class="col-12 col-sm-12 col-md-8 py-2">
                        
                       <input list="productos" style="font-size: 14px;"   name="productoNuevo" class="inputDato w-100" placeholder="Selecciona un producto:" >
                        <datalist class="inputDato" id="productos">
                        <?php
                            while($datos=$resultProducto->fetch_assoc()){
                            ?>
                            <option  value="<?php echo strtoupper($datos['producto']);?>"> </option>
                            <?php }?>
                            </datalist>
                    </div>
                 <div class="col-12 col-sm-12 col-md-4 py-2">
                      <input list="colores" style="font-size: 14px;"   name="colorNuevo" class="inputDato w-100" placeholder="Color:" >
                        <datalist class="inputDato" id="colores">
                        <?php
                            while($datos=$resultColores->fetch_assoc()){
                            ?>
                            <option  value="<?php echo strtoupper($datos['colorName']);?>"> </option>
                            <?php }?>
                            </datalist>
                    </div>

                </div>
               
                   
                    <div class="row py-2">
                      <div class=" text-info text-right col py-2">
                           <input style="display:none;" type="checkbox" id="18nuevo" tu-attr-nuevo="1" class="mis-checkboxesnuevo" name="od[]" value="18">
                                <label style="border: 2px solid rgb(188, 188, 245);padding: 4px;" onclick = " changeColorNuevo(this);" for="18nuevo">18</label>
                                <input style="display:none;" type="checkbox" id="17nuevo" tu-attr-nuevo="1" class="mis-checkboxesnuevo" name ="od[]" value="17 ">
                                <label style="border: 2px solid rgb(188, 188, 245);padding: 4px;" onclick = " changeColorNuevo(this);" for="17nuevo">17</label>
                                <input style="display:none;" type="checkbox" id="16nuevo" tu-attr-nuevo="1" class="mis-checkboxesnuevo" name="od[]" value="16 ">
                                <label style="border: 2px solid rgb(188, 188, 245);padding: 4px;" onclick = " changeColorNuevo(this);" for="16nuevo">16</label>
                                <input style="display:none;" type="checkbox" id="15nuevo" tu-attr-nuevo="1" class="mis-checkboxesnuevo" name="od[]" value="15 ">
                                <label style="border: 2px solid rgb(188, 188, 245);padding: 4px;" onclick = " changeColorNuevo(this);" for="15nuevo">15</label>
                                <input style="display:none;" type="checkbox" id="14nuevo" tu-attr-nuevo="1" class="mis-checkboxesnuevo" name="od[]" value="14 ">
                                <label style="border: 2px solid rgb(188, 188, 245);padding: 4px;" onclick = " changeColorNuevo(this);" for="14nuevo">14</label>
                                <input style="display:none;" type="checkbox" id="13nuevo" tu-attr-nuevo="1"  class="mis-checkboxesnuevo" name="od[]" value="13 ">
                                <label style="border: 2px solid rgb(188, 188, 245);padding: 4px;" onclick = " changeColorNuevo(this);" for="13nuevo">13</label>
                                <input style="display:none;" type="checkbox" id="12nuevo" tu-attr-nuevo="1" class="mis-checkboxesnuevo" name="od[]" value="12 ">
                                <label style="border: 2px solid rgb(188, 188, 245);padding: 4px;" onclick = " changeColorNuevo(this);" for="12nuevo">12</label>
                                <input style="display:none;" type="checkbox" id="11nuevo" tu-attr-nuevo="1" class="mis-checkboxesnuevo" name="od[]" value="11 ">
                                <label style="border: 2px solid rgb(188, 188, 245);padding: 4px;" onclick = " changeColorNuevo(this);" for="11nuevo">11</label>
                            </div>
                      

                         <div style="color:firebrick; " class=" text-left col  py-2 ">
                            <div>
                                <input style="display:none;" type="checkbox" id="21nuevo" tu-attr-nuevo="1" class="mis-checkboxesnuevo" name="od[]" value="21 ">
                                <label style="border: 2px solid rgb(188, 188, 245);padding: 4px;" onclick = " changeColorNuevo(this);" for="21nuevo">21</label> 
                                <input style="display:none;" type="checkbox" id="22nuevo" tu-attr-nuevo="1" class="mis-checkboxesnuevo" name="od[]" value="22 ">
                                <label style="border: 2px solid rgb(188, 188, 245);padding: 4px;" onclick = " changeColorNuevo(this);" for="22nuevo">22</label>
                                <input style="display:none;" type="checkbox" id="23nuevo" tu-attr-nuevo="1"  class="mis-checkboxesnuevo" name="od[]" value="23 ">
                                <label style="border: 2px solid rgb(188, 188, 245);padding: 4px;" onclick = " changeColorNuevo(this);" for="23nuevo">23</label>
                                <input style="display:none;" type="checkbox" id="24nuevo" tu-attr-nuevo="1"  class="mis-checkboxesnuevo" name="od[]" value="24 ">
                                <label style="border: 2px solid rgb(188, 188, 245);padding: 4px;" onclick = " changeColorNuevo(this);" for="24nuevo">24</label>
                                <input style="display:none;" type="checkbox" id="25nuevo" tu-attr-nuevo="1" class="mis-checkboxesnuevo"  name="od[]" value="25 ">
                                <label style="border: 2px solid rgb(188, 188, 245);padding: 4px;" onclick = " changeColorNuevo(this);" for="25nuevo">25</label>
                                <input style="display:none;" type="checkbox" id="26nuevo" tu-attr-nuevo="1"  class="mis-checkboxesnuevo" name="od[]" value="26 ">
                                <label style="border: 2px solid rgb(188, 188, 245);padding: 4px;" onclick = " changeColorNuevo(this);" for="26nuevo">26</label>
                                <input style="display:none;" type="checkbox" id="27nuevo" tu-attr-nuevo="1" class="mis-checkboxesnuevo" name="od[]" value="27 ">
                                <label style="border: 2px solid rgb(188, 188, 245);padding: 4px;" onclick = " changeColorNuevo(this);" for="27nuevo">27</label>
                                <input style="display:none;" type="checkbox" id="28nuevo" tu-attr-nuevo="1" class="mis-checkboxesnuevo" name="od[]" value="28 ">
                                <label style="border: 2px solid rgb(188, 188, 245);padding: 4px;" onclick = " changeColorNuevo(this);" for="28nuevo">28</label>
                            </div>

                        </div>

                    </div>

                    <div class="row ">
                       <div class="text-success col text-right py-2">
                            <div><input style="display:none;" type="checkbox" id="48nuevo" tu-attr-nuevo="1" class="mis-checkboxesnuevo" name="od[]" value="48 ">
                                <label style="border: 2px solid rgb(188, 188, 245);padding: 4px;" onclick = " changeColorNuevo(this);" for="48nuevo">48</label>
                                <input style="display:none;" type="checkbox" id="47nuevo" tu-attr-nuevo="1" class="mis-checkboxesnuevo" name="od[]" value="47 ">
                                <label style="border: 2px solid rgb(188, 188, 245);padding: 4px;" onclick = " changeColorNuevo(this);" for="47nuevo">47</label>
                                <input style="display:none;" type="checkbox" id="46nuevo" tu-attr-nuevo="1" class="mis-checkboxesnuevo" name="od[]" value="16 ">
                                <label style="border: 2px solid rgb(188, 188, 245);padding: 4px;" onclick = " changeColorNuevo(this);" for="46nuevo">46</label>
                                <input style="display:none;" type="checkbox" id="45nuevo" tu-attr-nuevo="1" class="mis-checkboxesnuevo" name="od[]" value="45 ">
                                <label style="border: 2px solid rgb(188, 188, 245);padding: 4px;" onclick = " changeColorNuevo(this);" for="45nuevo">45</label>
                                <input style="display:none;" type="checkbox" id="44nuevo" tu-attr-nuevo="1" class="mis-checkboxesnuevo" name="od[]" value="44 ">
                                <label style="border: 2px solid rgb(188, 188, 245);padding: 4px;" onclick = " changeColorNuevo(this);" for="44nuevo">44</label>
                                <input style="display:none;" type="checkbox" id="43nuevo" tu-attr-nuevo="1" class="mis-checkboxesnuevo" name="od[]" value="43 ">
                                <label style="border: 2px solid rgb(188, 188, 245);padding: 4px;" onclick = " changeColorNuevo(this);" for="43nuevo">43</label>
                                <input style="display:none;" type="checkbox" id="42nuevo" tu-attr-nuevo="1" class="mis-checkboxesnuevo" name="od[]" value="42 ">
                                <label style="border: 2px solid rgb(188, 188, 245);padding: 4px;" onclick = " changeColorNuevo(this);" for="42nuevo">42</label>
                                <input style="display:none;" type="checkbox" id="41nuevo" tu-attr-nuevo="1" class="mis-checkboxesnuevo" name="od[]" value="41 ">
                                <label style="border: 2px solid rgb(188, 188, 245);padding: 4px;" onclick = " changeColorNuevo(this);" for="41nuevo">41</label>
                            </div>

                        </div>
                        <div style="color:orange; " class=" text-left col py-2 ">
                            <div>
                                <input style="display:none;" type="checkbox" id="31nuevo" tu-attr-nuevo="1" class="mis-checkboxesnuevo" name="od[]" value="31 ">
                                <label style="border: 2px solid rgb(188, 188, 245);padding: 4px;" onclick = " changeColorNuevo(this);" for="31nuevo">31</label>
                                <input style="display:none;" type="checkbox" id="32nuevo" tu-attr-nuevo="1" class="mis-checkboxesnuevo" name="od[]" value="32 ">
                                <label style="border: 2px solid rgb(188, 188, 245);padding: 4px;" onclick = " changeColorNuevo(this);" for="32nuevo">32</label>
                                <input style="display:none;" type="checkbox" id="33nuevo" tu-attr-nuevo="1" class="mis-checkboxesnuevo"  name="od[]" value="33 ">
                                <label style="border: 2px solid rgb(188, 188, 245);padding: 4px;" onclick = " changeColorNuevo(this);" for="33nuevo">33</label>
                                <input style="display:none;" type="checkbox" id="34nuevo" tu-attr-nuevo="1" class="mis-checkboxesnuevo" name="od[]" value="34 ">
                                <label style="border: 2px solid rgb(188, 188, 245);padding: 4px;" onclick = " changeColorNuevo(this);" for="34nuevo">34</label>
                                <input style="display:none;" type="checkbox" id="35nuevo" tu-attr-nuevo="1" class="mis-checkboxesnuevo" name="od[]" value="35 ">
                                <label style="border: 2px solid rgb(188, 188, 245);padding: 4px;" onclick = " changeColorNuevo(this);" for="35nuevo">35</label>
                                <input style="display:none;" type="checkbox" id="36nuevo" tu-attr-nuevo="1" class="mis-checkboxesnuevo" name="od[]" value="36 ">
                                <label style="border: 2px solid rgb(188, 188, 245);padding: 4px;" onclick = " changeColorNuevo(this);" for="36nuevo">36</label>
                                <input style="display:none;" type="checkbox" id="37nuevo" tu-attr-nuevo="1" class="mis-checkboxesnuevo" name="od[]" value="37 ">
                                <label style="border: 2px solid rgb(188, 188, 245);padding: 4px;" onclick = " changeColorNuevo(this);" for="37nuevo">37</label>
                                <input style="display:none;" type="checkbox" id="38nuevo" tu-attr-nuevo="1" class="mis-checkboxesnuevo" name="od[]" value="38 ">
                                <label style="border: 2px solid rgb(188, 188, 245);padding: 4px;" onclick = " changeColorNuevo(this);" for="38nuevo">38</label>
                            </div>

                        </div>

                    </div>



</div>
