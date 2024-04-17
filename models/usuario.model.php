<?php
    class Usuario {
        private $username;
        private $name;
        private $password;

        public function __construct($username, $name, $password) {
            $this->username = $username;
            $this->name = $name;
            $this->password = $password;
        }

        public function getUsername(){
            return $this->username;
        }

        public function setUsername($username){
            $this->username = $username;
        }

        public function getName(){
            return $this->name;
        }

        public function setName($name){
            $this->name = $name;
        }

        public function getPassword(){
            return $this->password;
        }

        public function setPassword($password){
            $this->password = $password;
        }
    }
?>