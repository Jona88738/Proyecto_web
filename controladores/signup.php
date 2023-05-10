<?php

    class signup extends Controlador{

        function __construct(){
            parent::__construct();
        }

        public function render(){
            $this->view->render('signup');
        }

        public function newuser(){
            
        }

    }


?>