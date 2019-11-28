<?php

class interfaz_infoController{
    
    public function index() {
        //echo "Controlador Escritorios, Accion Index";
        require_once 'views/occupancy/interfaz.php';
    }
    public function info_main() {
        //echo "Controlador Escritorios, Accion Index";
        require_once 'views/occupancy/info_main.php';
    }

    public function info_hardware() {
        require_once 'views/occupancy/interfaz_hardware.php';
    }

    public function info_image_treatment() {
        require_once 'views/occupancy/interfaz_info_imaget.php';
    }

    public function info_backend() {
        require_once 'views/occupancy/interfaz_info_back.php';
    }

    public function consulta() {
        require_once 'views/occupancy/formulario_asociado.php';
    }
}

?>