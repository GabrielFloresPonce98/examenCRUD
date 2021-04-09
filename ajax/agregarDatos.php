<?php
//Agregamos en la carpeta conexiones el archivo que nos ayudara a
//conectarnos a la base de datos.
include(dirname(__DIR__)."/conexion/conexion.php");
$idMatricula = $_POST['idMatricula'];
$nombre = $_POST['nombre'];
$app = $_POST['app'];
$apm = $_POST['apm'];
$carrera = $_POST['carrera'];
$promedio = $_POST['promedio'];

$sql = "INSERT INTO  tt_alumnos
    (
    tt_matricula,
    tt_nombre,
    tt_APP,
    tt_APM,
    tt_carrera,
    tt_promedio
    ) VALUES (
    '$idMatricula',
    '$nombre',
    '$app',
    '$apm',
    '$carrera',
    '$promedio')";
    if(!$resultado = mysqli_query($con,$sql)){
        exit(mysqli_query($con));
    }

?>