<?php
//Esta parte podremos modificar personalmente el registro que queramos
include(dirname(__DIR__)."/conexion/conexion.php");

//Recibira el ID que deseamos modificar
$id = $_POST['id'];
//Retorna todos los datos.
$sql = "SELECT * FROM tt_alumnos WHERE tt_idAlumno = '$id' ";
//Ejecuta el query
if (!$resultado = mysqli_query($con, $sql)) {
    exit(mysqli_error($con));
}
//Guardara los resultados de forma en array
$respuesta = array();
//Comprobara que hay mas de 0 registros
if(mysqli_num_rows($resultado) > 0) {
    //Recorrera todos los datos que encuentre
    while ($row = mysqli_fetch_assoc($resultado)) {
        $respuesta = $row;
    }
}

// Mandaremos un echo como la respuesta en formato JSON.
echo json_encode($respuesta);


?>