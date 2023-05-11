<?php

    class Modelo{
        protected $db;
        protected $co = "holax";
        function __construct(){
            $this->db = new Databases();
            //$this->db->connect();
            
           // print_r("se logro".$this->connex);
        }

        

        

    }


?>