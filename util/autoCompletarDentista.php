<?php
include "conexion.php";

if (isset($_POST['query'])) {

    $respuesta = mysqli_real_escape_string($conn, $_POST['query']);
    $data = array();
    $sql = "SELECT * from dentistas WHERE nombre LIKE '%" . $respuesta . "%'";
    $res = $conn->query($sql);
    if ($res->num_rows > 0) {
        while ($row = $res->fetch_assoc()) {
            $data[] = $row["nombre"];
        }
        echo json_encode($data);
    }

}