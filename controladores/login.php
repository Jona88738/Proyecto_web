<?php

    class Login extends Controlador{

        protected $inicio;
        function __construct(){
            require_once 'modelos/loginmodel.php';
            parent::__construct();
            $this->inicio = new Loginmodel();
        }

        public function render(){
            $this->view->render('login');
        }
        

        public function authenticate(){

            $username = $_POST['nombre'];
            $password = $_POST['contraseña'];

            $user = $this->inicio->login($username, $password);

            echo $username;
        }
    }



?>