<?php

    class Databases{
        private $host;
        private $user;
        private $pass;
        private $base;

        function __construct(){
            $this->host = constant('HOST');
            $this->user = constant('USER');
            $this->pass = constant('PASSWORD');
            $this->base = constant('DB');

        }

        public function connect(){
            
            $conn = new mysqli($this->host,$this->user,$this->pass,$this->base);

            if($conn){
                echo"conectado";
            }
        }
    }


?>