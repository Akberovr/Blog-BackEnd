<?php

Class Config {


    public $conn;


 public function __construct() {
        $this->conn = new mysqli("localhost", "root", "", "blog");
        if (!$this->conn) {
            die("cant connect with database server");
        }
    }

}
