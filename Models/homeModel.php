<?php
    class homeModel{
        public function __construct(){
            // echo "Mensaje desde el modelo homeModel: ";
        }
        public function getCarrito($params){
            return "Datos del carrito No.".$params;
        }
    }

?>