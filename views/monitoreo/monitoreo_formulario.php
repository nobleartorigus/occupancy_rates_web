<!--Monitoreo -->
<div id='formulario'>
    <div id='monitoreo' class=bloque>
        <h1>Monitoreo de espacios</h1><br />
        <form action='<?=base_url?>monitoreo/mostrar_piso' method='POST'>
            <label for='floor'>Piso</label>
            <input type="number" name="floor" min="2" max="10" required='True'><br /><br />

            <input type='submit' value='Mostrar' class='boton'>
        </form>

        <br />
        <hr />

        <form action='<?=base_url?>monitoreo/mostrar_fecha' method='POST'>
            <label for='date'>Fecha</label>
            <input type='date' name="date" min="2019-10-01" required='True'><br /><br />

            <input type='submit' value='Mostrar' class='boton'>
        </form>

        <!--
    <label for='date'>Hora</label>
    <input type="time" id="hora"
                min="07:00" max="18:00" required /><br/><br/>
-->
        <br /><br />
        <small>Office hours are 9am to 6pm</small><br /><br />

        <a href='<?=base_url?>monitoreo/mostrar'>
            <input type='button' value='Mostrar todos los resultados' class='boton'>
        </a>
    </div>
</div>