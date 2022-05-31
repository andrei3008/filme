<?php

class ClasaA {
    public $name="";

    public function setName($name) {
       $this->name = $name;
    }


}



class ClasaB extends ClasaA {

    public function setNameB($name) {
        return $this->setName($name);
    }

    public function getNameB() {
        return $this->name;
    }
}

$om = new ClasaB;
$om->setName("Andrei");

var_dump($om);
