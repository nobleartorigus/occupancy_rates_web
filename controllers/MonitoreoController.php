<?php

require_once 'models/monitoreo.php';

class monitoreoController{
    public function formulario() {
        require_once 'views/monitoreo/monitoreo_formulario.php';
    }

    public function mostrar(){

        $monitoreo = new Monitoreo();
        $monitorear = $monitoreo->getMonitoreo();

        require_once 'views/monitoreo/mostrar.php';
        
    }

    public function mostrar_piso(){
        var_dump($_POST);

        $monitoreo = new Monitoreo();

        $buscar = $monitoreo->getFloor($_POST['floor']);


        require_once 'views/monitoreo/mostrar_busqueda.php';
        
    }

    public function mostrar_fecha(){
        var_dump($_POST);

        $monitoreo = new Monitoreo();

        $buscar = $monitoreo->getDate($_POST['date']);


        require_once 'views/monitoreo/mostrar_busqueda.php';
        
    }

}

?>