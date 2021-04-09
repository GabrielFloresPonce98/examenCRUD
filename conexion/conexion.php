<?php
//Iniciamos con la conexion, a la base de datos remota.
// Primero host donde esta, con su puerto aunque es opcional
// la base de datos,
// contrasenia
//Finalmente la base dedatos
$con = new mysqli("localhost:3308",
                    "root",
                    "",
                    "pruebacrud"
                );
    //Comprobamos si se logro la conexion
    if($con->connect_error){
        //Acaba la conexion y muestra el error.
        die("Error en la conexion" .$con->connect_error);
    }
?>