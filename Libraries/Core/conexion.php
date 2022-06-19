<?php
    class Conexion {
        private $conect;
        // DB_HOST 
        // DB_NAME
        // DB_USER 
        // DB_PASSWORD
        // DB_CHARSET 
        public function __construct(){
            $conectionString = "mysql:host=".DB_HOST.";dbname=".DB_NAME.";.DB_CHARSET.";

            try{
                $this->conect = new PDO($conectionString, DB_USER, DB_PASSWORD);
                $this->conect->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            }catch(PDOException $e){
                $this->conect = 'Error de conexión';
                echo "ERROR: " . $e>getMessage();
            }
        }

        public function conect(){
            return $this->conect;
        }
    }
?>