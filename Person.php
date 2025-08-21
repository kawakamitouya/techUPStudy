<?php 
 
class Person {
    private $name;
    private $age;
    private $gender;

    public function __construct($name, $age, $gender){
        $this->name = $name;
        $this->age = $age;
        $this->gender = $gender;
    }

    public function selfIntroduction() {
    return "私は" . $this->name . "、" . $this->age . "才、" . $this->getGenderText() . "です。";
}

    public function addage(){
        return $this->age + 1;
    }

    public function getGenderText() {
    if ($this->gender === 'm') {
        return '男性';
    } elseif ($this->gender === 'f') {
        return '女性';
    } else {
        return '不明';
    }
}

}
