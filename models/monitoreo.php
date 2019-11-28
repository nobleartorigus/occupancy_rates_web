<?php

class Monitoreo{
    private $id;
    private $fila;
    private $piso;
    private $estatus;
    private $fecha;
    private $hora;
    private $db;

    public function __construct(){
        $this->db = Database::connect();
    }

    public function getHora()
    {
        return $this->hora;
    }

    public function setHora($hora)
    {
        $this->hora = $hora;

        return $this;
    }

    public function getFecha()
    {
        return $this->fecha;
    }

    public function setFecha($fecha)
    {
        $this->fecha = $fecha;

        return $this;
    }

    public function getEstatus()
    {
        return $this->estatus;
    }

    public function setEstatus($estatus)
    {
        $this->estatus = $estatus;

        return $this;
    }

    public function getPiso()
    {
        return $this->piso;
    }

    public function setPiso($piso)
    {
        $this->piso = $piso;

        return $this;
    }
    /*
    public function getFila()
    {
        return $this->fila;
    }

    public function setFila($fila)
    {
        $this->fila = $fila;

        return $this;
    }
    */

    public function getId()
    {
        return $this->id;
    }

    public function setId($id)
    {
        $this->id = $id;

        return $this;
    }

    public function getMonitoreo(){
        #$sql = "SELECT piso, estatus, fecha, hora FROM escritorios WHERE estatus = '1';";

        $monitoreo = $this->db->query("SELECT * FROM escritorios;");
        return $monitoreo;
    }

    public function getFloor($floor = null){
        #$sql = "SELECT piso, estatus, fecha, hora FROM escritorios WHERE estatus = '1';";
        $sql = "SELECT * FROM escritorios";

        if(!empty($floor)){
            $sql .= " WHERE piso = $floor ";
        }
        echo $sql;

        $busqueda = $this->db->query($sql);
        return $busqueda;
    }

    public function getDate($date = null){
        #$sql = "SELECT piso, estatus, fecha, hora FROM escritorios WHERE estatus = '1';";
        $sql = "SELECT * FROM escritorios";

        if(!empty($date)){
            $sql .= " WHERE DATE(fecha) = '$date'";
        }
        echo "$sql<br/>";

        $busqueda = $this->db->query($sql);
        return $busqueda;
    }

    public function getAvailable($floor = null){
        #$sql = "SELECT piso, estatus, fecha, hora FROM escritorios WHERE estatus = '1';";
        $sql = "SELECT * FROM escritorios WHERE LEFT(fecha, 10) = LEFT(now(),10)";

        if(!empty($floor)){
            $sql .= " AND piso = $floor";
        }
        echo "$sql<br/>";

        $busqueda = $this->db->query($sql);
        return $busqueda;
    }

}


?>