<?php

class Database{
    public static function connect(){
        $db = new mysqli('localhost', 'daniel_bosch', 'itspecialists', 'occupancy_rates');
        $db->query("SET NAMES 'UTF-8'");

        return $db;
    }
}

?>