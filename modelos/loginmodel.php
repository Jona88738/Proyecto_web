<?php

    class LoginModel extends Modelo{

        public function __construct(){
            parent::__construct();
        }

        public function login($user,$password){
            
            $verificar = mysqli_query($con,"SELECT * FROM usuarios");


            while($mostrar = mysqli_fetch_array($verificar)){
                
                if($user == $mostrar[1] && $password == $mostrar[3]){
                    header('Location: cuenta')
                }
                
            }
        }
    } 

    

?>