 <?php 
    include("util/conexion.php");

    $consulta= "SELECT id,nombre FROM dentistas WHERE status=1 ORDER BY nUsado DESC; ";
    $result=mysqli_query($conn,$consulta);

    $consultaProducto= "SELECT producto FROM productos WHERE status=1 ORDER BY nUsado DESC; ";
    $resultProducto=mysqli_query($conn,$consultaProducto);

    $consultaColores= "SELECT colorName FROM colores;";
    $resultColores=mysqli_query($conn,$consultaColores);
?>

<script>
    $(document).ready(function() {
 
 $(document).on('click keyup','.mis-checkboxes',function() {
   calcular();
 });

});

function calcular() {
  var tot = $('#total');
  tot.val(0);
  $('.mis-checkboxes').each(function() {
    if($(this).hasClass('mis-checkboxes')) {
      tot.val(($(this).is(':checked') ? parseFloat($(this).attr('tu-attr-precio')) : 0) + parseFloat(tot.val()));  
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
function changeColor(x)
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

<div class="container-fluid">
  <div class="row">
    <div class="col-12 col-sm-12 col-md-6 col-lg-6 py-2">
      
<div  style="font-size: 14px; border: 7px solid black; border-radius:20px;">
   <form action="util/crearOrden.php" method="POST" autocomplete="off">
<table class="table text-left table-bordered table-hover table-sm ">
  <tbody>
    <div class="bg-dark">
  <h5 class="text-center py-2 font-weight-bolder text-white"><i class="fas fa-plus"></i>&nbsp; Crear orden</h5>
    </div>
 
    <tr>
    <th ><p>  <label class="font-weight-bolder">Dr:</label>  <input list="dentista"  name="dentista" class="inputDato" placeholder="Selecciona un dentista:" required>
                        <datalist class="inputDato" id="dentista">
                        <?php
                            while($datos=$result->fetch_assoc()){
                            ?>
                            <option  value="<?php echo strtoupper($datos['id']);?>"><?php echo strtoupper($datos['nombre']);?> </option>
                            <?php }?>
                            </datalist></p></th>
      <th ><p>  <label class="font-weight-bolder">Entrada:</label>  <input type="date" name="entrada" id="entrada" class="inputDato" ></p></th>
      
    </tr>
    <tr>
    <th ><p>  <label class="font-weight-bolder">Paciente:</label>  <input type="text" name="paciente" class="inputDato" placeholder="Nombre del paciente:" ></p></th>
 
      <th ><p>  <label class="font-weight-bolder">Salida:</label> <input type="date" name="salida" id="salida" class="inputDato" ></p></th>
       
      
    </tr>
    
   
  </tbody>
</table>
<div class="container py-2 text-center ">

<table class="table table-hover table-sm">
  <thead>
    <tr>
     
      <th class="font-weight-bold" scope="col">PZS</th>
      <th class="font-weight-bold" scope="col">PRODUCTO</th>
      <th class="font-weight-bold" scope="col">COLOR</th>
    
    
    </tr>
  </thead>
  <tbody>
  
    <tr>
   
      <td width="30"><input type="text" id="total" style="font-size: 14px;"   name="cantidad" class="inputDato w-100" >
                </td>
      <td>  <input list="productos" style="font-size: 14px;"   name="producto" class="inputDato w-100" placeholder="Selecciona un producto:" >
                        <datalist class="inputDato" id="productos">
                        <?php
                            while($datos=$resultProducto->fetch_assoc()){
                            ?>
                            <option  value="<?php echo strtoupper($datos['producto']);?>"></option>
                            <?php }?>
                            </datalist></td>
      <td width="230"> <input list="colores" style="font-size: 14px;"   name="color" class="inputDato w-100" placeholder="Color:" >
                        <datalist class="inputDato" id="colores">
                        <?php
                            while($datos=$resultColores->fetch_assoc()){
                            ?>
                            <option  value="<?php echo strtoupper($datos['colorName']);?>"> </option>
                            <?php }?>
                            </datalist></td>
     

    </tr>
  </tbody>
</table>

</div>

<div class="container-fluid text-center">
 
       <div class="row ">
                        <div class=" text-info text-right col py-2">
    
 

                         
                        <input type="checkbox" style="display: none;" id="18" tu-attr-precio="1" class="mis-checkboxes" name ="od[]" value="18">
                                  <label style="border: 2px solid rgb(188, 188, 245);padding: 4px;" onclick = "changeColor(this);"  for="18">18</label>
                                   <input type="checkbox" style="display: none;" id="17" tu-attr-precio="1" class="mis-checkboxes" name ="od[]" value="17">
                                  <label style="border: 2px solid rgb(188, 188, 245);padding: 4px;" onclick = "changeColor(this);"  for="17">17</label>
                                  <input type="checkbox" style="display: none;" id="16" tu-attr-precio="1" class="mis-checkboxes" name="od[]" value="16">
                                  <label style="border: 2px solid rgb(188, 188, 245);padding: 4px;" onclick = "changeColor(this);"for="16">16</label>
                                <input type="checkbox" style="display: none;" id="15" tu-attr-precio="1" class="mis-checkboxes" name="od[]" value="15">
                                  <label style="border: 2px solid rgb(188, 188, 245);padding: 4px;" onclick = "changeColor(this);"for="15">15</label>
                                <input type="checkbox" style="display: none;" id="14"  tu-attr-precio="1" class="mis-checkboxes" name="od[]" value="14">
                                  <label style="border: 2px solid rgb(188, 188, 245);padding: 4px;" onclick = "changeColor(this);"for="14">14</label>
                                <input type="checkbox" style="display: none;" id="13" tu-attr-precio="1"  class="mis-checkboxes" name="od[]" value="13">
                                  <label style="border: 2px solid rgb(188, 188, 245);padding: 4px;" onclick = "changeColor(this);"for="13">13</label>
                                <input type="checkbox" style="display: none;" id="12" tu-attr-precio="1" class="mis-checkboxes" name="od[]" value="12">
                                  <label style="border: 2px solid rgb(188, 188, 245);padding: 4px;" onclick = "changeColor(this);"for="12">12</label>
                                <input type="checkbox" style="display: none;" id="11" tu-attr-precio="1" class="mis-checkboxes" name="od[]" value="11">
                                  <label style="border: 2px solid rgb(188, 188, 245);padding: 4px;" onclick = "changeColor(this);"for="11">11</label>
                           
                        </div>

                        <div style="color:firebrick; " class=" text-left col  py-2 ">
                            
                                <input type="checkbox" style="display: none;" id="21" tu-attr-precio="1" class="mis-checkboxes" name="od[]" value="21">
                                  <label style="border: 2px solid rgb(188, 188, 245);padding: 4px;" onclick = "changeColor(this);"for="21">21</label> 
                                <input type="checkbox" style="display: none;" id="22" tu-attr-precio="1" class="mis-checkboxes" name="od[]" value="22">
                                  <label style="border: 2px solid rgb(188, 188, 245);padding: 4px;" onclick = "changeColor(this);"for="22">22</label>
                                <input type="checkbox" style="display: none;" id="23" tu-attr-precio="1"  class="mis-checkboxes" name="od[]" value="23">
                                  <label style="border: 2px solid rgb(188, 188, 245);padding: 4px;" onclick = "changeColor(this);"for="23">23</label>
                                <input type="checkbox" style="display: none;" id="24" tu-attr-precio="1"  class="mis-checkboxes" name="od[]" value="24">
                                  <label style="border: 2px solid rgb(188, 188, 245);padding: 4px;" onclick = "changeColor(this);"for="24">24</label>
                                <input type="checkbox" style="display: none;" id="25" tu-attr-precio="1" class="mis-checkboxes"  name="od[]" value="25">
                                  <label style="border: 2px solid rgb(188, 188, 245);padding: 4px;" onclick = "changeColor(this);"for="25">25</label>
                                <input type="checkbox" style="display: none;" id="26" tu-attr-precio="1"  class="mis-checkboxes" name="od[]" value="26">
                                  <label style="border: 2px solid rgb(188, 188, 245);padding: 4px;" onclick = "changeColor(this);"for="26">26</label>
                                <input type="checkbox" style="display: none;" id="27" tu-attr-precio="1" class="mis-checkboxes" name="od[]" value="27">
                                  <label style="border: 2px solid rgb(188, 188, 245);padding: 4px;" onclick = "changeColor(this);"for="27">27</label>
                                <input type="checkbox" style="display: none;" id="28" tu-attr-precio="1" class="mis-checkboxes" name="od[]" value="28">
                                  <label style="border: 2px solid rgb(188, 188, 245);padding: 4px;" onclick = "changeColor(this);"for="28">28</label>
                          

                        </div>

                    </div>

                    <div class="row ">
                        <div class="text-success col text-right py-2">
                            <input type="checkbox" style="display: none;" style="display: none;" id="48" tu-attr-precio="1" class="mis-checkboxes" name="od[]" value="48 ">
                                  <label style="border: 2px solid rgb(188, 188, 245);padding: 4px;" onclick = "changeColor(this);"for="48">48</label>
                                <input type="checkbox" style="display: none;" id="47" tu-attr-precio="1" class="mis-checkboxes" name="od[]" value="47">
                                  <label style="border: 2px solid rgb(188, 188, 245);padding: 4px;" onclick = "changeColor(this);"for="47">47</label>
                                <input type="checkbox" style="display: none;" id="46" tu-attr-precio="1" class="mis-checkboxes" name="od[]" value="46">
                                  <label style="border: 2px solid rgb(188, 188, 245);padding: 4px;" onclick = "changeColor(this);"for="46">46</label>
                                <input type="checkbox" style="display: none;" id="45" tu-attr-precio="1" class="mis-checkboxes" name="od[]" value="45">
                                  <label style="border: 2px solid rgb(188, 188, 245);padding: 4px;" onclick = "changeColor(this);"for="45">45</label>
                                <input type="checkbox" style="display: none;" id="44" tu-attr-precio="1" class="mis-checkboxes" name="od[]" value="44">
                                  <label style="border: 2px solid rgb(188, 188, 245);padding: 4px;" onclick = "changeColor(this);"for="44">44</label>
                                <input type="checkbox" style="display: none;" id="43" tu-attr-precio="1" class="mis-checkboxes" name="od[]" value="43">
                                  <label style="border: 2px solid rgb(188, 188, 245);padding: 4px;" onclick = "changeColor(this);"for="43">43</label>
                                <input type="checkbox" style="display: none;" id="42" tu-attr-precio="1" class="mis-checkboxes" name="od[]" value="42">
                                  <label style="border: 2px solid rgb(188, 188, 245);padding: 4px;" onclick = "changeColor(this);"for="42">42</label>
                                <input type="checkbox" style="display: none;" id="41" tu-attr-precio="1" class="mis-checkboxes" name="od[]" value="41">
                                  <label style="border: 2px solid rgb(188, 188, 245);padding: 4px;" onclick = "changeColor(this);"for="41">41</label>
                           

                        </div>
                        <div style="color:orange; " class=" text-left col py-2 ">
                          
                                <input type="checkbox" style="display: none;" id="31" tu-attr-precio="1" class="mis-checkboxes" name="od[]" value="31">
                                  <label style="border: 2px solid rgb(188, 188, 245);padding: 4px;" onclick = "changeColor(this);"for="31">31</label>
                                <input type="checkbox" style="display: none;" id="32" tu-attr-precio="1" class="mis-checkboxes" name="od[]" value="32">
                                  <label style="border: 2px solid rgb(188, 188, 245);padding: 4px;" onclick = "changeColor(this);"for="32">32</label>
                                <input type="checkbox" style="display: none;" id="33" tu-attr-precio="1" class="mis-checkboxes"  name="od[]" value="33">
                                  <label style="border: 2px solid rgb(188, 188, 245);padding: 4px;" onclick = "changeColor(this);"for="33">33</label>
                                <input type="checkbox" style="display: none;" id="34" tu-attr-precio="1" class="mis-checkboxes" name="od[]" value="34">
                                  <label style="border: 2px solid rgb(188, 188, 245);padding: 4px;" onclick = "changeColor(this);"for="34">34</label>
                                <input type="checkbox" style="display: none;" id="35" tu-attr-precio="1" class="mis-checkboxes" name="od[]" value="35">
                                  <label style="border: 2px solid rgb(188, 188, 245);padding: 4px;" onclick = "changeColor(this);"for="35">35</label>
                                <input type="checkbox" style="display: none;" id="36" tu-attr-precio="1" class="mis-checkboxes" name="od[]" value="36">
                                  <label style="border: 2px solid rgb(188, 188, 245);padding: 4px;" onclick = "changeColor(this);"for="36">36</label>
                                <input type="checkbox" style="display: none;" id="37" tu-attr-precio="1" class="mis-checkboxes" name="od[]" value="37">
                                  <label style="border: 2px solid rgb(188, 188, 245);padding: 4px;" onclick = "changeColor(this);"for="37">37</label>
                                <input type="checkbox" style="display: none;" id="38" tu-attr-precio="1" class="mis-checkboxes" name="od[]" value="38">
                                  <label style="border: 2px solid rgb(188, 188, 245);padding: 4px;" onclick = "changeColor(this);"for="38">38</label>
                            </div>
                    </div>
</div>
  <hr>
  <div class="container text-center py-2">
                       <textarea name="comentario"  class=" inputDato w-100" placeholder="Comentarios:" ></textarea>
                    </div>
  <div class="text-center py-2">
                         <input type="submit" class="btn bg-primary text-white" value="Crear Orden">
                    </div>
  


</form>
</div>

   </div>

    <div class="text-center col-12 col-sm-12 col-md-6 col-lg-6 py-2">
  
      
           
           <?php
             include "util/ticket.php";
           include "components/datosTicket.php";?>
        </div>

   </div>
</div>
  

   
       

