<?php
//Hacemos la conexion
include(dirname(__DIR__)."/conexion/conexion.php");
//recibimos los datos que nos paso ajax.
$id = $_POST['idAlumnoMO'];
$nombre = $_POST['nombreMO'];
$app = $_POST['appMO'];
$apm = $_POST['apmMO'];
$carrera = $_POST['carreraMO'];
$promedio = $_POST['promedioMO'];
//Enviamos datos al sql
$sql = "UPDATE tt_alumnos SET tt_nombre ='$nombre', tt_APP = '$app', tt_APM = '$apm', tt_carrera = '$carrera', tt_promedio = '$promedio' WHERE  tt_idAlumno = '$id'";
 if($resultado = mysqli_query($con,$sql)){
     exit(mysqli_error($con));
 }
?>