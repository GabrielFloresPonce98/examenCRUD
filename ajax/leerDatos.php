<?php 
//Incluimos la conexion.
include(dirname(__DIR__)."/conexion/conexion.php");

//Devolveremos una variable PHP con codigo HTML para que pueda
//interpretar los html como parte de una tabla..
$consultAlum = '<table class = "tablaAlum" >
<tr class = "tituloTabla"> 
    <th style="color:white">ID Alumno</th>
    <th style="color:white">Matricula</th>
    <th style="color:white">Nombre</th>
    <th style="color:white">Apellido Paterno</th>
    <th style="color:white">Apellido Materno</th>
    <th style="color:white">Carrera</th>
    <th style="color:white">Promedio</th>
</tr>';
//Seleccionamos todos los datos de los alumnos de la tabla tt_almnos
$sql = "SELECT * FROM tt_alumnos";
//Si el resultado es incorrecto en el query acaba la conexion
if(!$resultado = mysqli_query($con,$sql)){
    exit(mysqli_error($con));
}

//Tienen que existir mas 0 regustro para mandar los datos
if(mysqli_num_rows($resultado)>0){
    //Si existe mas de 0 registros enviara todos los datos con su etiqueta HTML
    while($columna = mysqli_fetch_assoc($resultado)){
        $consultAlum .= '<tr class = "datosTabla">
        <td>'.$columna['tt_idAlumno'].'</td>
        <td>'.$columna['tt_matricula'].'</td>

        <td>'.$columna['tt_nombre'].'</td>
        <td>'.$columna['tt_APP'].'</td>
        <td>'.$columna['tt_APM'].'</td>
        <td>'.$columna['tt_carrera'].' </td>
        <td>'.$columna['tt_promedio'].' </td>
        <td>
		    <button onclick="enviarDatosRegistro('.$columna['tt_idAlumno'].')" class="botonModifiar"><i>Enviar Datos</i></button>
		</td>
        
       
    </tr>';
    }
}else{
    //En caso de que no exista ni un registro, se envia este aviso
    $consultAlum .='<tr><td>No hay alumnos registrados!</td></tr>';
}
//Terminamos con la tabla.
    $consultAlum.= '
    <div class="avisoModificacion"></div>
    
    </tabla>';
    // Enviamos la cadena que acumulo todos los valores String como registros.
    echo $consultAlum;


?>

