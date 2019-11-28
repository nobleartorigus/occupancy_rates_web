<h1> Base de datos</h1>

<div id='bloque_info' class='bloque_info'>
    <div id='info_back'>
        <img src='../assets/img/db.jpg' alt='proceso' />
        <h2> Descripcion proceso backend y DB </h2>
        <p>
            Cuando se obtiene un resultado determinado por el tratamiento de imagen, se procede a ingresarlo en una base de datos
            creada con MySQL que contiene parámetros que serán de gran ayuda para un monitoreo posterior y procesos con ciencia de datos para evaluar
            tendencias y comportamientos de los asociados.
        </p><br />

        <p>
            Estos parámetros contienen el id del escritorio, el piso, la fila, el día, la hora y el estatus de si un lugar está ocupado o no.
        </p><br />
    </div>

    <div id = 'info_back2'>
    <img src='../assets/img/db2.jpg' alt='proceso' />
    <p>
        Con una importación de MySQL en python este proceso se realiza tan pronto el tratamiento de imagen ha 
        terminado.
    </p><br />
    <p>
        Estos INSERTs son los que se pueden consultar en esta interfaz creada en PHP, HTML, CSS y JavaScript.
        Para visualizarlos se pueden realizar tanto consultas actuales, o sea, consultas que únicamente buscan resultados en el día que se realizan. Estas
        consultas sirven para el asociado que desea únicamente saber el estado de ocupación en el momento para tomar una decisión sobre dónde pueda realizar sus labores.
        Por otro lado, existe el perfil de "administrador" donde se pueda consultar todos los datos con filtros a la medida para realizar un monitoreo personalizado y, viendo hacia el futuro,
        tratamiento con estos datos para evaluar tendencias una vez que la base de datos sea robusta.
    </p><br />
    <p>
        Esto se puede visualizar a continuación
    </p><br />

    <a href="<?=base_url?>interfaz_info/index">
        <button type='button'>Siguiente</button>
    </a>

</div>


</div>