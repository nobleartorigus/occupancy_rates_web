<!DOCTYPE html>
<html>
    <head lang = 'es'>
        <meta charset = utf-8 />
        <title>Occupancy Rates</title>
        <link rel = 'stylesheet' type = 'text/css' href = '<?=base_url?>assets/css/styles1.css' />
        <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.8.0/Chart.bundle.js"></script>
    </head>
    <body>
        <!-- CABECERA-->
        <header id = 'header'>
            <div id = 'rainbow'>
                <img src = '<?=base_url?>/assets/img/colors.jpg'>
            </div>
            <div id = 'logo'>
                <a href = '<?=base_url?>main/index'>
                <img src = '<?=base_url?>assets/img/bosch-logo.png' alt = 'BOSCH' />
                </a>
                <h1>Occupancy Rates</h1>
                
            </div>
            <!-- MENU-->
            <nav id = 'menu'>
                <ul>
                    <li>
                        <a href = '<?=base_url?>main/index'>Inicio</a>
                    </li>
                    <li>
                        <a href = '<?=base_url?>interfaz_info/index'>Consulta Rapida</a>
                    </li>
                
                    <li>
                        <a href = '<?=base_url?>interfaz_info/info_hardware'>Acera de estre proyecto</a>
                    </li>
                </ul>
            </nav>
            <div class = 'clearfix'></div>
        </header>

        <div id = 'contenedor'>

