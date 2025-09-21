<?php

class Patient extends Person {
    private $height;
    private $weight;

    // gender を追加
    public function __construct($name, $age, $gender, $height, $weight){
        parent::__construct($name, $age, $gender);

        $this->height = $height;
        $this->weight = $weight;  
    }

    public function getHeight(){
        return $this->height . "m";
    }

    public function getWeight(){
        return $this->weight . "kg";
    }

    public function calculateStandardWeight(){
        return $this->height * $this->height * 22;
    }
}
