function validar() {
    let dentista, paciente, producto, fecha1, fecha2, comentario;


    dentista = document.getElementById("dentista").value;
    producto = document.getElementById("producto").value;

    paciente = document.getElementById("paciente").value;
    fecha1 = document.getElementById("entrada").value;

    fecha2 = document.getElementById("salida").value;
    comentario = document.getElementById("comentario").value;


    if (dentista === "" || dentista === false || dentista === undefined) {
        alert("Por favor ingresa el dentista");
        return false;
    }
    if (producto === "" || producto === false || producto === undefined) {
        alert("Por favor ingrese el producto");
        return false;
    }

    if (paciente === "" || paciente === false || paciente === undefined) {
        alert("Por favor ingresa el paciente");
        return false;
    }



    if (fecha1 === "" || fecha1 === false || fecha1 === undefined) {
        alert(" Por favor ingresa la entrada");
        return false;
    }
    if (fecha2 === "" || fecha2 === false || fecha2 === undefined) {
        alert(" Por favor ingresa la salida");
        return false;
    }
    if (comentario === "" || comentario === false || comentario === undefined) {
        alert(" Por favor ingresa un comnetario");
        return false;
    }







}