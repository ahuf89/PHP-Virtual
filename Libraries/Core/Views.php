<?php
    class Views{

        function getView($controller,$view,$data=""){
            $controller = get_class($controller);
            if($controller == "Home"){
                $view = "Views/".$view.".php"; //creando  ruta ala vista home
            } else {
                $view = "Views/".$controller."/".$view.".php";
            }
            // echo $view;
            require_once($view);
        }
    }
?>