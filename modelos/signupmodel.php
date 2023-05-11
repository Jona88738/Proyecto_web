<?php

    class Signupmodel extends Modelo{

        function __construct(){
            parent::__construct();
        }

        public function signup($nombre,$correo,$pass){

            $insert = mysqli_query($this->db->connect(),"INSERT INTO usuarios(alias,correo,contrasena) values('$nombre','$correo','$pass')");

            if($insert){
                header('Location: ../login');
            }
        }
    }




?>