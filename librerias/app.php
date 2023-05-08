<?php

    class App {

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




        }

        public function getUrl(){

            if(isset($_GET['url'])){

                
                $url =  rtrim($url, '/');   //quitamos los '/' que esten de mas al final de la cadena url
                $url = explode('/', $url);  //dividimos la cadena $url separada por '/'
                return $url;
            }

            
        }
    }


?>