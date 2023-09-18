<?php

    namespace model;

    class Livros {

        private $id;
        private $nome;

        public function _construct(){}      
        

        public function setId($id) {
            $this->id = $id;
        }
            
        public function getId() {
            return $this->id;
        }

        public function setNome($nome) {
            $this->nome = $nome;
        }
            
        public function getNome() {
            return $this->nome;
        }
    }

?>