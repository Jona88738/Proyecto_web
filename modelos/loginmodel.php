<?php

    class LoginModel extends Modelo{

        public function __construct(){
            parent::__construct();
        }

        public function login($user,$password){
            //require_once 'librerias/database.php';
            //echo $this->db."conexion";
            //+echo "no se".$this->connex->returncon();
            echo "resultado".$this->co;
            $verificar = mysqli_query($this->db->connect(),"SELECT * FROM usuarios");


            while($mostrar = mysqli_fetch_array($verificar)){
                //echo "info".$mostrar[1]." ".$mostrar[3];
                if($user == $mostrar[1] && $password == $mostrar[3]){
                    echo "Encontrado";
                    header('Location: ../cuenta');
                }
                
            }
        }
    } 

    

?>