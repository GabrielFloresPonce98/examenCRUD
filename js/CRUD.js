$(document).ready(function(){
    leerRegistro();
});

function agregarRegistro(){
    /*
    Declaramos las variables que enviaremos a nuestro PHP,
    asi no tendremos que re direccionar la 
    pagina para escribir los datos.
    */
    let idMatricula = $("#idmatricula").val();
    let nombre = $("#nombre").val();
    let app = $("#app").val();
    let apm = $("#apm").val();
    let carrera = $("#carrera").val();
    let promedio = $("#promedio").val();
    //Si alguno de estos datos tiene un espacio en blanco o
    // no recibe ningun dato.
    if(
        (idMatricula == "" || idMatricula == " ") ||
        (nombre == "" || nombre == " ") ||
        (app == "" || app == " ") ||
        (apm == "" || apm ==  " ") ||
        (carrera == "" || carrera == " ") ||
        (promedio == "" || promedio == " ") 
    ){  
        //Mandaremos el aviso de que faltan datos
        //Agregamos codigo CSS con color y tamanio, tambien vaciaremos el aviso para que no se acumule
        $(".idAviso").empty();
        $(".idAviso").prepend("Faltan datos");
        $(".idAviso").css({
            "font-size":"2em",
            "color":"red"
        });
    }else{ 
        //En caso enviaremos los datos mediante
        //Ajax al archivo agregaDatos.php
        $.post("ajax/agregarDatos.php",
        {
            idMatricula: idMatricula,
            nombre: nombre,
            app: app,
            apm: apm,
            carrera: carrera,
            promedio:promedio
        }, function(data,status)
            {
            
                leerRegistro();
                //Completado daremos aviso de que se a completado dicha 
                //Operacion.
                //Agregamos codigo CSS con color y tamanio, tambien vaciaremos el aviso para que no se acumule
                $(".idAviso").empty();
                $(".idAviso").prepend("Se a completado el registro!");
                $(".idAviso").css({
                    "font-size":"2em",
                    "color":"green"
                });
                $(".idAviso").prepend(" ");
            }
        )
        
    
    }
    }

function leerRegistro(){
    //Obtenemos los datos que nos envia el archivo que PHP que hace la lectura de datos.
    //Dicho archivo returna un cuerpo HTML, asi no sera necesario recargar la pagina cada
    //que interactuemos con el programa.
    $.get("ajax/leerDatos.php",{},function (data,status){
        $("#contenedorConsulta").html(data);
    });
}

function enviarDatosRegistro(id){
        //Consultaeremos los datos unicos del conforme al ID que necesitemos.
    $.post("ajax/enviarDatosModificar.php",{
        id:id
    },
    function(data,status){
        //recibiremos un arreglo en formato JSON para enviarlos a los INPUTS donde podremos modiricar
        let usuarios = JSON.parse(data);
        $("#idAlumnoMO").val(usuarios.tt_idAlumno);
        $("#nombreMO").val(usuarios.tt_nombre);
        $("#appMO").val(usuarios.tt_APM);
        $("#apmMO").val(usuarios.tt_APP);
        $("#carreraMO").val(usuarios.tt_carrera);
        $("#promedioMO").val(usuarios.tt_promedio);
       
    }   
    
    );
 
    
           
       
}

function modificarDatos(){
    /**
    Aqui obtenemos las entradas del formulario modificar.
     */
    let idAlumnoMO = $("#idAlumnoMO").val();
    let nombreMO = $("#nombreMO").val();
    let appMO = $("#appMO").val();
    let apmMO = $("#apmMO").val();
    let carreraMO = $("#carreraMO").val();
    let promedioMO = $("#promedioMO").val();
    //Verificamos que no tengan espacios en blanco o nada.
    if(
        (nombreMO == "" || nombreMO == " ") ||
        (appMO == "" || appMO == " ") ||
        (apmMO == "" || apmMO ==  " ") ||
        (carreraMO == "" || carreraMO == " ") ||
        (promedioMO == "" || promedioMO == " ") 
    ){  
        //Damos aviso de que hay que llenar el formulario.

        $(".idAvisoMO").empty();
        $(".idAvisoMO").prepend("Faltan datos");
        $(".idAvisoMO").css({
            "font-size":"1em",
            "color":"red"
        });
    }else{
        //Enviamos los datos al PHP mediante AJAX.
        $.post("ajax/modificarDB.php",{
            idAlumnoMO :idAlumnoMO, 
            nombreMO:nombreMO,
            appMO:appMO,
            apmMO:apmMO,
            carreraMO:carreraMO,
            promedioMO:promedioMO
        },
        function(data,status){
            //Recargamos los datos.
            leerRegistro();
            //Avismoas que se han actualizado los datos
            $(".idAvisoMO").empty();
            $(".idAvisoMO").prepend("Datos actualizados");
            $(".idAvisoMO").css({
                "font-size":"1em",
                "color":"green"
            });
        }
        )
    }
    
    
}
