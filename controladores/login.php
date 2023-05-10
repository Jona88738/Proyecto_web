<?php

    class Login extends Controlador{

        function __construct(){

            parent::__construct();
        }

        public function render(){
            $this->view->render('login');
        }

        public function authenticate(){

        }
    }



?>