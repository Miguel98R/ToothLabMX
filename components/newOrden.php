<form action="util/guardarOrden.php" autocomplete="off" method="POST">

    <div class="container-fluid text-center   py-2">
        <div class="row">
            <div class="col-lg-12 col-md-12 col-md-12">
                <div class="row">
                    <div class="col-md-4 py-2 px-5">
                        <div>
                            <h5 class="font-weight-bold">Dentista</h5>
                        </div>
                        <div>
                            <input class="inputDato py-2" type="text" name="dentista" id="dentista" required>
                        </div>
                    </div>
                    <div class="col-md-4 py-2 px-5">
                        <div clas="row">

                            <div class="row">
                                <div class="col-12 col-lg-6">
                                    <div class="col">
                                        <h5 class="font-weight-bold">Producto</h5>
                                    </div>
                                    <input class="inputDato py-2" type="text" name="producto" id="producto" required>

                                </div>
                                <div class="col-12 col-lg-6">
                                    <div class="col">
                                        <h5 class="font-weight-bold">Unidades</h5>
                                    </div>

                                    <input class="inputDato py-2" type="number" name="unidades" id="unidades" required>
                                </div>
                            </div>






                        </div>

                    </div>
                    <div class="col-md-4 py-2 px-5 ">
                        <div>
                            <h5 class="font-weight-bold ">Paciente</h5>
                        </div>
                        <div>
                            <input class="inputDato py-2" type="text" name="paciente" id="paciente" required>
                        </div>
                    </div>
                </div>


            </div>



        </div>

    </div>






    <div class="container-fluid text-center py-2 ">
        <div class="col-lg-12 col-md-12 col-md-12 ">
            <div class="row ">
                <div class="col-md-4 py-2 px-5 " style="padding-right: 30px; ">
                    <div>
                        <h5 class="font-weight-bold ">Entrada</h5>
                    </div>
                    <div>
                        <input class="inputDato py-2 " type="date" name="entrada" id="entrada" required>
                    </div>
                </div>
                <div class="col-md-4 py-2 px-5 ">
                    <div>
                        <h5 class="font-weight-bold ">Salida</h5>
                    </div>
                    <div>
                        <input class="inputDato py-2 " type="date" name="salida" id="salida" required>
                    </div>
                </div>
                <div class="col-md-4 py-2 px-5 ">
                    <div>
                        <h5 class="font-weight-bold ">Comentario</h5>
                    </div>
                    <div>
                        <textarea class="inputDato" name="comentario" id="comentario" required></textarea>
                    </div>
                </div>

            </div>
        </div>
    </div>
    <!-- ----------------------------colores ----------------------------------------------------------------------->
    <section>
        <div class="container-fluid py-2 bg-light ">
            <div class="row ">
                <div class="col-md-6 px-4 ">
                    <h5 class="font-weight-bold text-center py-2 ">Color</h5>
                    <div class="row ">

                        <div class="px-2 text-info ">
                            <input type="checkbox" id="A1 " name="color[]" value="A1 ">
                            <label for="A1 "> A1</label><br>
                            <input type="checkbox" id="A2 " name="color[]" value="A2 ">
                            <label for="A2 "> A2</label><br>
                            <input type="checkbox" id="A3 " name="color[]" value="A3 ">
                            <label for="A3 "> A3</label><br>
                            <input type="checkbox" id="A3.5 " name="color[]" value="A3.5 ">
                            <label for="A3.5 ">A3.5</label><br>
                            <input type="checkbox" id="A4 " name="color[]" value="A4 ">
                            <label for="A4 "> A4</label><br>
                        </div>
                        <div class="px-2 text-info ">
                            <input type="checkbox" id="B1 " name="color[]" value="B1 ">
                            <label for="B1 "> B1</label><br>
                            <input type="checkbox" id="B2 " name="color[]" value="B2 ">
                            <label for="B2 "> B2</label><br>
                            <input type="checkbox" id="B3 " name="color[]" value="B3 ">
                            <label for="B3 "> B3</label><br>
                            <input type="checkbox" id="B4 " name="color[]" value="B4 ">
                            <label for="B4 "> B4</label><br>
                        </div>
                        <div class="px-2 text-info ">
                            <input type="checkbox" id="C1 " name="color[]" value="C1 ">
                            <label for="C1 "> C1</label><br>
                            <input type="checkbox" id="C2 " name="color[]" value="C2 ">
                            <label for="C2 "> C2</label><br>
                            <input type="checkbox" id="C3 " name="color[]" value="C3 ">
                            <label for="C3 "> C3</label><br>
                            <input type="checkbox" id="C4 " name="color[]" value="C4 ">
                            <label for="C4 "> C4</label><br>
                        </div>
                        <div class="px-2 text-info ">
                            <input type="checkbox" id="D2 " name="color[]" value="D2 ">
                            <label for="D2 "> D2</label><br>
                            <input type="checkbox" id="D3 " name="color[]" value="D3 ">
                            <label for="D3 "> D3</label><br>
                            <input type="checkbox" id="D4 " name="color[]" value="D4 ">
                            <label for="D4 "> D4</label><br>
                        </div>
                        <div class="px-2 text-info ">
                            <input type="checkbox" id="61 " name="color[]" value="61 ">
                            <label for="61 "> 61</label><br>
                            <input type="checkbox" id="62 " name="color[]" value="62 ">
                            <label for="62 "> 62</label><br>
                            <input type="checkbox" id="65 " name="color[]" value="65 ">
                            <label for="65 "> 65</label><br>
                            <input type="checkbox" id="66 " name="color[]" value="66 ">
                            <label for="66 "> 66</label><br>
                            <input type="checkbox" id="81 " name="color[]" value="81 ">
                            <label for="81 "> 81</label><br>
                        </div>
                        <div class="px-2 " style="color:darkgreen; ">
                            <input type="checkbox" id="AcrilicoR2VKemdent " name="color[]" value="Acrilico R2V Kemdent ">
                            <label for="AcrilicoR2VKemdent ">Acrilico R2V Kemdent</label><br>
                            <input type="checkbox" id="Acrilico26PinkVein " name="color[]" value="Acrilico 26 Pink Vein ">
                            <label for="Acrilico26PinkVein ">Acrilico 26P ink Vein</label><br>
                            <input type="checkbox" id="AcrilicoTransparente" name="color[]" value="Acrilico Transparente">
                            <label for="AcrilicoTransparente">Acrilico Transparente</label><br>


                        </div>
                        <div class="px-2 " style="color:deeppink; ">
                            <input type="checkbox" id="RosaOriginal " name="color[]" value="Rosa Original ">
                            <label for="RosaOriginal ">Rosa Original</label><br>
                            <input type="checkbox" id="RosaTranslucido " name="color[]" value="Rosa Translucido ">
                            <label for="RosaTranslucido "> Rosa Translucido</label><br>
                            <input type="checkbox" id="R1Nictone " name="color[]" value="R1 Nictone ">
                            <label for="R1Nictone "> R1 Nictone</label><br>
                            <input type="checkbox" id="R2Nictone " name="color[]" value="R2 Nictone ">
                            <label for="R2Nictone "> R2 Nictone</label><br>
                        </div>

                        <div class="px-2 py-2 col-sm-12 ">
                            <select name="SinColor" class="inputDato" id="sinColor">
                                <option value="">¿ Sin color?</option>
                                <option value="Sin_Color">Sin Color</option>
                                <option value="Que_Color?">¿Que color?</option>
                            </select>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-sm-6 px-4 ">
                    <h5 class="font-weight-bold text-center py-2 ">Nomenclatura</h5>
                    <div class="row ">
                        <div class=" text-info px-2 col-6 py-2">
                            <div><input type="checkbox" id="18 " name="nomenclatura[] " value="18 ">
                                <label for="18 ">18</label>
                                <input type="checkbox" id="17 " name="nomenclatura[] " value="17 ">
                                <label for="17 ">17</label>
                                <input type="checkbox" id="16 " name="nomenclatura[] " value="16 ">
                                <label for="16 ">16</label>
                                <input type="checkbox" id="15 " name="nomenclatura[] " value="15 ">
                                <label for="15 ">15</label>
                                <input type="checkbox" id="14 " name="nomenclatura[] " value="14 ">
                                <label for="14 ">14</label>
                                <input type="checkbox" id="13 " name="nomenclatura[] " value="13 ">
                                <label for="13 ">13</label>
                                <input type="checkbox" id="12 " name="nomenclatura[] " value="12 ">
                                <label for="12 ">12</label>
                                <input type="checkbox" id="11 " name="nomenclatura[] " value="11 ">
                                <label for="11 ">11</label>
                            </div>
                        </div>

                        <div style="color:firebrick; " class=" col-6 px-2 py-2 ">
                            <div>
                                <input type="checkbox" id="21 " name="nomenclatura[] " value="21 ">
                                <label for="21 ">21</label>
                                <input type="checkbox" id="22 " name="nomenclatura[] " value="22 ">
                                <label for="22 ">22</label>
                                <input type="checkbox" id="23 " name="nomenclatura[] " value="23 ">
                                <label for="23 ">23</label>
                                <input type="checkbox" id="24 " name="nomenclatura[] " value="24 ">
                                <label for="24 ">24</label>
                                <input type="checkbox" id="25 " name="nomenclatura[] " value="25 ">
                                <label for="25 ">25</label>
                                <input type="checkbox" id="26 " name="nomenclatura[] " value="26 ">
                                <label for="26 ">26</label>
                                <input type="checkbox" id="27 " name="nomenclatura[] " value="27 ">
                                <label for="27 ">27</label>
                                <input type="checkbox" id="28 " name="nomenclatura[] " value="28 ">
                                <label for="28 ">28</label>
                            </div>

                        </div>

                    </div>

                    <div class="row ">
                        <div class="text-success col-6 px-2 py-2">
                            <div><input type="checkbox" id="48 " name="nomenclatura[] " value="48 ">
                                <label for="48 ">48</label>
                                <input type="checkbox" id="47 " name="nomenclatura[] " value="47 ">
                                <label for="47 ">47</label>
                                <input type="checkbox" id="46 " name="nomenclatura[] " value="16 ">
                                <label for="46 ">46</label>
                                <input type="checkbox" id="45 " name="nomenclatura[] " value="45 ">
                                <label for="45 ">45</label>
                                <input type="checkbox" id="44 " name="nomenclatura[] " value="44 ">
                                <label for="44 ">44</label>
                                <input type="checkbox" id="43 " name="nomenclatura[] " value="43 ">
                                <label for="43 ">43</label>
                                <input type="checkbox" id="42 " name="nomenclatura[] " value="42 ">
                                <label for="42 ">42</label>
                                <input type="checkbox" id="41 " name="nomenclatura[] " value="41 ">
                                <label for="41 ">41</label>
                            </div>

                        </div>
                        <div style="color:orange; " class="px-2 col-6 py-2 ">
                            <div>
                                <input type="checkbox" id="31 " name="nomenclatura[] " value="31 ">
                                <label for="31 ">31</label>
                                <input type="checkbox" id="32 " name="nomenclatura[] " value="32 ">
                                <label for="32 ">32</label>
                                <input type="checkbox" id="33 " name="nomenclatura[] " value="33 ">
                                <label for="33 ">33</label>
                                <input type="checkbox" id="34 " name="nomenclatura[] " value="34 ">
                                <label for="34">34</label>
                                <input type="checkbox" id="35 " name="nomenclatura[] " value="35 ">
                                <label for="35 ">35</label>
                                <input type="checkbox" id="36 " name="nomenclatura[] " value="36 ">
                                <label for="36 ">36</label>
                                <input type="checkbox" id="37 " name="nomenclatura[] " value="37 ">
                                <label for="37 ">37</label>
                                <input type="checkbox" id="38 " name="nomenclatura[] " value="38 ">
                                <label for="38 ">38</label>
                            </div>

                        </div>

                    </div>


                </div>

            </div>


            <div class=" text-center  col-md-12 ">
                <button class="button3 " type="submit ">Crear</button>
            </div>
        </div>
    </section>



</form>