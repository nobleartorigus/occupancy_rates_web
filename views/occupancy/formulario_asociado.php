<div id='formulario' class = 'bloque'>
    <aside id='sidebar'>
        <div id='consulta' class='bloque'>
            <h1>Consulta de disponibilidad</h1><br />
            <form action="<?=base_url?>disponibilidad/mostrar_disponible" method='POST'>
                <label for='floor'>Piso</label>
                <input type="number" name="floor" min="2" max="10" required='True'>

                <input type='submit' value='Consultar' />
            </form>
            <br />

        </div>
    </aside>
</div>