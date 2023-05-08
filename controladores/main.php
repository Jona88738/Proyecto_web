<?php

    class Main extends Controlador{

        function __construct(){

            parent::__construct();
        }

        public function render(){
            $this->view->render('main');
        }


    }


?>