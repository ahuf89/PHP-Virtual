<?php
    class Views{

        function getView($controller,$view){
            $controller = get_class($controller);
            if($controller == "Home"){
                $view = VIEWS.$view.".php"; //creando  ruta ala vista home
            } else {
                $view = VIEWS.$controller."/".$view.".php";
            }
            // echo $view;
            require_once($view);
        }
    }
?>