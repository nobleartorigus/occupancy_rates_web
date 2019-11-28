<h1>Hardware </h1>
<div id='raspi' class='interfaz'>
</div>

<div id='info_rasp' class='interfaz'>
    <h1>Uso de microcontroladores</h1>
    <h2>Raspberry Pi</h2>
    <p>
        Para comenzar a utilizar el microcontrolador es indispensable contar con una cámara que, en este caso,
        resulta muy fácil y cómodo obtener imagenes con una piCam, la cámara propia de la raspberry, que cuenta con una
        preconfiguración en el BIOS para simplemente conectar la cámara y activarla.

    </p><br />

    <p>

        Es indispensable contar contar con un ambiente vitual donde se puedan instalar todas las librerias necesarias
        para poder realizar procesos pesados como el tratamiento de imagen y distintos procesos matemáticos
        que ayudarán a determinar un resultado final.
    </p><br />
    <p>Las dependencias indispensables son: </p>
    <ul>
        <li>OpenCV </li>
        <li>Numpy </li>
        <li>MySQL o framework de base de datos similar (PostgreSQL, MongoDB, etc.)</li>    </ul>
    <p>
        Con las dependencias necesarias, la programacion vía crontab consiste en obtener imágenes
        de los espacios de trabajo para comenzar el proceso de tratamiento de imagen. El primer fotograma se captura 
        a las 6 am. donde los asociados aún no han llegado a ocupar los espacios de trabajo, este primer fotograma se toma como referencia
         absoluta de los distintos movimientos de ocupación que puedan llegar o no a realizarse.
    </p><br />
    <p>
        Una vez obtenida una referencia, el microcontrolador está programado para capturar imágenes cada hora y así, 
        poder proceder a la comparación de fotogramas y determinar un resultado final de ocupación por espacio.
    </p><br />

    <a href="<?=base_url?>interfaz_info/info_image_treatment">
        <button type='button'>Siguiente</button>
    </a>
</div>