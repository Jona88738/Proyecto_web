<?php

    class App {
        
        protected $controlador;
        protected $method;

        function __construct(){

            $url = $this->getUrl();

            if (empty($url[0])){
                $archivoController = 'controladores/main.php';
                require_once $archivoController;
                $controller = new Main();
                //Cargamos el modelo "login"
                //$controller->loadModel('login');
                $controller->render();
                
                return false;
            }

            
            if(file_exists('controladores/'.$url[0].'.php')){

                require_once 'controladores/'.$url[0].'.php';
                

                $this->controlador = ucwords($url[0]);
                
                
                $this->controlador = new $this->controlador;
               
            }

            if(isset($url[1])){

                if(method_exists($this->controlador,$url[1])){
                    
                    $this->method = $url[1];
                    $this->controlador->{$url[1]}(); 
                }
            }else{
                $this->controlador->render();
            }



        }

        public function getUrl(){

            if(isset($_GET['url'])){

                
                $url =  rtrim($_GET['url'], '/');   //quitamos los '/' que esten de mas al final de la cadena url
                $url = explode('/', $url);  //dividimos la cadena $url separada por '/'
                return $url;
            }

            
        }
    }


?>