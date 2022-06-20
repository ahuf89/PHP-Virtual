<?php
    class Home extends Controllers {

        public function __construct(){
            parent::__construct();
        }

        public function home(){
            $data['page_id'] = "1";
            $data['page_tag'] = "Home";
            $data['page_title'] = "Página principal";
            $data['page_name'] = "home";
            $data['page_content'] = "Lorem, ipsum dolor sit amet consectetur adipisicing elit. Placeat animi officia eos, mollitia obcaecati totam non? Libero impedit sit doloremque voluptatibus, tenetur cupiditate eius veritatis maiores nostrum? Architecto, nobis quas.";

            $this->views->getView($this, "home", $data); //invocando la vista, (clase Home y texto de la clase)
        }
    }
?>