<?php
class Home extends Controller {

    public function __construct(){

    }


    public function home($params){
        echo "mensaje desde el controlador home";
    }

    public function datos($params){
        echo "Dato recibido".$params;
    }
}

?>