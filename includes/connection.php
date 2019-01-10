<?php

class connection {
    public $connect;
    function __construct() {
        $this->OpenConnection();
    }

    protected function OpenConnection() {
        try {
            $this->connect = $connect = new PDO("mysql:host=localhost;dbname=upskills_system", 'root', '');
            $connect->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);     
          //  echo "Connected successfully";
        } catch (Exception $e) {
            echo "Connection failed: " . $e->getMessage();
        }
    }

}

