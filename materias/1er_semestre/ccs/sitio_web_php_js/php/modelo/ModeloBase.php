<?php

require ('DB.php');

class ModeloBase
{

    public $db;

    function __construct()
    {
        $this->db = new DB();
    }

    function __destruct()
    {
        $this->db = null;
    }
}