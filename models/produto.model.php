<?php
    class Produto {

        private $id;
        private $title;
        private $description;
        // private $image;
        private $price;

        public function __construct($id, $title, $description, $price) {
            $this->id = $id;
            $this->title = $title;
            $this->description = $description;
            // $this->image = $image;
            $this->price = $price;
        }

        public function getId() {
            return $this->id;
        }
    
        public function setId($id) {
            $this->id = $id;
        }
    
        public function getTitle() {
            return $this->title;
        }
    
        public function setTitle($title) {
            $this->title = $title;
        }
    
        public function getDescription() {
            return $this->description;
        }
    
        public function setDescription($description) {
            $this->description = $description;
        }
    
        // public function getImage() {
        //     return $this->image;
        // }
    
        // public function setImage($image) {
        //     $this->image = $image;
        // }
    
        public function getPrice() {
            return $this->price;
        }
    
        public function setPrice($price) {
            $this->price = $price;
        }

    }
?>