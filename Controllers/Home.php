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

        public function insertar(){
            $data = $this->model->setUser("Fernando",25);
            $data = $this->model->setUser("Alex",35);
            $data = $this->model->setUser("Camilo",45);
            $data = $this->model->setUser("Juan",55);
            print_r($data);
        }

        public function verUsuario($id){
            $data = $this->model->getUser($id);
            print_r($data);
        }

        public function actualizar(){
            $data = $this->model->updateUser(1,"roberto",20);
            print_r($data);
        }

        public function verUsuarios(){
            $data = $this->model->getUsers();
            print_r($data);
        }

        public function eliminarUsuario($id){
            $data = $this->model->delUser($id);
            print_r($data);
        }
    }
?>