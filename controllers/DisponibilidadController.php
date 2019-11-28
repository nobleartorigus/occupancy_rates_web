<?php

require_once 'models/monitoreo.php';

class disponibilidadController{
    

    public function mostrar_disponible(){
        var_dump($_POST);

        $monitoreo = new Monitoreo();

        $buscar = $monitoreo->getAvailable($_POST['floor']);


        require_once 'views/monitoreo/mostrar_busqueda.php';
        
    }

}

?>