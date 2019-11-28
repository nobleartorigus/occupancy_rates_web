<h1>Informacion Tratamiento de Imagen </h1>

<div id='imgref' class='interfaz'>
    <img src='../assets/img/image_ref.jpg' alt='img1' />
</div>

<div id='imgnew' class='interfaz'>
    <img src='../assets/img/image_new.jpg' alt='img2' />
</div>


<div id='img_info' class='bloque'>
    <h2>Proceso de tratamiento de imagen </h2>
    <img src='../assets/img/proceso1.jpg' alt='proceso' />
    <p>
        La etapa de middleware es la parte más importante del proyecto ya que es la que define nuestro estatus 
        final con respecto a la ocupación de espacios y por ende, toda la logística que esto implica.
    </p><br />
    <p>
        Todos los días se toma nueva información para evaluar la ocupación de los lugares. Funciona de la siguiente manera,
        con una imagen de referencia y una nueva imagen se procede a una comparación y un tratamiento de resta de fotogramas
        en la cual, de acuerdo a un umbral determinado por una matriz de pruebas, puede determinar un estatus de ocupación.

    </p><br />
</div>

<div id='img_info2' class='bloque'>
    <h2>Substraccion de fotogramas</h2>
    <img src='../assets/img/proceso2.jpg' alt='proceso' />
    <p>
        En un script programado cada hora, se ingresan como parámetros tanto la imagen actual de referencia
        como la nueva imagen a comparar. Primero se tratan ambas imagenes seccionandolas por escritorios y espacios críticos dentro de ellos
        para eliminar todo el ruido que pueda producirse.
    </p><br />

    <p>
        La primera etapa consiste en suavizar ambas imagenes con un filtro gaussiano posterior a convertirlas en escala de 
        grises. Enseguida, se procede a una substracción de fotogramas entre el primer y segundo plano para evitar valores negativos obteniendo
        los valores absolutos de cada pixel.
    </p><br />
    <p>
        Lo siguiente es encontrar los contornos que son un conjunto de pixeles vecinos que tienen el mismo valor. Al detectarse, si 
        se detectan, se evaluan en un umbral determinado por una matriz de pruebas en las que se podrá definir si ese lugar en específico ha presentado activdad
        que pueda considerarse como una ocupación, de esta manera, se puede descartar casos en los que no existe un objeto como tal que demuestre que está ocupado pero sí saber si
        un asociado ha llegado a ocupar ese lugar y lo ha abandonado por un periodo de tiempo.
    </p><br />

    <a href="<?=base_url?>interfaz_info/info_backend">
        <button type='button'>Siguiente</button>
    </a>
</div>