<!DOCTYPE html>
<html lang="en">
<head>

    <title>Examen CRU Adan Gabriel Flores Ponce</title>
    <link href="styles/estilos.css" rel="stylesheet">
</head>
<div style="" id="contenedorConsulta">
</div>
    


<body class="cuerpo">

<div class ="formularioPadre">
<div class="formularioAgregar">
    <center>
    <div style="background:white;">
    <h1>Agregar<h1>
    </div>
    <div>
    <label for = "id_matricula" class="textoFormulario">Matricula: </label>
    <input  type="number" id="idmatricula" value="A" class = "inputFormularioA"/>
    </div>


    <div>
    <label for = "id_nombre"  class="textoFormulario">Nombre: </label>
    <input  type="text" id="nombre" value="" class = "inputFormularioA"/>
    </div>

    <div>
    <label for = "id_app"  class="textoFormulario">Apellido paterno: </label>
    <input  type="text" id="app" value="" class = "inputFormularioA"/>
    </div>

    <div>
    <label for = "id_apm"  class="textoFormulario">Apellido materno: </label>
    <input  type="text" id="apm" value="" class = "inputFormularioA"/>
    </div>

    <div>
    <label for = "id_carrera"  class="textoFormulario">Carrera: </label>
    <input  type="text" id="carrera" value="" class = "inputFormularioA"/>
    </div>

    <div>
    <label for = "id_promedio"  class="textoFormulario">promedio: </label>
    <input  type="number" step="0.01" id="promedio" value="" class = "inputFormularioA"/>
    </div>
    <p class = "idAviso"></p>

    <div>
        
        <button type="button" class="botonAgregar" onclick="agregarRegistro()">Agregar</button>
</center>
    </div>
    </div> 
</div>

<div class="formularioModificar">
<center>
    <div style="background:white;">
    <h1>Modificar<h1>
    </div>

    <div>
    <label for = "id_alumno"  class="textoFormulario">Id Alumno: </label>
    <input  type="number" id="idAlumnoMO" value="" class = "inputFormularioA" readonly/>
    </div>

    <div>
    <label for = "id_nombre"  class="textoFormulario">Nombre: </label>
    <input  type="text" id="nombreMO" value="" class = "inputFormularioA"/>
    </div>

    <div>
    <label for = "id_app"  class="textoFormulario">Apellido paterno: </label>
    <input  type="text" id="appMO" value="" class = "inputFormularioA"/>
    </div>

    <div>
    <label for = "id_apm"  class="textoFormulario">Apellido materno: </label>
    <input  type="text" id="apmMO" value="" class = "inputFormularioA"/>
    </div>

    <div>
    <label for = "id_carrera"  class="textoFormulario">Carrera: </label>
    <input  type="text" id="carreraMO" value="" class = "inputFormularioA"/>
    </div>

    <div>
    <label for = "id_promedio"  class="textoFormulario">promedio: </label>
    <input  type="number" step="0.01" id="promedioMO" value="" class = "inputFormularioA"/>
    </div>
    <p class = "idAvisoMO"></p>

    <div>
        <button type="button" class="botonAgregar" onclick="modificarDatos()">Modificar Datos</button>
    </div>
    </div> 
</div>
</center>

   
   

    <script type="text/javascript" src="js/jquery-1.11.3.min.js"></script>
    <script type="text/javascript" src = "js/CRUD.js"></script>






</body>
</html>