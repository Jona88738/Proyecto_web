<?php

    class signup extends Controlador{

        protected $signup;
        function __construct(){
            require_once 'modelos/signupmodel.php';
            parent::__construct();
            $this->signup = new Signupmodel();
        }

        public function render(){
            $this->view->render('signup');
        }

        public function newuser(){
            
            $nombre = $_POST['alias'];
            $correo = $_POST['correo'];
            $contra =    $_POST['contra']; //$_POST['contrasena'];

            $this->signup->signup($nombre,$correo,$contra);
        }

    }


?>