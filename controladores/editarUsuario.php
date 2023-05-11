<?php

    class EditarUsuario extends Controlador{
        protected $model;
        function __construct(){
            require_once 'modelos/usermodel.php';
            $this->model = new Usermodel();
            parent::__construct();
        }

        public function render(){
            $this->view->render('editarUsuario');
        }
        public function editar($para1){
           $this->model->editar($para1);
        }


    }


?>