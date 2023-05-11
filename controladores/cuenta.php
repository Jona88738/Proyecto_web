<?php
    class Cuenta extends Controlador{

        protected $inicio;
        function __construct(){
            require_once 'modelos/usermodel.php';
            parent::__construct();
            $this->inicio = new Usermodel();
        }

        public function render(){
            $this->view->render('cuenta');
        }


        public function eliminar($parametro){

            
            //echo "el numero es".$parametro;
            $this->inicio->eliminarUsuario($parametro);
        }
    }


?>