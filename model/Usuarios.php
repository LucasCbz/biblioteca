<?php

    namespace model;

    class Usuarios{

        private $id;
        private $nome;
        private $email;
        private $senha;

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

        public function setEmail($email) {
            $this->email = $email;
        }
            
        public function getEmail() {
            return $this->email;
        }

        public function setSenha($senha) {
            $this->senha = $senha;
        }
            
        public function getSenha() {
            return $this->senha;
        }
    }    

?>