<?php
    class Home extends Controllers {

        public function __construct(){
            parent::__construct();
        }

        public function home($params){
            $this->views->getView($this, "home"); //invocando la vista, (clase Home y texto de la clase)
        }

        public function datos($params){
            echo "Dato recibido".$params;
        }

        public function carrito($params){
            $carrito = $this->model->getCarrito($params);
            echo $carrito;
        }
    }
?>